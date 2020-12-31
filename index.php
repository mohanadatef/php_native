<?php
session_start();
if (isset($_SESSION['start'])) {
    echo '<a href="view/about_us/index">about_us</a>';
    echo '<br><a href="view/auth/login">logout</a>';
} else {
    header("Location: http://localhost:8080/php_native/view/auth/login");
}