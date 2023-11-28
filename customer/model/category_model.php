<?php
include_once '../lib/database.php';

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
}
