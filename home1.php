<?php
session_start();

if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    echo "Welcome, " . $_SESSION['username'] . "!";
    // Add your protected content here
} else {
    header('Location: login.php');
    exit;
}
?>