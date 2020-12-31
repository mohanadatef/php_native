<?php

class About_us
{
    public function __construct()
    {
        $this->connect_database = new connect();
    }

    public function index_mysqli()
    {
        $query = 'SELECT * FROM about_us';
        $result = mysqli_query($this->connect_database->connect_database_mysqli(), $query);
        $x= mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $x;
    }
}