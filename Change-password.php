<?php
session_start();
include 'connection.php'; 
if (!isset($_SESSION['user_id'])) {
    header('Location: loginuser.php');
    exit();
}

$user_id = $_SESSION['user_id']; 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $current_password = isset($_POST['current_password']) ? trim($_POST['current_password']) : '';
    $new_password = isset($_POST['new_password']) ? trim($_POST['new_password']) : '';
    $confirm_password = isset($_POST['confirm_password']) ? trim($_POST['confirm_password']) : '';

   
    if (empty($current_password) || empty($new_password) || empty($confirm_password)) {
        $_SESSION['message'] = "All fields are required.";
        $_SESSION['message_type'] = "error";
    } elseif ($new_password !== $confirm_password) {
        $_SESSION['message'] = "New password and confirm password do not match.";
        $_SESSION['message_type'] = "error";
    } else {
       
        $stmt = $conn->prepare("SELECT password FROM users WHERE user_id = ?");
        $stmt->bind_param("i", $user_id);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 1) {
            $user = $result->fetch_assoc();
            $hashed_password = $user['password'];

       
            if (password_verify($current_password, $hashed_password)) {
              
                $new_hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

                $update_stmt = $conn->prepare("UPDATE users SET password = ? WHERE user_id = ?");
                $update_stmt->bind_param("si", $new_hashed_password, $user_id);

                if ($update_stmt->execute()) {
                    $_SESSION['message'] = "Password changed successfully!";
                    $_SESSION['message_type'] = "success";
                } else {
                    $_SESSION['message'] = "An error occurred. Please try again.";
                    $_SESSION['message_type'] = "error";
                }
            } else {
                $_SESSION['message'] = "Current password is incorrect.";
                $_SESSION['message_type'] = "error";
            }
        } else {
            $_SESSION['message'] = "User not found.";
            $_SESSION['message_type'] = "error";
        }
    }

    header('Location: dashboard-change-password.php');
    exit();
}
?>
