<?php
include_once "../view/head.php";
?>

<body>
    <!-- wrapper all -->
    <div class="wrapper">

        <!-- headerwrapper -->
        <div class="header_wrapper navbar navbar-expand d-flex flex-row justify-content-between">

            <a href="index.php?" class="navbar-brand p-2 m-1 mx-4">
                <img src="./view/assets/img/fivechickens.jpg" alt="Bootstrap" width="30" height="33.2"> FIVECHICKENS </a>
            </a>

            <div class="dropdown dropstart">
                <button class="btn p-2 px-3 me-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person fs-3"></i>
                </button>
                <ul class="dropdown-menu text-center p-1">
                    <p class="fs-5 ">MANAGER</p>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item " href="#">Thông tin</a></li>
                    <li><a class="dropdown-item my-2" href="#">Đăng xuất</a></li>
                </ul>
            </div>
        </div>

        <!-- main wrapper -->
        <div class="main_wrapper d-flex flex-row">
            <!-- side navigate wrapper -->
            <div class="sidenav text-wrap p-0 m-0">
                <nav class="nav nav-pills flex-column text-center p-0 m-0">
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Dashboard</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?list-product">Danh sách sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?add-product">Thêm sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?add-category">Danh mục sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?inventory">Nhà kho</a>
                </nav>
            </div>

            <div class="maincontent container container-fluid">
                <div class="add_catalog p-1 row g-1">
                    <div class="col-12">
                        <h3 >Danh mục sản phẩm</h3>
                    </div>
                    <form class="form_add_catalog col-12 row g-2 border p-2" action="" method=POST>
                        <!-- doi tuong/customer -->
                        <div class="row">
                            <div class="col">
                                <h4>Sản phẩm đã chọn</h4>
                                <div class="col">
                                    Đối tượng :<?php   echo $result['object']  ?>
                                </div>
                                <div class="col">
                                    Đối tượng :<?php echo $result['category_name']  ?>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <div class="form_add_catalog__cus col-md-5">
                                        <label for="customertype" class="form-label">Đối tượng</label>
                                        <select id="customertype" class="form-select" name="category_obj">
                                            <option selected>Nam</option>
                                            <option>Nữ</option>
                                            <option>Bé trai</option>
                                            <option>Bé gái</option>
                                        </select>
                                    </div>
                                </div>

                                <!-- type -->
                                <div class="form-group">
                                    <div class="form_add_catalog__type col-md-6">
                                        <label for="producttype" class="form-label">Tên loại sản phẩm</label>
                                        <input type="text" class="form-control" id="producttype" name="category_name" required>
                                    </div>
                                </div>
                                <!-- submit -->
                                <div class="form-group">
                                    <div class="form__submit col-md-1 align-self-end">
                                        <button type="submit" name="add_category" class="btn btn-primary sm">THÊM</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>

    </div>



    <!-- javascipt -->
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/manage-product.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>