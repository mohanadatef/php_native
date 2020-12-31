<?php

class About_us
{
    public function index_mysqli()
    {
        $query = 'SELECT * FROM about_us';
        $result = mysqli_query(connect::connect_database_mysqli(), $query);
        $about_us = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $about_us;
    }

    public function index_pbo()
    {
        return connect::connect_database_pbo()->query('SELECT * FROM about_us')->fetchObject();
    }
}
