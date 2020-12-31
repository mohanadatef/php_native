<?php
session_start();
if (isset($_SESSION['start']) ) {
    include "../../database/connect.php";
    include "../../controller/About_us.php";
    $about_us1 = About_us::index_pbo();
    foreach ($about_us1 as $about_uss) {
        echo $about_uss;
    }
    echo '<br><br><a href="../../index">home</a>';
    echo '<br><br><a href="../../view/auth/login">logout</a>';
} else {
    header("Location: ".$baseurl."view/auth/login");
}