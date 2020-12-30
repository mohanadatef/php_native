<?php

class connect
{
    public function connect_database_mysqli()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'kuwait_elections');

        if (!$conn) {
            echo 'error connect' . mysqli_connect_error();
        }
        return $conn;
    }

    public function connect_database_pbo()
    {
        $myPDO = new PDO('mysql:host=localhost;dbname=kuwait_elections', 'root', '');
        if (!$myPDO) {
            echo 'error connect' ;
        }
        return $myPDO;

    }
}