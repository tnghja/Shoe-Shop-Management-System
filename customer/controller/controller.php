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

    public function controlContent()
    {
        if (isset($_GET["item_list"])) {
            include_once "../model/product_model.php";
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
