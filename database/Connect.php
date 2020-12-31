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

    public function run_query($query)
    {
        $result = mysqli_query($this->connect_database_mysqli(), $query);
        if($result == true && empty($result))
        {
            return true;
        }
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}