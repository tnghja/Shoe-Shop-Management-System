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

    <!-- main content wrapper -->
    <div class="maincontent container container-fluid">
        <!-- to do -->
        <div class="mb-2">
            <div class="backbutton">
                <a href="index.php?page=product-list" type="button" class="update_info_product btn btn-sm btn-primary me-0 m-1">
                    TRỞ VỀ DANH SÁCH
                </a>
            </div>
            <h5>CẬP NHẬT THÔNG TIN SẢN PHẨM</h5>
        </div>
        <form id="formForUpdateProduct" class="row g-3" action="index.php?page=product-list&edited=<?= $product_id ?>" method="post" onsubmit="checkInputValue('formForUpdateProduct')">
            <!-- ten san pham, ma san pham, loai san pham, ngay ra mat, 
                        doi tuong, size, mau sac mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->


            <!-- php variable $productInfo: id, product_name, price, description, category_id -->
            <!-- php variable $product_id -->
            <!-- $inventoryObj, $categoryObj, $productObj -->


            <!-- name -->
            <div class="update_form__name col-12">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" name="unUpdateName" value="<?php echo $productInfo['product_name'] ?>" class="form-control" id="name" onchange="onUpdateInfoElement('name')" required>
            </div>

            <!-- price -->
            <div class="update_form__name col-md-6 col-lg-4">
                <label for="price" class="form-label">Giá sản phẩm</label>
                <input type="number" name="unUpdatePrice" value="<?php echo $productInfo['price'] ?>" min='0' max='1000000000' class="form-control" id="price" onchange="onUpdateInfoElement('price')" required>
            </div>

            <?php
            $category = $categoryObj->get_category_by_id($productInfo['category_id']);
            ?>

            <!-- doi tuong/customer -->
            <div class="undate_formm__cus col-md-6 col-lg-4">
                <label for="customertype" class="form-label">Đối tượng</label>
                <select id="customertype" class="form-select" disabled>
                    <option value=" <?php echo $category['object'] ?>"> <?php echo $category['object'] ?></option>
                </select>
            </div>

            <!-- type -->
            <div class="update_form__type col-md-6 col-lg-4">
                <label for="producttype" class="form-label">Loại sản phẩm</label>
                <select id="producttype" class="form-select" disabled>
                    <option value="<?php echo $category['category_name'] ?>"><?php echo $category['category_name'] ?></option>
                </select>
            </div>

            <!-- doi tuong, size, mau sac, mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->

            <!-- avatar -->
            <?php
            $product_color_img_list = $inventoryObj->get_colors_of_product($product_id);
            ?>
            <div class="view_image col-12">
                <div>
                    Các màu và Hình ảnh của sản phẩm
                </div>

                <div class="productImage">

                    <?php
                    if (!empty($product_color_img_list)) {
                        $i = 0;
                        foreach ($product_color_img_list as $product_color_img) {
                            $img = $product_color_img['product_img'];
                            $color = $product_color_img['color_name'];
                            $color_id = $product_color_img['color_id'];
                            $i++;

                    ?>
                            <div class="wrapper-image d-flex flex-wrap align-items-start">
                                <div class="mx-4 my-3">
                                    <figure class="" style="width:150px">
                                        <figcaption class="text-center">Màu.<?= $i ?> - <?= $color ?></figcaption>
                                        <img src="<?= $img ?>" alt="Hình ảnh sản phẩm mã <?= $product_id ?> - màu <?= $color ?>" style="width:150px">
                                    </figure>
                                </div>

                                <div class="new_avatar mx-4 my-3">
                                    <label class="form-label m-0 mb-2" for="avatarColorId<?= $color_id ?>">Chọn hình ảnh mới (nhập link)</label>
                                    <input type="url" value="" name="updateAvatarColorId<?= $color_id ?>" class="form-control mb-1" style="width: 300px;" id="avatarColorId<?= $color_id ?>" onchange="displayAvatarFromInputLink(this.value, 'selectedAvatar<?= $i ?>')" />

                                    <div>
                                        <img class="selectedAvatarClass" id="selectedAvatar<?= $i ?>" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="Choose avatar" style="width: 150px;" />
                                    </div>
                                </div>
                            </div>

                    <?php
                        }
                    }else{
                        echo "<p>Sản phẩm không có màu nào!</p>";
                    }
                    ?>
                </div>

            </div>

            <!-- size -->
            <div class="update_form__size col-12">

            </div>

            <!-- description -->
            <div class="update_form__description col-12">
                <label for="description" class="form-label">Mô tả sản phẩm</label>
                <textarea name="unUpdateDescription" class="form-control" id="description" onchange="onUpdateInfoElement('description')" rows="5" required><?php echo $productInfo['description'] ?></textarea>
            </div>

            <!-- submit -->
            <div class="update_form__submit col-12">
                <div class="d-flex justify-content-center">
                    <button type="submit" class="btn btn-danger px-3 py-2">CẬP NHẬT</button>
                </div>
            </div>

            <!-- cancel -->
            <div class="update_form__cancel col-12">
                <div class="d-flex justify-content-center">
                    <button type="reset" class="btn btn-primary" onclick="resetUpdateInfoElement('formForUpdateProduct')">RESET</button>
                </div>
            </div>
        </form>
    </div>

</div>