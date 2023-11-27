<?php
class Controller
{
    public function invoke()
    {
        if (isset($_GET["controller"])) {
            $action = $_GET["action"];
            $controller = $_GET['controller'];
            
            require('../controller/' . $controller . 'Controller.php'); 
            $controller = ucfirst($controller); 
            $request = new $controller;
            
        } else {
            session_start();
            $this->controlHeader();
            $this->controlContent();
            $this->controlFooter();
        }
    }

    public function controlHeader()
    {
        include_once "../model/category_model.php";
        $category_model = new Category_Model();
        include_once "../view/header.php";
    }

    public function controlContent()
    {
        if (isset($_GET["item_list"])) {
            include_once "../model/color_model.php";
            include_once "../model/size_model.php";
            include_once "../model/product_model.php";
            $color_model = new Color_Model();
            $color_list = $color_model->get_color_list();
            $size_model = new Size_Model();
            $size_list = $size_model->get_size_list();
            $product_model = new Product_Model();
            $product_list = $product_model->get_product_list($_GET['category_id']);
            include_once "../view/item-list.php";
        } else if (isset($_GET["detail_item"])) {
            include_once "../view/detail-item.php";
        } else {
            include_once "../view/homepage.php";
        }
    }

    public function controlFooter()
    {
        include_once "../view/footer.php";
    }
}
