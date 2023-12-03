<?php
include_once __DIR__.'/../../lib/database.php';

class Category_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function get_category_by_object($object)
    {
        $query = "SELECT * FROM `category` WHERE object = '$object';";
        $result = $this->database->select($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function get_customer_object_list(){
        $query = "SELECT DISTINCT `object` FROM `category`";
        $result = $this->database->select($query);
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // tra ve mot mang
    public function get_category_by_id($id)
    {
        $query = "SELECT * FROM `category` WHERE id = $id;";
        $result = $this->database->select($query);
        return $result->fetch_all(MYSQLI_ASSOC)[0]; //*
    }
}

function printStr($str){
    echo $str;
}
