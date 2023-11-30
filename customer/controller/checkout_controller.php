<?php

require_once "controller.php";
require_once "../lib/database.php";
require_once "../lib/session.php";
require_once "../config/config.php";

class PaymentController extends Controller {
    private $customer;
    private $session;
    private $db;

    public function __construct() {
        $customer = $this->get_customer_info();
        $session = new Session();
        $db = new Database();
    }

    public function invoke() {
        // TODO: Check if the incoming request is sent from authenticated user.
        if (!($this->is_authenticated())) {
            header('HTTP/1.1 401 Unauthorized');
            header('Content-Type: text/plain');
            echo '401 Unauthorized - Authentication Required';

            return;
        }

        $method = $_SERVER['REQUEST_METHOD'];

        if ($method === 'GET') {
            // Handle GET request
            $this->get();
        } elseif ($method === 'POST') {
            // Handle POST request
            $this->post();
        } else {
            // Invalid request
            header('HTTP/1.1 400 Bad Request');
            header('Content-Type: text/plain');
            echo '400 Bad Request - Invalid or Malformed Request';
            return;
        }
    }

    private function get() {
        /** Handle HTTP GET method. */
        header('HTTP/1.1 200 OK');
        header('Content-Type: text/html');
        $this->render();
    }

    /** Retrieve customer's information from the database.
     *  Return: A associative array representing customer's information.
     *          null if the user is anonymous.
     */
    private function get_customer_info() {

        $conn = new Database();
        $session = $this->session;
        $res = $conn->select("SELECT * FROM customeraccount WHERE id = {$session->get('customer_id')}");
        return $res or $res->fetch_assoc();
    }


    private function post() {
        /* Handle HTTP POST method. 
         * TODO:
         *  - Handle the transaction
         *  - Update transaction's history
         *  - Clear user's cart if the transaction is successful.
         */         
    }

    private function is_authenticated() {
        if (session_status() == PHP_SESSION_ACTIVE) {
            return $_SESSION['login'];
        }

        return false;
    }

    /** get_cart_info: Retrieve items in the customer's cart.
     *  Return:
     *      An associative array representing the cart, each item
     *      is an associative array (hashmap) including the following fields:
     *          -   product_name: product's name
     *          -   color: product's color
     *          -   size: product's size
     *          -   price: product's price
     *          -   quantity
     */
    private function get_cart_info() {
        if (!($this->customer)) {
           // TODO: Handle the case that user is logged in anonymously.
           return null;
        }

        $db = $this->db;
        
        // Get cart's id
        $cart_id = null;
        if ($this->customer) {
            $fetch_cart_res = $this->db->query("SELECT id FROM cart WHERE customer_id={$this->customer['id']}");
            $cart_id = $fetch_cart_res->fetch_assoc()["id"];
        } else {
            $cart_id = $this->session->get("cart_id");
        }

        $query = "
            SELECT product_name, price, color_name, size_name, quantity
            FROM cart_item JOIN cart ON cart_item.cart_id = cart.id
                JOIN product ON product.id = cart_item.product_id
                JOIN color ON color.id = cart_item.color_id
                JOIN size ON size.id = cart_item.size_id
            WHERE cart.id = {$cart_id};
        ";

        $result = $db->select($query);
        $cart = array();
        while ($row = $result->fetch_assoc()) {
            $cart_item = array(
                "product_name" => $row["product_name"],
                "size" => $row["size_name"],
                "color" => $row["color_name"],
                "price" => $row["price"],
                "quantity" => $row["quantity"]
            );
            $cart[] = $row;
        }
        return $cart;
    }

    /** get_default_addr: Retrieve customer's default address. */
    private function get_default_address() {
        return;
    }

    private function render() {
        /** Render the checkout menu.
         *  TODO:
         *      - Retrieve user's current order
         *      - Retrieve the order's address (use for auto-fill feature)
         *      - Render checkout page
         */

        parent::controlHeader();
        
        // Retrieve user's cart
        $cart = $this->get_cart_info();

        // Calculate total price of the cart
        $total_price = array_reduce($cart, 
            fn ($total_price, $cart_item) => $total_price + $cart_item["price"] * $cart_item["quantity"], 0);
        
        // TODO: Get customer's default address

        $def_addr = $this->get_default_address();
        $transport_cost = 12000;

        include '../view/checkout.php';

        parent::controlFooter();
    }
}