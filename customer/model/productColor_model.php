<?php
include_once '../lib/database.php';
include_once '../model/productColor.php';

class ProductColor_Model
{
    private $database;

    public function __construct()
    {
        $this->database = new Database();
    }

    public function get_first_product_img($product_id)
    {
        $query = "SELECT * FROM `product_has_colors` WHERE product_id = '$product_id';";
        $result = $this->database->select($query);
        if ($result) {
            $productColor_table = $result->fetch_all(MYSQLI_ASSOC);
            return $productColor_table[0]['product_img'];
        } else {
            return '../view/assets/img/shoe/shoename/shoeimg.png';
        }

    }
}
