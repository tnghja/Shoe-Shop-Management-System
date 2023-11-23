<?php

$controller = $_GET['controller'];
require('../controller/' . $controller . 'Controller.php'); /*require controller tương ứng*/
$controller = ucfirst($controller); /*chuyển đổi chữ cái đầu tiên của chuỗi thành chữ hoa */
$request = new $controller; /*khởi tạo một class controller tương ứng với biến $controller*/
    
    /*
    switch ($controller) {
        case 'User':{
            $request->signup();
            break;
        }
        
    }
    */