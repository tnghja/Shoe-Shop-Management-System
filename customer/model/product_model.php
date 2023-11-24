<?php
include_once '../lib/database.php';
include_once '../model/product.php';

class Product_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function get_product_list($category_id)
    {
        $query = "SELECT * FROM `product` WHERE category_id = '$category_id';";
        $result = $this->database->select($query);
        $product_table = $result->fetch_all(MYSQLI_ASSOC);
        $product_list = array();
        foreach ($product_table as $row) {
            $product = new Product($row['id'], $row['product_name'], $row['price'], $row['description']);
            array_push($product_list, $product);
        }
        return $product_list;
    }
}
