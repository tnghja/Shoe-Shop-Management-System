<?php

include_once "../model/category_model.php";
include_once "../model/product_model.php";
include_once "../model/color_model.php";
include_once "../model/size_model.php";
include_once "../model/userModel.php";

class Controller
{
    public function invoke()
    {
        if (isset($_GET["controller"])) {
            // $action = $_GET["action"];
            $controller = $_GET['controller'];
            require('../controller/' . $controller . 'Controller.php');
            $request = new User;
        } else {
            session_start();
            $this->controlHeader();
            $this->controlContent();
            $this->controlFooter();
        }
    }

    public function controlHeader()
    {
        $category_model = new Category_Model();
        include_once "../view/partials/header.php";
    }

    public function control_item_list()
    {
        $color_model = new Color_Model();

        $size_model = new Size_Model();

        $product_model = new Product_Model();

        $search = '';
        if (isset($_POST['search'])) {
            $search = $_POST['search'];
            $product_list = $product_model->search_product_list($search);
        } else {
            $filteredColor_list = array();
            $filteredColor = "";
            if (isset($_GET["color"])) {
                $color_list = $color_model->get_color_list($_GET["color"]);
                $filteredColor_list = $color_model->get_color_list_by_ids($color_list);
                if ($_GET["color"] != '') {
                    $filteredColor = $_GET["color"];
                }
            } else {
                $color_list = $color_model->get_color_list('');
            }

            $filteredSize_list = array();
            $filteredSize = "";
            if (isset($_GET["size"])) {
                $size_list = $size_model->get_size_list($_GET["size"]);
                $filteredSize_list = $size_model->get_size_list_by_ids($size_list);
                if ($_GET["size"] != '') {
                    $filteredSize = $_GET["size"];
                }
            } else {
                $size_list = $size_model->get_size_list('');
            }

            $price = '';
            if (isset($_GET['price'])) {
                $price = $_GET['price'];
            }

            $sort = '';
            if (isset($_GET['sort'])) {
                $sort = $_GET['sort'];
            }

            $category_model = new Category_Model();
            $category = $category_model->get_category_by_id($_GET['category_id']);

            $product_list = $product_model->filter_product_list($filteredColor, $filteredSize, $price, $category['id'], $sort);
        }

        $viewmore = true;
        $limited = false;
        $product_count = 15;
        if (!isset($_GET['viewmore']) && $product_list) {
            if (count($product_list) <= $product_count) {
                $limited = true;
            } else {
                $viewmore = false;
                $product_list = array_slice($product_list, 0, $product_count);
            }
        }

        include_once "../view/layouts/product/item-list.php";
    }

    public function control_detail_item()
    {
        $product_id = $_GET['product_id'];
        $product_model = new Product_Model();
        $product = $product_model->get_product_by_id($product_id);

        $category_model = new Category_Model();
        $category = $category_model->get_category_by_id($product['category_id']);

        $colors_of_product = $product_model->get_colors_of_product($product_id);

        $color_id = $colors_of_product[0]['color_id'];
        $avatar = $colors_of_product[0]['product_img'];
        if (isset($_GET['color_id'])) {
            $color_id = $_GET['color_id'];
            $avatar = $product_model->get_avatar($product_id, $color_id);
        }
        $sizes_of_productColor = $product_model->get_sizes_of_productColor($product_id, $color_id);

        $size_id = $sizes_of_productColor[0]['size_id'];
        if (isset($_GET['size_id'])) {
            $size_id = $_GET['size_id'];
        }
        $quantity = $product_model->get_quantity($product_id, $color_id, $size_id);

        include_once "../view/layouts/product/breadcrumb.php";
        include_once "../view/layouts/product/detail-item.php";
    }

    public function control_account_update()
    {
        /*
        if (isset($_POST['update'])) {
            $user_model = new UserModel();
            $fullname =  $_POST['fullname'];
            $date = $_POST['date'];
            $province = $_POST['provinceOption'];
            $district = $_POST['districtOption'];
            $detail = $_POST['detail'];
            $phone =     $_POST['phone'];
            $id = $_POST['id'];
        }
        */
        $user_model = new UserModel();
        if (isset($_POST["fullname"])) {
            $fullname = $_POST["fullname"];
        }
        if (isset($_POST["date"])) {
            $date = $_POST["date"];
        }
        if (isset($_POST["text_province"])) {
            $province = $_POST["text_province"];
        }
        if (isset($_POST["text_district"])) {
            $district = $_POST['text_district'];
        }
        if (isset($_POST['detail'])) {
            $detail = $_POST['detail'];
        }
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        $id = $_SESSION['user-id'];

        $result = $user_model->__update($id, $fullname, $date, $province, $district, $detail, $phone);
        $_SESSION['success-update'] = $result;
        if ($result) {

            echo '<META HTTP-EQUIV="Refresh" Content="0; URL=' . '?account' . '">';
            die();
        }
    }

    public function controlContent()
    {
        if (isset($_GET["item_list"])) {
            $this->control_item_list();
        } else if (isset($_GET["detail_item"])) {
            $this->control_detail_item();
        } else if (isset($_GET["account"])) {

            if (isset($_GET["action"])) {
                $action = $_GET["action"];
                switch ($action) {
                    case "": {

                            include_once "../view/layouts/account/account.php";

                            break;
                        }
                    case "update": {
                            // $user_model = new UserModel();
                            include_once "../view/layouts/account/account-update.php";
                            if (isset($_POST["update"])) {
                                $this->control_account_update();
                            }
                            break;
                        }
                    case "manage": {
                            include_once "../view/layouts/account/account-manage.php";
                            break;
                        }
                    case "maps": {
                            include_once "../view/layouts/account/account-maps.php";
                            break;
                        }
                    case "notifi": {
                            include_once "../view/layouts/account/account-notifi.php";
                            break;
                        }
                    default: {
                            include_once "../view/layouts/account/account.php";
                            break;
                        }
                }
            } else {
                include_once "../view/layouts/account/account.php";
            }
        } else {
            include_once "../view//layouts/homepage.php";
        }
    }

    public function controlFooter()
    {
        include_once "../view//partials/footer.php";
    }
}
