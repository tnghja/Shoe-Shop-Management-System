<?php

require_once "controller.php";
require_once "../lib/database.php";


class PaymentController extends Controller {
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
        
    }

    private function get_user_cart() {
        
    }

    private function render() {
        /** Render the checkout menu.
         *  TODO:
         *      - Retrieve user's current order
         *      - Retrieve the order's information
         *      - Render checkout page
         */

        parent::controlHeader();

        

        parent::controlFooter();
    }
}