<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FiveChickens</title>
        <link rel="stylesheet" href="../view/assets/css/style.css">
        <link rel="stylesheet" href="../view/assets/css/base.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <div class="header border border-1">
            <nav class="navbar navbar-expand-lg mx-3">
                <div class="container-fluid p-0">
                    <a class="me-5 p-0 navbar-brand" href="#">
                        <img src="../view/assets/img/fivechickens.jpg" alt="Bootstrap" width="30" height="33.2"> FIVECHICKENS </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav w-50 ms-5 mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="p-0 me-5 nav-link active" aria-current="page" href="./index.html">TRANG CHỦ</a>
                            </li>
                            <li class="header__dropdown-menu-item nav-item dropdown">
                                <a class="p-0 me-5 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"> NAM </a>
                                <ul class="dropdown-menu border-0 pb-0">
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                </ul>
                            </li>
                            <li class="header__dropdown-menu-item nav-item dropdown">
                                <a class="p-0 me-5 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"> NỮ </a>
                                <ul class="dropdown-menu border-0 pb-0">
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                </ul>
                            </li>
                            <li class="header__dropdown-menu-item nav-item dropdown">
                                <a class="p-0 me-5 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"> BÉ TRAI </a>
                                <ul class="dropdown-menu border-0 pb-0">
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                </ul>
                            </li>
                            <li class="header__dropdown-menu-item nav-item dropdown">
                                <a class="p-0 me-5 nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"> BÉ GÁI </a>
                                <ul class="dropdown-menu border-0 pb-0">
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                    <li class="border"><a class="dropdown-item" href="./item_list.html">Danh mục</a></li>
                                </ul>
                            </li>
                        </ul>
                        <form class="d-flex mx-5 w-25" role="search">
                            <input class="p-0 form-control me-2" type="search" placeholder="Bạn cần tìm gì ..."
                                aria-label="Search">
                            <button class="p-0 btn w-50 btn-outline-success" type="submit">Tìm kiếm</button>
                        </form>
                        <ul class="ms-5 navbar-nav d-flex flex-row me-1">
                            <li class="nav-item me-lg-0 dropdown">
                                <a class="nav-link p-0 ms-3" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="bi bi-person fs-3"></i></a>
                                <div class="header__user-dropdown dropdown-menu dropdown-menu-end">
                                                <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                                                <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                                <p class="ms-2 mb-1">Tên User</p>
                                                <ul class="header__user-list">
                                                    <li><a href="./account.html">Thông tin tài khoản</a></li>
                                                    <li><a href="./account-manage.html">Quản lý đơn hàng</a></li>
                                                    <li><a href="./account-maps.html">Danh sách địa chỉ</a></li>
                                                    <li><a href="">Đăng xuất</a>
                                                    </li>
                                                </ul>
                                            </div>
                                <!-- <div class="header__login-dropdown dropdown-menu dropdown-menu-end">
                                    <p class="text-center mb-0">THÔNG TIN TÀI KHOẢN</p>
                                    <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                    <div class="d-grid gap-2 col-10 mx-auto">
                                        <button onclick="location.href='./login.html'" class="btn btn-primary"
                                            type="button">Đăng nhập</button>
                                        <button onclick="location.href='./signup.html'" class="btn btn-success"
                                            type="button">Đăng ký</button>
                                    </div>
                                </div> -->
                            </li>
                            <li class="nav-item me-lg-0 dropdown">
                                <a class="nav-link p-0 ms-3" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="bi bi-cart3 fs-3"></i></a>
                                <div class="header__cart-dropdown dropdown-menu dropdown-menu-end">
                                    <p class="text-center mb-0">GIỎ HÀNG</p>
                                    <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                    <div>
                                        <a class="row g-0 border link-underline link-underline-opacity-0 text-black header__cart-item"
                                            href="./detail-item.html">
                                            <div class="col-md-4">
                                                <img src="./assets/img/shoe/shoename/shoeimg.png"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8 card-body">
                                                <div class="row mx-0 mb-3">
                                                    <p class="card-text col-md-12 header__cart-title">Tên sản phẩm</p>
                                                </div>
                                                <div class="row mb-3 mx-0">
                                                    <div class="col-md-8">
                                                        <p class="card-text"><small class="text-body-secondary">Màu/Size</small>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-2 header__cart-quantity"> 1 </div>
                                                </div>
                                                <div class="row justify-content-end mx-0">
                                                    <p class="card-text col-md-6">500.000đ</p>
                                                </div>
                                            </div>
                                        </a>
                                        <a class="row g-0 border link-underline link-underline-opacity-0 text-black header__cart-item"
                                            href="./detail-item.html">
                                            <div class="col-md-4">
                                                <img src="./assets/img/shoe/shoename/shoeimg.png"
                                                    class="img-fluid rounded-start" alt="...">
                                            </div>
                                            <div class="col-md-8 card-body">
                                                <div class="row mx-0 mb-3">
                                                    <p class="card-text col-md-12 header__cart-title">Tên sản phẩm</p>
                                                </div>
                                                <div class="row mb-3 mx-0">
                                                    <div class="col-md-8">
                                                        <p class="card-text"><small class="text-body-secondary">Màu/Size</small>
                                                        </p>
                                                    </div>
                                                    <div class="col-md-2 header__cart-quantity"> 1 </div>
                                                </div>
                                                <div class="row justify-content-end mx-0">
                                                    <p class="card-text col-md-6">500.000đ</p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="row justify-content-end mx-0 my-2">
                                        <p class="card-text text-danger col-md-4">1.000.000đ</p>
                                    </div>
                                    <div class="d-grid col-10 mx-auto">
                                        <button onclick="location.href='./cart.html'" class="btn btn-dark"
                                            type="button">Xem giỏ hàng</button>
                                    </div>
                                </div>
                            </li>
                            <li class="nav-item me-lg-0 dropdown">
                                <a class="nav-link p-0 ms-3" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false"><i class="bi bi-bell fs-3"></i></a>
                                <div class="header__notification-dropdown dropdown-menu dropdown-menu-end">
                                    <p class="text-center mb-0">THÔNG BÁO</p>
                                    <hr class="hr hr-blurry w-75 my-2 mx-auto" />
                                    <div class="mb-2">
                                        <div class="g-0 border">
                                            <p class="fw-bold mx-2">Tiêu đề</p>
                                            <p class="mx-2">Mô tả</p>
                                        </div>
                                        <div class="g-0 border">
                                            <p class="fw-bold mx-2">Tiêu đề</p>
                                            <p class="mx-2">Mô tả</p>
                                        </div>
                                    </div>
                                    <div class="d-grid col-10 mx-auto">
                                        <button onclick="url.href='./account-notifi.html'" class="btn btn-dark" type="button">Xem tất cả</button>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
