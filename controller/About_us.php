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
        return $this->connect_database->run_query($query);
    }
}