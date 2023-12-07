<!-- main wrapper -->
<div class="main_wrapper d-flex flex-row">
    <!-- side navigate wrapper -->
    <div class="sidenav text-wrap p-0 m-0">
        <nav class="nav nav-pills flex-column text-center p-0 m-0">
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=dashboard">Dashboard</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=category">Danh mục sản
                phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Danh sách
                sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=add-product">Thêm sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=inventory">Nhà kho</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
        </nav>
    </div>

    <!-- php variable $productInfo: id, product_name, price, description, category_id -->

    <!-- main content wrapper -->
    <div class="maincontent container-fluid">
        <!-- to do -->
        <div class="mb-2">
            <div class="backbutton">
                <a href="index.php?page=product-list" type="button" class="update_info_product btn btn-sm btn-primary me-0 m-1">
                    TRỞ VỀ DANH SÁCH
                </a>
            </div>
            <h5 class="m-0"><?php if ($productInfo == false) {
                                echo 'KHÔNG TÌM THẤY ';
                            } ?>THÔNG TIN SẢN PHẨM</h5>
        </div>

        <div class="view row g-3" <?php if ($productInfo == false) {
                                        echo 'hidden';
                                    } ?>>
            <!-- ten san pham, ma san pham, loai san pham, ngay ra mat, 
                        doi tuong, size, mau sac mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->


            <!-- php variable $productInfo: id, product_name, price, description, category_id -->
            <!-- php variable $product_id -->
            <!-- $inventoryObj, $categoryObj, $productObj -->

            <div class="view__name col-12">
                <div>
                    Tên sản phẩm
                </div>
                <div class="vaule border rounded-2 p-2">
                    <?php echo $productInfo['product_name'] ?>
                </div>
            </div>

            <div class="view__cus col-md-6 col-lg-4">
                <div>
                    Giá sản phẩm
                </div>
                <div class="vaule border rounded-2 p-2">
                    <?php echo $productInfo['price'] ?>
                </div>
            </div>

            <?php
            $category = $categoryObj->get_category_by_id($productInfo['category_id']);
            ?>

            <div class="view__cus col-md-6 col-lg-4">
                <div>
                    Đối tượng
                </div>
                <div class="vaule border rounded-2 p-2">
                    <?php echo $category['object'] ?>
                </div>
            </div>

            <div class="view__type col-md-6 col-lg-4">
                <div>
                    Loại sản phẩm
                </div>
                <div class="value border rounded-2 p-2">
                    <?php echo $category['category_name'] ?>
                </div>
            </div>

            <?php
            $product_color_img_list = $inventoryObj->get_colors_of_product($product_id);

            ?>

            <div class="view_image col-12">
                <div>
                    Các màu và Hình ảnh của sản phẩm
                </div>

                <div class="productImage border rounded-2 p-1 d-flex flex-wrap">

                    <?php
                    if ($product_color_img_list != false) {
                        $i = 0;
                        foreach ($product_color_img_list as $product_color_img) {
                            $img = $product_color_img['product_img'];
                            $color = $product_color_img['color_name'];
                            $color_id = $product_color_img['color_id'];
                            $i++;

                    ?>
                            <div class="mx-3 my-1">
                                <figure class="" style="width:150px">
                                    <figcaption class="text-center">Fig.<?= $i ?> - <?= $color ?></figcaption>
                                    <img src="<?= $img ?>" alt="Hình ảnh sản phẩm mã <?= $product_id ?> - màu <?= $color ?>" style="width:150px">
                                </figure>
                            </div>

                    <?php
                        }
                    }
                    ?>
                </div>

            </div>

            <div class="view__desription">
                <div>
                    Mô tả sản phẩm
                </div>
                <div class="value border rounded-2 p-2" style="min-height: 10em;">
                    <?php echo $productInfo['description'] ?>
                </div>
            </div>
        </div>
    </div>
</div>