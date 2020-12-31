<?php

class About_us
{
    public function __construct()
    {
        $this->connect_database = new connect();
        $this->db_about_us= 'about_us';
    }

    public function index()
    {
        $query = 'SELECT * FROM '.$this->db_about_us;
        return $this->connect_database->run_query($query);
    }

    public function store($request)
    {
        $created_at = date("Y-m-d H:i:s");
        $updated_at = date("Y-m-d H:i:s");
        $name_image=$request['image'];
        $query = 'INSERT INTO '.$this->db_about_us.' (title, description, image,created_at,updated_at)  VALUES ("'.$request['title'].'","'.$request['description'].'","'.$name_image .'","'.$created_at.'","'.$updated_at.'")';
        var_dump($query);
        return $this->connect_database->run_query($query);
    }
}