<?php
include_once __DIR__ . '/../model/category/category_model.php';
include_once __DIR__ . '/../model/product/product_model.php';
include_once __DIR__ . '/../model/color/color_model.php';
include_once __DIR__ . '/../model/size/size_model.php';
include_once __DIR__ . '/../model/inventory/inventory_model.php';

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
        include_once __DIR__ . '/../view/partials/header.php';
    }

    public function controlFooter()
    {
        include_once __DIR__ . '/../view/partials/footer.php';
    }

    //index?page=
    public function controlContent()
    {
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

            if (isset($_POST['addSubmitBTN'])) {

                echo "<h1>add</h1>";

                $productname = $_POST['productname'];
                $categoryid = $_POST['categoryid'];
                $colorid = $_POST['colorid'];
                $productprice = $_POST['productprice'];
                $productimage = $_POST['productimage'];
                $productdesc = $_POST['productdesc'];

                $productsize = [];

                for ($i = 0; $i < 45 - 24 + 1; $i++) {
                    if (isset($_POST['size' . $i + 24])) {
                        array_push($productsize, true);
                    } else {
                        array_push($productsize, false);
                    }
                }

                echo "<h1>add</h1>";

                $product = new Product_Model();

                echo "<h1>add</h1>";
                
                $res = $product->add_product_infor($productname, $productprice, $productdesc, $categoryid, $colorid, $productimage, $productsize);

                echo "<h1>add</h1>";

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

        if (isset($_GET['view'])) {

            $product_id = $_GET['view'];

            $productObj = new Product_Model();
            $categoryObj = new Category_Model();
            $inventoryObj = new Inventory_Model();

            $productInfo = $productObj->get_product_by_id($product_id);

            include_once __DIR__ . '/../view/layout/product-list/manage-index-view-info-product.php';
        } elseif (isset($_GET['edit'])) {

            $productObj = new Product_Model();
            $categoryObj = new Category_Model(); //use
            $inventoryObj = new Inventory_Model();


            $product_id = $_GET['edit'];
            $productInfo = $productObj->get_product_by_id($product_id);

            include_once __DIR__ . '/../view/layout/product-list/manage-index-edit-product.php';
        } elseif (isset($_GET['edited'])) {

            echo "<h1>you are edited</h1>";

            $productObj = new Product_Model();
            $inventoryObj = new Inventory_Model();


            $product_id = $_GET['edited'];

            $updateName = '';
            $updatePrice = '';
            $updateDescription = '';
            $updateAvatar = '';

            if (isset($_POST['updateName'])) {
                $updateName = $_POST['updateName'];

                $res = $productObj->updateNameProductById($product_id, $updateName);
            }

            if (isset($_POST['updatePrice'])) {
                $updatePrice = $_POST['updatePrice'];

                $res = $productObj->updatePriceProductById($product_id, $updatePrice);
            }


            if (isset($_POST['updateDescription'])) {
                $updateDescription = $_POST['updateDescription'];

                $res = $productObj->updateDescriptionProductById($product_id, $updateDescription);
            }

            $productColorList = $inventoryObj->get_colors_of_product($product_id);
            foreach ($productColorList as $productColor) {
                if (isset($_POST['updateAvatarColorId' . $productColor['color_id']])) {
                    $updateAvatar = $_POST['updateAvatarColorId' . $productColor['color_id']];

                    if ($updateAvatar != "") {
                        $res = $productObj->updateAvatarProductById($product_id, $productColor['color_id'], $updateAvatar);
                    }
                }
            }

            header("location: index.php?page=product-list&view=" . $product_id);
        } else {
            $this->display_product_list_page();
        }
    }

    public function display_product_list_page()
    {

        $checkSearcherUsed = false;
        $productList = [];

        if (isset($_GET['SearchProduct'])) {
            $searchInput = $_GET['SearchProduct'];

            $inventoryObj = new Inventory_Model();
            $searchRes = $inventoryObj->search_product_list($searchInput);
            $checkSearcherUsed = true;

            if ($searchRes != false) {
                $productList = $searchRes;
            }
        }


        $categoryObj = new Category_Model();
        $inventoryObj = new Inventory_Model();

        if ($checkSearcherUsed == false) {
            $searchRes = $inventoryObj->get_all_product_not_desc();
            if ($searchRes != false) {
                $productList = $searchRes;
            }
        }

        if ($productList == false) {
            $productList = [];
        }
        include_once __DIR__ . '/../view/layout/product-list/manage-index-product-list.php';
    }

    public function control_category()
    {
        // todo

        if (isset($_GET['addCategory']) && isset($_GET['addCategory']) == "TRUE") {
            $objName = $_POST['categoryObject'];
            $newCategoryName = $_POST['newCategoryName'];

            $categoryObj = new Category_Model();
            $res = $categoryObj->add_category($objName, $newCategoryName);

            header("location: index.php?page=category");
        } elseif (isset($_GET['delete'])) {
            $category_id = $_POST['deleteCategoryId'];

            $productObj = new Product_Model();

            $productListByCategory = $productObj->get_product_list_by_category($category_id);

            $categoryObj = new Category_Model();
            $res = $categoryObj->delete_category_by_id($category_id);
            header("location: index.php?page=category");
        } elseif (isset($_GET['edit'])) {

            $category_id = $_GET['edit'];
            $editCategory = $_POST['editCategory'];

            $categoryObj = new Category_Model();
            $res = $categoryObj->edit_category_by_id_object($category_id, $editCategory);
        }

        $categoryObj = new Category_Model();
        $objectList = $categoryObj->get_object_list();
        include_once __DIR__ . '/../view/layout/category/manage-index-category.php';
    }

    public function control_inventory()
    {

        $checkSearcherUsed = false;
        $productList = [];

        if (isset($_GET['product'])) {
            $product_id = $_GET['product'];
            $this->manage_color_of_product($product_id);
        } else {

            // neu co dau hieu xoa mot san pham
            if (isset($_GET['SearchProduct'])) {
                $searchInput = $_GET['SearchProduct'];

                $inventoryObj = new Inventory_Model();

                $searchRes = $inventoryObj->search_product_list($searchInput);

                $checkSearcherUsed = true;

                if ($searchRes != false) {
                    $productList = $searchRes;
                }
            } else if (isset($_GET['removeProduct']) && $_GET['removeProduct'] == "TRUE") {

                if (isset($_POST['submitRemoveProduct']) && $_POST['submitRemoveProduct'] == "TRUE") {
                    if (isset($_POST['removeProductId'])) {
                        $removeProductId = $_POST['removeProductId'];
                        $this->handle_remove_product_by_id($removeProductId);
                    }
                }
            }

            $categoryObj = new Category_Model();
            $inventoryObj = new Inventory_Model();

            if ($checkSearcherUsed == false) {
                $searchRes = $inventoryObj->get_all_product_not_desc();
                if ($searchRes != false) {
                    $productList = $searchRes;
                }
            }

            include_once __DIR__ . '/../view/layout/inventory/manage-index-inventory.php';
        }
    }

    public function manage_color_of_product($product_id)
    {
        if (isset($_GET['color'])) {
            $color_id = $_GET['color'];

            $this->manage_stock_of_product_of_color($product_id, $color_id);
        } else {

            // handle add new color for product
            if (isset($_POST['submitAddNewColorForProduct']) && $_POST['submitAddNewColorForProduct'] == 'TRUE') {

                $colorid = $_POST['colorid'];
                $productimage = $_POST['productimage'];
                $productsize = [];

                for ($i = 0; $i < 45 - 24 + 1; $i++) {
                    if (isset($_POST['size' . $i + 24])) {
                        array_push($productsize, true);
                    } else {
                        array_push($productsize, false);
                    }
                }

                $inventoryObj = new Inventory_Model();
                $res = $inventoryObj->add_new_color_for_product($product_id, $colorid, $productimage, $productsize);
            } elseif (isset($_POST['submitRemoveColorOfProduct']) && $_POST['submitRemoveColorOfProduct'] == 'TRUE') {

                $removeColorId = $_POST['removeColorId'];
                $inventoryObj = new Inventory_Model();
                $res = $inventoryObj->remove_color_of_product($product_id, $removeColorId);
            }

            $inventoryObj = new Inventory_Model();
            include_once __DIR__ . '/../view/layout/inventory/mange-color-of-product.php';
        }
    }

    public function manage_stock_of_product_of_color($product_id, $color_id)
    {


        if (isset($_POST['submitAddNewSizeForProduct']) && $_POST['submitAddNewSizeForProduct'] == 'TRUE') {
            // ADD
            $newSizeList = [];

            for ($i = 0; $i < 45 - 24 + 1; $i++) {
                if (isset($_POST['size' . $i + 24])) {
                    array_push($newSizeList, $i + 24);
                } else {
                    array_push($newSizeList, NULL);
                }
            }

            $this->handle_add_new_size_for_productColor($product_id, $color_id, $newSizeList);
        } elseif (isset($_POST['submitUpdateQuantity']) && $_POST['submitUpdateQuantity'] == 'TRUE') {
            // UPDATE
            $sizeQuantityList = [];

            for ($i = 0; $i < 45 - 24 + 1; $i++) {
                if (isset($_POST['numOfSize' . $i + 24])) {
                    array_push($sizeQuantityList, ($_POST['numOfSize' . $i + 24]));
                } else {
                    array_push($sizeQuantityList, NULL);
                }
            }

            $this->handle_update_quantity_for_productColor($product_id, $color_id, $sizeQuantityList);
        } elseif (isset($_POST['submitRemoveSizeOfProduct']) && $_POST['submitRemoveSizeOfProduct'] == 'TRUE') {
            // REMOVE
            $removeSizeList = [];

            for ($i = 0; $i < 45 - 24 + 1; $i++) {
                if (isset($_POST['size' . $i + 24])) {
                    array_push($removeSizeList, $i + 24);
                } else {
                    array_push($removeSizeList, NULL);
                }
            }

            $this->handle_remove_size_of_productColor($product_id, $color_id, $removeSizeList);
        }

        $inventoryObj = new Inventory_Model();
        include_once __DIR__ . '/../view/layout/inventory/manage-stock.php';
    }


    public function handle_add_new_size_for_productColor($product_id, $color_id, $newSizeList)
    {

        $inventoryObj = new Inventory_Model();
        foreach ($newSizeList as $newSize) {
            if ($newSize != NULL) {
                $res = $inventoryObj->add_new_size_for_productColor($product_id, $color_id, $newSize);
            }
        }
    }

    public function handle_update_quantity_for_productColor($product_id, $color_id, $sizeQuantityList)
    {
        $inventoryObj = new Inventory_Model();
        $sizeCount = 24;
        foreach ($sizeQuantityList as $sizeQuantity) {
            if ($sizeQuantity != NULL) {
                $res = $inventoryObj->update_quantity_for_aSize_of_productColor($product_id, $color_id, $sizeCount, $sizeQuantity);
            }
            $sizeCount += 1;
        }
    }

    public function handle_remove_size_of_productColor($product_id, $color_id, $removeSizeList)
    {

        $inventoryObj = new Inventory_Model();
        foreach ($removeSizeList as $removeSize) {
            if ($removeSize != NULL) {
                $res = $inventoryObj->remove_size_of_productColor($product_id, $color_id, $removeSize);
            }
        }
    }


    public function handle_remove_product_by_id($removeProductId)
    {

        $inventoryObj = new Inventory_Model();
        $colorOfProduct = $inventoryObj->get_colors_of_product($removeProductId);

        if ($colorOfProduct == false) {
            $res = $inventoryObj->remove_product_notHasColor_by_id($removeProductId);
        }
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
