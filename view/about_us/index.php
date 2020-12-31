<?php
session_start();
if (isset($_SESSION['start'])) {
    include "../../database/Connect.php";
    include "../../controller/About_us.php";
    $about_us = new About_us();
    $about_us1 = $about_us->index();
    foreach ($about_us1[0] as $about_us111) {
        echo $about_us111;
    }
    echo '<br><br><a href="../../index">home</a>';
    echo '<br><br><a href="../../view/auth/login">logout</a>';
} else {
    header("Location: " . $baseurl . "view/auth/login");
}