<?php
session_start();
if (isset($_SESSION['start'])) {
    echo '<a href="view/about_us/index.php">about_us</a>';
    echo '<br><a href="view/auth/login.php">logout</a>';

} else {
    header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."view/auth/login.php");
}