<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jobportal";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $token = $_POST['token'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($password === $confirm_password) {
        $sql = "SELECT * FROM password_reset WHERE token = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $token);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $email = $row['email'];
            $hashed_password = password_hash($password, PASSWORD_BCRYPT);

            // Update user password
            $sql = "UPDATE users SET password = ? WHERE email = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $hashed_password, $email);
            if ($stmt->execute()) {
                echo "<script>alert('Password reset successful.'); window.location='log-in-register.php';</script>";
            } else {
                echo "<script>alert('Failed to reset password.');</script>";
            }

            // Delete token
            $sql = "DELETE FROM password_reset WHERE token = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("s", $token);
            $stmt->execute();
        } else {
            echo "<script>alert('Invalid or expired token.');</script>";
        }
    } else {
        echo "<script>alert('Passwords do not match.');</script>";
    }
}
$conn->close();
?>
