<?php
require_once "../../config/app.php";

class Auth
{
    public function login($email)
    {
        $query = "SELECT * FROM users WHERE email='" . $email . "'";
        $result = mysqli_query(connect::connect_database_mysqli(), $query);
        $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if ($user != null) {
            session_start();
            $_SESSION['start'] = 'start';
            header("Location: " .  $GLOBALS['baseurl']);
        } else {
            return "this email not found";
        }
    }

    public function logout()
    {
        unset($_SESSION['start']);
        session_destroy();
        return true;
    }
}
