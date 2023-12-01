<?php
include_once __DIR__ . '/../model/category/category_model.php';
include_once __DIR__ . '/../model/product/product_model.php';
include_once __DIR__ . '/../model/color/color_model.php';
include_once __DIR__ . '/../model/size/size_model.php';

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
        echo 'Hello. How are you header';
        include_once __DIR__ . '/../view/partials/header.php';
    }

    public function controlFooter()
    {
        echo 'Hello. How are you header';
        include_once __DIR__ . '/../view/partials/footer.php';
    }

    //index?page=
    public function controlContent()
    {
        echo 'Hello. How are you content';
        $page = '';
        if (isset($_GET['page'])) {
            $page = $_GET['page'];
        } else {
            $page = '';
        }
        //index?page=
        switch ($page) {
            case 'add-product': {
                    $this->control_add_product();
                    break;
                }

            case 'product-list': {
                    $this->control_product_list(); // dinh nghia ham o duoi
                    break;
                }

            case 'category': {
                    //todo : co ham public function control_add_category() o duoi
                    $this->control_category();
                    break;
                }

            case 'inventory': {
                    $this->control_inventory();
                    break;
                    //todo co ham function control_inventory() o duoi
                }

            default: {
                    $this->control_dashboard();
                }
        }
    }

    // function to handle request get page = ?

    public function control_dashboard()
    {
        include_once __DIR__ . '/../view/layout/dasboard.php';
    }

    public function control_add_product()
    {

        $action = '';
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }

        if ($action == 'submit') {
            echo '<pre> You are already submitted a product </pre>';
            echo '<pre> We are handling your request </pre>';

            $productname = '';
            $productcode = '';
            $customertype = '';
            $categoryid = '';
            $colorid = '';
            $productprice = '';
            $productimage = '';
            $productsize = [];
            $productdesc = '';

            if (isset($_POST['addSubmitBTN'])) {
                $productname = $_POST['productname'];
                $productcode = $_POST['productcode'];
                $customertype = $_POST['customertype'];
                $categoryid = $_POST['categoryid'];
                $colorid = $_POST['colorid'];
                $productprice = $_POST['productprice'];
                $productimage = $_POST['productimage'];
                $productdesc = $_POST['productdesc'];

                for ($i = 0; $i < 45 - 24 + 1; $i++) {
                    if (isset($_POST['size' . $i + 24])) {
                        array_push($productsize, true);
                    } else {
                        array_push($productsize, false);
                    }
                }

                $product = new Product_Model();
                $res = $product->add_product_infor($productname, $productprice, $productdesc, $categoryid, $colorid, $productimage, $productsize);

                header('location: ../app/index.php?page=product-list');
            } else {
                header('location: ../app/index.php?page=add-product');
            }
        } else {
            $categoryObj = new Category_Model();
            $colorObj = new Color_Model();
            include_once __DIR__ . '/../view/layout/add-product/manage-index-add.php';
        }
    }

    public function control_product_list()
    {
        include_once __DIR__ . '/../view/layout/product-list/manage-index-product-list.php';
    }

    public function control_category()
    {
        // todo
    }

    public function control_inventory()
    {
        // todo
        include_once __DIR__.'/../view/layout/inventory/manage-index-inventory.php';
    }
}

// ------------------
// Dung code
// Other one don't edit this code
//handle some some some
// ajax select category associated object
// neu tao file khac thi bi loi o ket noi database. khong biet sua sao.
if (isset($_POST['valueCustomerTypeSelected'])) {
    $categoryObj = new Category_Model();
    $categoryList = $categoryObj->get_category_by_object($_POST['valueCustomerTypeSelected']);
    foreach ($categoryList as $category) {
        echo "<option value='" . $category['id'] . "'>" . $category['category_name'] . "</option>";
    }
}



// ------------------
// Nghia code
// Other one don't edit this code
//handle some some some
// todo
