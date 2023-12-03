<?php

include_once "controller.php";
include_once "../lib/database.php";
include_once "../lib/session.php";
include_once "../model/product_model.php";
include_once "../model/color_model.php";
include_once "../model/size_model.php";

class CartController extends Controller {
    private $db; 
    private $session;

    public function __construct()
    {
        $this->db = new Database();
        $this->session = new Session();
    }

    public function invoke() {
        parent::controlHeader();
        $this->controlContent();
        parent::controlFooter();
    }

    public function controlContent() {
        $order_id = $this->get_order_id();

        $cart_items = null;
        
        if ($order_id) {
            $query = "SELECT order_has_product.product_id, product.product_name, order_has_product.color_id, color.color_name, order_has_product.size_id, size_name, order_has_product.product_count as cart_quantity, color_has_sizes.quantity as max_quantity, price, product_has_colors.product_img
                FROM order_has_product
                JOIN product ON order_has_product.product_id = product.id
                JOIN orderdetails ON orderdetails.id = order_has_product.order_id
                JOIN color ON order_has_product.color_id = color.id
                JOIN size ON order_has_product.size_id = size.id
                JOIN product_has_colors 
                    ON order_has_product.product_id = product_has_colors.product_id 
                    AND order_has_product.color_id = product_has_colors.color_id
                JOIN color_has_sizes ON
                    color_has_sizes.product_id = order_has_product.product_id
                    AND color_has_sizes.color_id = order_has_product.color_id
                    AND color_has_sizes.size_id = order_has_product.size_id
                WHERE order_has_product.order_id = ". $order_id . ";";

            $cart_items = $this->db->select($query);
        }

        include_once "../view/layouts/cart/cart.php";
    }

    private function get_order_id() {
        if (!isset($_SESSION['user-id'])) {
            if (isset($_COOKIE['order-id'])) {
                return $_COOKIE['order-id'];
            }

            return null;
        }

        $res = $this->db->select("SELECT id FROM orderdetails WHERE customer_id = {$_SESSION['user-id']}");
        if (!$res) {
            return null;
        }

        return $res->fetch_assoc()["id"];
    }
}