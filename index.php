<?php
session_start();
if (isset($_SESSION['start'])) {
    echo '<a href="view/about_us/index.php">about_us</a>';
} else {
    header("Location: http://localhost:8080/php_native/view/auth/login.php");
}