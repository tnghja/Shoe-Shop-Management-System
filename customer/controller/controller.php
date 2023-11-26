<?php
class Controller
{
    public function invoke()
    {
        $this->controlHeader();
        $this->controlContent();
        $this->controlFooter();
    }

    public function controlHeader()
    {
        include_once "../model/category_model.php";
        $category_model = new Category_Model();
        include_once "../view/header.php";
    }

    public function control_item_list()
    {
        include_once "../model/color_model.php";
        $color_model = new Color_Model();
        $color_list = $color_model->get_color_list();

        include_once "../model/size_model.php";
        $size_model = new Size_Model();
        $size_list = $size_model->get_size_list();

        include_once "../model/product_model.php";
        $product_model = new Product_Model();
        $product_list = $product_model->get_product_list($_GET['category_id']);

        include_once "../model/productColor_model.php";
        $productColor_model = new ProductColor_Model();

        $filteredColor_list = array();
        if (isset($_GET["color"])) {
            $filteredColor_list = $color_model->get_color_name_by_ids($_GET["color"]);
            $filteredColor = $_GET["color"] . ',';
        } else {
            $filteredColor = "";
        }

        include_once "../view/item-list.php";
    }

    public function controlContent()
    {
        if (isset($_GET["item_list"])) {
            $this->control_item_list();
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
