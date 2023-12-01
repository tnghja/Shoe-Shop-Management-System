<?php
include __DIR__ . "/inc/head.php";
?>

<!-- main wrapper -->
<div class="main_wrapper d-flex flex-row">
    <!-- side navigate wrapper -->
    <div class="sidenav text-wrap p-0 m-0">
        <nav class="nav nav-pills flex-column text-center p-0 m-0">
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index.html">Dashboard</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Danh sách sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index-add.html">Thêm sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index-add-type.html">Danh mục sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index-inventory.html">Nhà kho</a>
        </nav>
    </div>

    <!-- main content wrapper -->
    <div class="maincontent container container-fluid">
        <!-- to do -->
        <div class="mb-2 fs-5 w-100">
            THÔNG TIN SẢN PHẨM
        </div>
        <div class="view row g-3">
            <!-- ten san pham, ma san pham, loai san pham, ngay ra mat, 
                        doi tuong, size, mau sac mo ta, gia san pham, so luong trong kho, 
                        hinh dai dien, anh mo ta, huy bo, xac nhan -->

            <div class="view__name col-12">
                <div>
                    Tên sản phẩm
                </div>
                <div class="vaule border rounded-2 p-2">
                    Giày Thể Thao Nam Biti's Hunter Street
                </div>
            </div>

            <div class="view__code col-lg-4">
                <div>
                    Mã sản phẩm
                </div>
                <div class="vaule border rounded-2 p-2">
                    HSM004700
                </div>
            </div>

            <div class="view__cus col-md-6 col-lg-4">
                <div>
                    Đối tượng
                </div>
                <div class="vaule border rounded-2 p-2">
                    Nam
                </div>
            </div>

            <div class="view__type col-md-6 col-lg-4">
                <div>
                    Loại sản phẩm
                </div>
                <div class="value border rounded-2 p-2">
                    Giày Thể Thao
                </div>
            </div>

            <div class="view__color col-lg-4">
                <div>
                    Màu sản phẩm
                </div>
                <div class="vaule border rounded-2 p-2">
                    Nâu
                </div>
            </div>

            <div class="view_image col-12">
                <div>
                    Hình ảnh sản phẩm
                </div>
                <div class="imagevalue">
                    <img class="img-thumbnail" src="/assets/img/shoe/shoename4/avatar.png" alt="avatar" width="150">
                </div>
            </div>

            <div class="view__size col-12">
                <div class="d-inline-block">
                    Các kích thước của sản phẩm:
                </div>
                <div class="numofsize d-inline-block">
                    <b>6 kích thước</b>
                </div>
                <div class="sizevalues d-flex flex-row flex-wrap justify-content-start border rounded-2">
                    <p class="m-2" id="size25">
                        Size 25
                    </p>
                    <p class="m-2" id="size26">
                        Size 26
                    </p>
                    <p class="m-2" id="size27">
                        Size 27
                    </p>
                    <p class="m-2" id="size28">
                        Size 28
                    </p>
                    <p class="m-2" id="size29">
                        Size 29
                    </p>
                    <p class="m-2" id="size30">
                        Size 30
                    </p>
                    <p class="m-2" id="size31">
                        Size 32
                    </p>
                </div>
            </div>

            <div class="view__desription">
                <div>
                    Mô tả sản phẩm
                </div>
                <div class="value border rounded-2" style="min-height: 10em;">
                    Sản phẩm chưa có mô tả
                </div>
            </div>
        </div>
        <div class="backbutton w-100 my-3">
            <div class="d-flex justify-content-center">
                <button type="button" onclick="history.back()" class="btn btn-secondary py-1 px-2">TRỞ
                    VỀ</button>
            </div>
        </div>
    </div>
</div>

<?php
include __DIR__ . "/inc/foot.php";
?>