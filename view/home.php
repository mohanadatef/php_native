<?php
session_start();
if (isset($_SESSION['start'])) {
    echo '<a href="../view/about_us/index">about_us</a>
<br><a href="../view/auth/logout">logout</a>';
} else {
    header("Location: " . $baseurl . "view/auth/login");
}