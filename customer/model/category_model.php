<?php
include_once '../lib/database.php';
include_once '../model/category.php';

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
        $category_table = $result->fetch_all(MYSQLI_ASSOC);
        $category_list = array();
        foreach ($category_table as $row) {
            $category = new Category($row['id'], $row['category_name'], $row['object']);
            array_push($category_list, $category);
        }
        return $category_list;
    }
}