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
    echo '<br><br><a href="../../index.php">home</a>';
    echo '<br><br><a href="../../view/auth/login.php">logout</a>';

} else {
    header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']."view/auth/login.php");
}