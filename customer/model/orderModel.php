<?php
include_once("../lib/database.php");

class OrderModel extends Database
{
    protected $db;
    public function __construct()
    {
        $this->db = new Database();
        // echo "132";

    }
    public function __get($customer_id)
    {
        $sql = "SELECT * from orderdetails WHERE customer_id = $customer_id";
        $result = self::$link->query($sql);
        return $result;
    }

    public function __getOrder($orderid)
    {
        $sql = "SELECT * from orderdetails WHERE id = $orderid";
        $result = self::$link->query($sql);
        return $result;
    }
    public function __getOrderDetail($orderid)
    {
        $sql = "SELECT * from order_has_product WHERE order_id = $orderid";
        $result = self::$link->query($sql);
        return $result;
    }
    public function __getOrderInformation($id)
    {
        $sql = "SELECT product_name, color.color_name, size.size_name, product_count,  price, product_count*price as total
                FROM order_has_product,color_has_sizes, product, color, size
                WHERE order_id = $id
                and order_has_product.product_id = color_has_sizes.product_id
                and order_has_product.color_id = color_has_sizes.color_id
                and order_has_product.size_id = color_has_sizes.size_id
                and order_has_product.product_id =  product.id
                and order_has_product.color_id = color.id
                and order_has_product.size_id = size.id;";
        $result = self::$link->query($sql);
        return $result;
    
    }
}
