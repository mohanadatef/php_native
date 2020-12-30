<?php



class about_us
{
    public function __construct()
    {
        $this->connect_database = new connect();
    }

    public function index_mysqli()
    {

        $query = 'SELECT * FROM about_us';
        $result = mysqli_query($this->connect_database->connect_database_mysqli(), $query);
        $about_us = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $about_us;
    }

    public function index_pbo()
    {

        return $this->connect_database->connect_database_pbo()->query('SELECT * FROM about_us')->fetchObject();
    }
}
