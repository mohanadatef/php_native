<?php
include "../../database/Connect.php";
include "../../controller/Auth.php";
$auth = new  Auth();
session_start();
if (isset($_SESSION['start'])) {
    $auth->logout();
}