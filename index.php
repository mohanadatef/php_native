<?php
session_start();
if (isset($_SESSION['start'])) {
    header("Location: ".$baseurl."view/home");
} else {
    header("Location: ".$baseurl."view/auth/login");
}