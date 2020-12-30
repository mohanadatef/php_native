<?php
session_start();
if (isset($_SESSION['start']) ) {
    include "../../database/connect.php";
    include "../../controller/about_us.php";
    $about_us = new about_us();
    $about_us1 = $about_us->index_pbo();
    foreach ($about_us1 as $about_uss) {
        echo $about_uss;
    }
    echo '<a href="../../index.php">home</a>';
} else {
    header("Location: http://localhost:8080/php_native/view/auth/login.php");
}