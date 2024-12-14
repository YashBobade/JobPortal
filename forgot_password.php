<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = trim($_POST['email']);
    
    if (!empty($email)) {
        // Check if email exists
        $sql = "SELECT * FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        
        if ($result->num_rows > 0) {
            // Generate reset token
            $token = bin2hex(random_bytes(50));
            $sql = "INSERT INTO password_reset (email, token) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $email, $token);
            $stmt->execute();

            // Send reset email
            $resetLink = "http://yourdomain.com/reset_password.php?token=" . $token;
            $subject = "Password Reset Request";
            $message = "Click on the link to reset your password: " . $resetLink;
            $headers = "From: no-reply@yourdomain.com";

            if (mail($email, $subject, $message, $headers)) {
                echo "<script>alert('Password reset link sent to your email.');</script>";
            } else {
                echo "<script>alert('Failed to send email. Please try again.');</script>";
            }
        } else {
            echo "<script>alert('No account found with this email.');</script>";
        }
    } else {
        echo "<script>alert('Please enter your email.');</script>";
    }
}
$conn->close();
?>
