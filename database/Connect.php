<?php

class Connect
{
    public function connect_database_mysqli()
    {
        $conn = mysqli_connect('localhost', 'root', '', 'kuwait_elections');
        if (!$conn) {
            echo 'error connect' . mysqli_connect_error();
        }
        return $conn;
    }
}