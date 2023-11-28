<?php
include_once '../lib/database.php';

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
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function filter_product_list($color, $size, $price, $category_id)
    {
        if (empty($color) && empty($size) && empty($price)) {

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM `product` WHERE category_id = '$category_id';";

        } elseif (empty($color) && empty($size)) {

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product
            WHERE category_id = $category_id
            AND product.price < $price";

        } elseif (empty($size) && empty($price)) {

            if (substr($color, -1) == ',') {
                $color = substr($color, 0, -1);
            }
            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product, product_has_colors
            WHERE category_id = $category_id
            AND product.id = product_has_colors.product_id
            AND product_has_colors.color_id in ($color);";

        } elseif (empty($color) && empty($price)) {

            if (substr($size, -1) == ',') {
                $size = substr($size, 0, -1);
            }

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product, color_has_sizes
            WHERE category_id = $category_id
            AND product.id = color_has_sizes.product_id
            AND color_has_sizes.size_id in ($size);";

        } elseif (empty($color)) {

            if (substr($size, -1) == ',') {
                $size = substr($size, 0, -1);
            }

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product, color_has_sizes
            WHERE category_id = $category_id
            AND product.id = color_has_sizes.product_id
            AND product.price < $price
            AND color_has_sizes.size_id in ($size);";

        } elseif (empty($size)) {

            if (substr($color, -1) == ',') {
                $color = substr($color, 0, -1);
            }

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product, product_has_colors
            WHERE category_id = $category_id
            AND product.id = product_has_colors.product_id
            AND product.price < $price
            AND product_has_colors.color_id in ($color);";

        } elseif (empty($price)) {

            if (substr($color, -1) == ',') {
                $color = substr($color, 0, -1);
            }
            if (substr($size, -1) == ',') {
                $size = substr($size, 0, -1);
            }

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product, color_has_sizes
            WHERE category_id = $category_id
            AND product.id = color_has_sizes.product_id
            AND color_has_sizes.color_id in ($color)
            AND color_has_sizes.size_id in ($size);";

        } else {

            if (substr($color, -1) == ',') {
                $color = substr($color, 0, -1);
            }
            if (substr($size, -1) == ',') {
                $size = substr($size, 0, -1);
            }

            $query = "SELECT DISTINCT product.id,product.product_name,product.price,product.avatar
            FROM product, color_has_sizes
            WHERE category_id = $category_id
            AND product.id = color_has_sizes.product_id
            AND product.price < $price
            AND color_has_sizes.color_id in ($color)
            AND color_has_sizes.size_id in ($size);";

        }

        $result = $this->database->select($query);
        if ($result) {
            return $result->fetch_all(MYSQLI_ASSOC);
        } else {
            return false;
        }

    }
}
