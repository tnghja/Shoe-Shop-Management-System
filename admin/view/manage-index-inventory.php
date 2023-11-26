<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FiveChickens</title>
    <link rel="stylesheet" href="/assets/css/manage-index.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <!-- wrapper all -->
    <div class="wrapper">

        <!-- headerwrapper -->
        <div class="header_wrapper navbar navbar-expand d-flex flex-row justify-content-between">

            <a href="#" class="navbar-brand p-2 m-1 mx-4">
                <img src="./assets/img/fivechickens.jpg" alt="Bootstrap" width="30" height="33.2"> FIVECHICKENS </a>
            </a>

            <div class="dropdown dropstart">
                <button class="btn p-2 px-3 me-4" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person fs-3"></i>
                </button>
                <ul class="dropdown-menu text-center p-1">
                    <p class="fs-5 ">MANAGER</p>
                    <hr>
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
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index.html">Dashboard</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index-product-list.html">Danh sách sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index-add.html">Thêm sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="/manage-index-add-type.html">Danh mục sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Nhà kho</a>
                </nav>
            </div>

            <!--list product main content wrapper -->
            <div class="productlist_main mx-0 px-0 container-fluid">

                <div class="productlist_content_header">
                    <!-- mot phan cua product main content header gom: tieu de va nut them san pham -->

                    <!-- phan con lai cua product main content header gom: tim  kiem va select   -->
                    <div id="filter_header_two"
                        class="p-2 mx-0 d-flex flex-row flex-wrap justify-content-between align-content-center">
                        <div class="productlist_filter__sort me-4">
                            <select class="form-select form-select-sm" aria-label="Sort by">
                                <option selected>Xắp xếp theo</option>
                                <option value="1">Tồn kho: nhiều -> ít</option>
                                <option value="2">Tồn kho: ít -> nhiều</option>
                                <option value="3"> Tên: A -> Z</option>
                                <option value="4">Tên: Z -> A</option>
                            </select>
                        </div>

                        <div class="productlist_filter__search ms-4 w-25">
                            <div class="input-group input-group-sm">
                                <input type="text" class="form-control" placeholder="Nhập tên hoặc mã sản phẩm"
                                    aria-label="product name" aria-describedby="button-addon">
                                <button class="btn btn-secondary" type="button" id="button-addon">FIND</button>
                            </div>
                        </div>

                        <a href="/manage-index-add.html" type="button"
                            class="btn btn-primary me-4 rounded-4">Thêm sản phẩm</a>
                    </div>
                </div>


                <!-- danh sach san pham -->
                <div class="productlist mx-2">
                    <div class="table-responsive text-center mb-0">
                        <table class="producttable table
                        table-hover	
                        align-middle
                        table-sm mb-0">
                            <thead class="table-secondary table-sm">
                                <tr>
                                    <th style="width: 80px;">Hình ảnh</th>
                                    <th>Mã</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Màu</th>
                                    <th>Tồn kho</th>
                                    <th>Giá</th>
                                    <th style="width: 200px;">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody class="producttable__body">
                                <tr class="table__row" id="table_element_first">
                                    <td scope="row">
                                        <img class=""
                                            src="/assets/img/shoe/shoename3/shoes.png"
                                            width="70px" height="70px" alt="avatar">
                                    </td>
                                    <td>
                                        HSM00100
                                    </td>
                                    <td>
                                        Giày Thể Thao Nữ Biti's Hunter
                                    </td>
                                    <td>
                                        Nâu
                                    </td>
                                    <td>
                                        199200
                                    </td>
                                    <td>
                                        736,000
                                    </td>
                                    <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button"
                                        aria-label="check stock of the product">
                                        <div class="checkproduct btn btn-sm btn-outline-secondary">
                                            KIỂM TRA
                                        </div>


                                    </td>
                                </tr>
                                <tr class="table__row" id="table_element_second">
                                    <td scope="row">
                                        <img class=""
                                            src="/assets/img/shoe/shoename3/shoes.png"
                                            width="70px" height="70px" alt="avatar">
                                    </td>
                                    <td>
                                        HSM00100
                                    </td>
                                    <td>
                                        Giày Thể Thao Nữ Biti's Hunter
                                    </td>
                                    <td>
                                        Trắng
                                    </td>
                                    <td>
                                        199200
                                    </td>
                                    <td>
                                        736,000
                                    </td>
                                    <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button"
                                        aria-label="check stock of the product">
                                        <div class="checkproduct btn btn-sm btn-outline-secondary">
                                            KIỂM TRA
                                        </div>


                                    </td>
                                </tr>
                                <tr class="ttable__row" id="table_element_third">
                                    <td scope="row">
                                        <img class=""
                                            src="/assets/img/shoe/shoename3/shoes.png"
                                            width="70px" height="70px" alt="avatar">
                                    </td>
                                    <td>
                                        HSM00100
                                    </td>
                                    <td>
                                        Giày Thể Thao Nữ Biti's Hunter
                                    </td>
                                    <td>
                                        Trắng
                                    </td>
                                    <td>
                                        199200
                                    </td>
                                    <td>
                                        736,000
                                    </td>
                                    <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button"
                                        aria-label="check stock of the product">
                                        <div class="checkproduct btn btn-sm btn-outline-secondary">
                                            KIỂM TRA
                                        </div>


                                    </td>
                                </tr>
                                <tr class="table__row" id="table_element_fourth">
                                    <td scope="row">
                                        <img class=""
                                            src="/assets/img/shoe/shoename3/shoes.png"
                                            width="70px" height="70px" alt="avatar">
                                    </td>
                                    <td>
                                        HSM00100
                                    </td>
                                    <td>
                                        Giày Thể Thao Nữ Biti's Hunter
                                    </td>
                                    <td>
                                        Trắng
                                    </td>
                                    <td>
                                        199200
                                    </td>
                                    <td>
                                        736,000
                                    </td>
                                    <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button"
                                        aria-label="check stock of the product">
                                        <div class="checkproduct btn btn-sm btn-outline-secondary">
                                            KIỂM TRA
                                        </div>


                                    </td>
                                </tr>
                                <tr class="table__row" id="table_element_fifth">
                                    <td scope="row">
                                        <img class=""
                                            src="/assets/img/shoe/shoename3/shoes.png"
                                            width="70px" height="70px" alt="avatar">
                                    </td>
                                    <td>
                                        HSM00100
                                    </td>
                                    <td>
                                        Giày Thể Thao Nữ Biti's Hunter
                                    </td>
                                    <td>
                                        Trắng
                                    </td>
                                    <td>
                                        199200
                                    </td>
                                    <td>
                                        736,000
                                    </td>
                                    <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button"
                                        aria-label="check stock of the product">
                                        <div class="checkproduct btn btn-sm btn-outline-secondary">
                                            KIỂM TRA
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                            <tfoot>

                            </tfoot>
                        </table>
                        <!-- navigation -->
                        <nav aria-label="Page navigation" class="m-1 mb-3">
                            <ul class="pagination pagination-sm justify-content-end me-2">
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <span aria-hidden="true">&laquo;</span>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                    <!-- sise and stock -->
                    <div class="view_stock">
                        <div class="containner container-fluid">
                            <div class="d-flex flex-lg-row flex-column m-0 justify-content-around">
                                <div
                                    class="view_stock__productInfor mx-1 mb-lg-0 mb-1 d-md-flex flex-row border border-2 border-black rounded-2 bg-info-subtle">
                                    <div class="mx-3 text-black">
                                        Mã sản phẩm: HSM00100
                                    </div>
                                    <div class="mx-3 text-black">
                                        Tên sản phẩm: Giày Thể Thao Nữ Biti's Hunter
                                    </div>
                                    <div class="mx-3 text-black">
                                        Tổng tồn kho: 199200
                                    </div>
                                </div>
                                <div class="mx-1 mb-lg-0 mb-1" class="btn-group btn-group-sm p-0 m-0" role="button"
                                    aria-label="update stock of the product">
                                    <div class="checkproduct btn btn-sm btn-danger">
                                        CẬP NHẬT
                                    </div>
                                </div>
                                <div class="mx-1 mb-lg-0 mb-1" class="btn-group btn-group-sm p-0 m-0" role="button"
                                    aria-label="save">
                                    <div class="checkproduct btn btn-sm btn-danger">
                                        LƯU THAY ĐỔI
                                    </div>
                                </div>
                            </div>
                            <form class="inventoryform" action="" method="get">
                                <div
                                    class="size_stock border border-1 rounded-2 border-light bg-body-tertiary px-1 py-2 my-1">
                                    <div class="size_stock d-flex flex-row flex-wrap">
                                        <!-- size 24 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize24"
                                                    id="checksize24" checked disabled>
                                                <label class="form-check-label" for="checksize24" aria-readonly="true">
                                                    size24
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize24"
                                                id="numofsize24" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 25 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize25"
                                                    id="checksize25" checked disabled>
                                                <label class="form-check-label" for="checksize25" aria-readonly="true">
                                                    size25
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize25"
                                                id="numofsize25" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 26 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize26"
                                                    id="checksize26" checked disabled>
                                                <label class="form-check-label" for="checksize26" aria-readonly="true">
                                                    size26
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize26"
                                                id="numofsize26" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 27 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize27"
                                                    id="checksize27" checked disabled>
                                                <label class="form-check-label" for="checksize27" aria-readonly="true">
                                                    size27
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize27"
                                                id="numofsize27" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 28 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize28"
                                                    id="checksize28" checked disabled>
                                                <label class="form-check-label" for="checksize28" aria-readonly="true">
                                                    size28
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize28"
                                                id="numofsize28" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 29 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize29"
                                                    id="checksize29" checked disabled>
                                                <label class="form-check-label" for="checksize29" aria-readonly="true">
                                                    size29
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize29"
                                                id="numofsize29" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 30 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize30"
                                                    id="checksize30" checked disabled>
                                                <label class="form-check-label" for="checksize30" aria-readonly="true">
                                                    size30
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize30"
                                                id="numofsize30" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 31 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize31"
                                                    id="checksize31" checked disabled>
                                                <label class="form-check-label" for="checksize31" aria-readonly="true">
                                                    size31
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize31"
                                                id="numofsize31" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 32 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize32"
                                                    id="checksize32" checked disabled>
                                                <label class="form-check-label" for="checksize32" aria-readonly="true">
                                                    size32
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize32"
                                                id="numofsize32" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 33 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize33"
                                                    id="checksize33" checked disabled>
                                                <label class="form-check-label" for="checksize33" aria-readonly="true">
                                                    size33
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize33"
                                                id="numofsize33" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 34 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize34"
                                                    id="checksize34" checked disabled>
                                                <label class="form-check-label" for="checksize34" aria-readonly="true">
                                                    size34
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize34"
                                                id="numofsize34" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 35 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize35"
                                                    id="checksize35" checked disabled>
                                                <label class="form-check-label" for="checksize35" aria-readonly="true">
                                                    size35
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize35"
                                                id="numofsize35" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 36 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize36"
                                                    id="checksize36" checked disabled>
                                                <label class="form-check-label" for="checksize36" aria-readonly="true">
                                                    size36
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize36"
                                                id="numofsize36" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 37 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize37"
                                                    id="checksize37" checked disabled>
                                                <label class="form-check-label" for="checksize37" aria-readonly="true">
                                                    size37
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize37"
                                                id="numofsize37" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 38 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize38"
                                                    id="checksize38" checked disabled>
                                                <label class="form-check-label" for="checksize38" aria-readonly="true">
                                                    size38
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize38"
                                                id="numofsize38" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 39 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize39"
                                                    id="checksize39" checked disabled>
                                                <label class="form-check-label" for="checksize39" aria-readonly="true">
                                                    size39
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize39"
                                                id="numofsize39" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 40 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize40"
                                                    id="checksize40" checked disabled>
                                                <label class="form-check-label" for="checksize40" aria-readonly="true">
                                                    size40
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize40"
                                                id="numofsize40" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 41 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize41"
                                                    id="checksize41" checked disabled>
                                                <label class="form-check-label" for="checksize41" aria-readonly="true">
                                                    size41
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize41"
                                                id="numofsize41" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 42 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize42"
                                                    id="checksize42" checked disabled>
                                                <label class="form-check-label" for="checksize42" aria-readonly="true">
                                                    size42
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize42"
                                                id="numofsize42" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 43 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize43"
                                                    id="checksize43" checked disabled>
                                                <label class="form-check-label" for="checksize43" aria-readonly="true">
                                                    size43
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize43"
                                                id="numofsize43" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 44 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize44"
                                                    id="checksize44" checked disabled>
                                                <label class="form-check-label" for="checksize44" aria-readonly="true">
                                                    size44
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize44"
                                                id="numofsize44" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                        <!-- size 45 -->
                                        <div
                                            class="form-check-inline d-flex flex-column align-content-between m-3 p-1 border rounded-2">
                                            <div>
                                                <input class="form-check-input" type="checkbox" value="checksize45"
                                                    id="checksize45" checked disabled>
                                                <label class="form-check-label" for="checksize45" aria-readonly="true">
                                                    size45
                                                </label>
                                            </div>
                                            <input type="number" class="form-control text-end pe-0" name="numofsize45"
                                                id="numofsize45" maxlength="5" max="10000" min="0" value="900" readonly>
                                        </div>

                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>



        <!-- javascipt -->
        <script src="./assets/js/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
            crossorigin="anonymous"></script>
</body>

</html>