<!-- main wrapper -->
<div class="main_wrapper d-flex flex-row">
    <!-- side navigate wrapper -->
    <div class="sidenav text-wrap p-0 m-0">
        <nav class="nav nav-pills flex-column text-center p-0 m-0">
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=dashboard">Dashboard</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=product-list">Danh sách
                sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Thêm sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=category">Danh mục sản
                phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=inventory">Nhà kho</a>
        </nav>
    </div>

    <!-- main content wrapper -->
    <div class="maincontent container-fluid">
        <!-- to do -->
        <div class="mb-2">
            THÊM SẢN PHẨM
        </div>
        <!-- Form -->
        <form class="row g-3" name="addproductform" method="post" action="../app/index.php?page=add-product&action=submit">
            <!-- action="../app/index.php?page=add-product&action=submit" -->
            <!-- ten san pham, ma san pham, loai san pham, ngay ra mat, 
                        doi tuong, size, mau sac mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->

            <!-- name -->
            <div class="form__name col-12">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" name="productname" class="form-control" id="name" required>
            </div>

            <!-- code -->
            <div class="form__code col-lg-4">
                <label for="code" class="form-label">Mã sản phẩm</label>
                <input type="text" name="productcode" class="form-control" id="code" required>
            </div>

            <!-- doi tuong/customer -->
            <div class="formm__cus col-md-6 col-lg-4">

                <label for="customertype" class="form-label">Đối tượng</label>
                <select id="customertype" name="customertype" class="form-select" required onchange="ajaxCategorySelection(this.value)">
                    <option selected value="unselected">Chọn đối tượng</option>
                    <?php
                    $objList = $categoryObj->get_customer_object_list();
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
                    $colorList = $colorObj->get_color_type_list();
                    foreach ($colorList as $color) {
                    ?>
                        <option value="<?php echo $color['id'] ?>"><?php echo $color['color_name'] ?></option>
                    <?php
                    }
                    ?>
                </select>
            </div>
            <!-- php -->

            <!-- code -->
            <div class="form__code col-md-6 col-lg-4">
                <label for="price" class="form-label">Giá sản phẩm</label>
                <input type="number" max="100000000000" name="productprice" class="form-control" id="price" required>
            </div>

            <!-- avatar -->
            <div class="form__avatar col-12">
                <div class="mb-4 d-flex flex-column align-items-start">
                    <label class="form-label m-0 mb-2" for="avatar" style="width: 150px;">Chọn hình ảnh (nhập link)</label>
                    <input type="text" name="productimage" class="form-control mb-1" style="width: 300px;" id="avatar" onchange="displayAvatarFromInputLink(this.value, 'selectedAvatar')" required />
                    <div>
                        <img id="selectedAvatar" src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" alt="Choose avatar" style="width: 150px;" />
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
                            $minSize = 24;
                            $maxSize = 45;
                            $i = 0;
                            ?>
                            <?php
                            for ($i = $minSize; $i <= $maxSize; $i++) {
                            ?>
                                <div class="form-check-inline m-3">
                                    <input class="form-check-input" type="checkbox" name="<?= 'size' . $i ?>" value="TRUE" id="<?= 'size' . $i ?>">
                                    <label class="form-check-label" for="<?= 'size' . $i ?>">
                                        Size <?= $i ?>
                                    </label>
                                </div>
                            <?php
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
                    <button type="submit" name="addSubmitBTN" value="TRUE" class="btn btn-primary px-3 py-2">THÊM</button>
                </div>
            </div>

            <!-- cancel -->
            <div class="form__cancel col-12">
                <div class="d-flex justify-content-center">
                    <button type="reset" class="btn btn-danger">HUỶ</button>
                </div>
            </div>
        </form>
    </div>

</div>