<?php
include('connection.php');

// Initialize variables
$user_id = $_SESSION['user_id'] ?? null;
$user_full_name = $_SESSION['user_full_name'] ?? null;
$user_email = $_SESSION['user_email'] ?? null;

// Redirect to login page if the user is not authenticated
if (!$user_id) {
    // Check if the user can be authenticated via cookies
    if (isset($_COOKIE['user_email']) && isset($_COOKIE['user_password'])) {
        $email = $_COOKIE['user_email'];
        $password = $_COOKIE['user_password'];

        $sql = "SELECT user_id, full_name, email, password FROM users WHERE email = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            // Verify password
            if (password_verify($password, $user['password'])) {
                // Set session variables
                $_SESSION['user_id'] = $user['user_id'];
                $_SESSION['user_full_name'] = $user['full_name'];
                $_SESSION['user_email'] = $user['email'];

                $user_id = $user['user_id'];
                $user_full_name = $user['full_name'];
                $user_email = $user['email'];
            } else {
                // Invalid cookie credentials
                header("Location: loginuser.php");
                exit;
            }
        } else {
            // No user found with the provided email
            header("Location: loginuser.php");
            exit;
        }
    } else {
        // No session or cookie, redirect to login
        header("Location: loginuser.php");
        exit;
    }
}

// Display success/failure messages if set in session
$message = $_SESSION['message'] ?? '';
unset($_SESSION['message']);

// Fetch user details for the dashboard or profile
$sql = "SELECT * FROM users WHERE user_id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Close the database connection
$stmt->close();
$conn->close();
?>
