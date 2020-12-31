<?php
class auth
{
    public function __construct()
    {
        $this->connect_database= new connect();
    }

    public function login($email)
    {
        $query = "SELECT * FROM users WHERE email='". $email."'" ;

        $result = mysqli_query($this->connect_database->connect_database_mysqli(), $query);

        if($result != null)
        {
            $user = mysqli_fetch_all($result, MYSQLI_ASSOC);
            return $user;
        }
        else
        {
            $user=array();
            return $user;
        }
    }

    public function logout()
    {

        unset($_SESSION['start']);
        session_destroy();
        return true;
    }
}