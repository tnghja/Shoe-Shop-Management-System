<!-- main wrapper -->
<div class="main_wrapper d-flex flex-row">
    <!-- side navigate wrapper -->
    <div class="sidenav text-wrap p-0 m-0">
        <nav class="nav nav-pills flex-column text-center p-0 m-0">
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=dashboard">Dashboard</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=category">Danh mục sản
                phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=product-list">Danh sách
                sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Thêm sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=inventory">Nhà kho</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
        </nav>
    </div>

    <!-- main content wrapper -->
    <div class="maincontent container-fluid">
        <?php
        $objList = $categoryObj->get_object_list();
        $colorList = $colorObj->get_color_type_list();
        $sizeList = $sizeObj->get_size_list_in_db();
        ?>
        <!-- to do -->
        <div class="mb-2">
            <h6>THÊM SẢN PHẨM</h6>
            <?php
            if (empty($objList)) {
                echo "<h6>Không có danh mục sản phẩm! Hãy thêm danh mục sản phẩm trước.</h6>";
            }
            if (empty($colorList)) {
                echo "<h6>Trong database không có màu nào! Hãy thêm màu vào database trước.</h6>";
            }
            if (empty($sizeList)) {
                echo "<h6>Trong database không có size nào! Hãy thêm size vào database trước.</h6>";
            }
            ?>
        </div>
        <!-- Form -->
        <form class="row g-3" name="addproductform" method="post" action="../app/index.php?page=add-product&action=submit" <?php
                                                                                                                            if (empty($objList) || empty($colorList) || empty($sizeList)) {
                                                                                                                                echo "hidden";
                                                                                                                            }
                                                                                                                            ?>>
            <!-- action="../app/index.php?page=add-product&action=submit" -->
            <!-- ten san pham, ma san pham, loai san pham, ngay ra mat, 
                        doi tuong, size, mau sac mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->

            <!-- name -->
            <div class="form__name col-12">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" name="productname" class="form-control" id="name" required>
            </div>

            <!-- doi tuong/customer -->
            <div class="formm__cus col-md-6 col-lg-4">

                <label for="customertype" class="form-label">Đối tượng</label>
                <select id="customertype" name="customertype" class="form-select" required onchange="ajaxCategorySelection(this.value)">
                    <option selected value="unselected">Chọn đối tượng</option>
                    <?php
                    foreach ($objList as $obj) {
                    ?>
                        <option value="<?php echo $obj['object'] ?>"><?php echo $obj['object'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>

            <!-- type -->
            <!-- php -->
            <div class="form__type col-md-6 col-lg-4">
                <label for="producttype" class="form-label">Loại sản phẩm</label>
                <select id="producttype" name="categoryid" class="form-select">
                    <option selected>...</option>
                </select>
            </div>
            <!-- php -->


            <!-- doi tuong, size, mau sac, mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->


            <!-- color -->
            <!-- php -->
            <div class="form__color col-md-6 col-lg-4">
                <label for="productcolor" class="form-label">Màu sản phẩm</label>
                <select id="productcolor" name="colorid" class="form-select">
                    <?php
                    if (!empty($colorList)) {
                        foreach ($colorList as $color) {
                    ?>
                            <option value="<?php echo $color['id'] ?>"><?php echo $color['color_name'] ?></option>
                    <?php
                        }
                    }
                    ?>
                </select>
            </div>
            <!-- php -->

            <!-- gia -->
            <div class="form__code col-md-6 col-lg-4">
                <label for="price" class="form-label">Giá sản phẩm</label>
                <input type="number" max="1000000000" name="productprice" class="form-control" id="price" required>
            </div>

            <!-- avatar -->
            <div class="form__avatar col-12">
                <div class="mb-4 d-flex flex-column align-items-start">
                    <label class="form-label m-0 mb-2" for="avatar" style="width: 150px;">Chọn hình ảnh (nhập link)</label>
                    <input type="text" name="productimage" class="form-control mb-1" style="width: 300px;" id="avatar" onchange="displayAvatarFromInputLink(this.value, 'selectedAvatar')" required />
                    <div>
                        <img class="selectedAvatarClass" id="selectedAvatar" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="Choose avatar" style="width: 150px;" />
                    </div>
                </div>
            </div>

            <!-- size and stock -->
            <div class="form__size col-12">
                <button class="btn btn-outline-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#size" aria-expanded="false" aria-controls="collapse-size">
                    Các kích thước của sản phẩm
                </button>
                <div class="collapse" id="size">
                    <div class="border border-1 rounded-2 px-1 py-2">
                        <div class="d-flex flex-row flex-wrap">
                            <?php
                            if (!empty($sizeList)) {
                                // $minSize = $sizeObj->get_min_size();
                                // $maxSize = $sizeObj->get_max_size();
                                foreach ($sizeList as $size) {
                            ?>
                                    <div class="form-check-inline m-3">
                                        <input class="form-check-input" type="checkbox" name="<?= 'size' . $size['size_name'] ?>" value="TRUE" id="<?= 'size' . $size['size_name'] ?>">
                                        <label class="form-check-label" for="<?= 'size' . $size['size_name'] ?>">
                                            Size <?= $size['size_name'] ?>
                                        </label>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- description -->
            <div class="col-12">
                <label for="description" class="form-label">Mô tả sản phẩm</label>
                <textarea name="productdesc" class="form-control" id="description" rows="5" required></textarea>
            </div>

            <!-- submit -->
            <div class="form__submit col-12">
                <div class="d-flex justify-content-center">
                    <button type="submit" name="addSubmitBTN" value="TRUE" class="btn btn-primary px-3 py-2" <?php
                                                                                                                if (empty($objList) || empty($colorList) || empty($sizeList)) {
                                                                                                                    echo "disabled";
                                                                                                                }
                                                                                                                ?>>THÊM</button>
                </div>
            </div>

            <!-- cancel -->
            <div class="form__cancel col-12">
                <div class="d-flex justify-content-center">
                    <button type="reset" class="btn btn-danger" onclick="resetDisplayAvatar('selectedAvatarClass')">HUỶ</button>
                </div>
            </div>
        </form>
    </div>

</div>