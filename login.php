<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    // Replace with your actual authentication logic
    if ($_POST['username'] === 'user1' && $_POST['password'] === 'password123') {
        $_SESSION['logged_in'] = true;
        $_SESSION['username'] = 'user1';
        header('Location: index.php');
        exit;
    } else {
        // Handle incorrect credentials, e.g., display an error message
        echo "Invalid username or password.";
    }
}
?>