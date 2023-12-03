<?php
include __DIR__ . "/inc/head.php";
?>

<!-- main wrapper -->
<div class="main_wrapper d-flex flex-row">
    <!-- side navigate wrapper -->
    <div class="sidenav text-wrap p-0 m-0">
        <nav class="nav nav-pills flex-column text-center p-0 m-0">
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=dashboard">Dashboard</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Danh sách
                sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=add-product">Thêm sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=category">Danh mục sản
                phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=inventory">Nhà kho</a>
        </nav>
    </div>

    <!--list product main content wrapper -->
    <div class="productlist_main container-fluid">

        <div class="productlist_content_header">
            <!-- mot phan cua product main content header gom: tieu de va nut them san pham -->
            <div class="filter_header_one p-2 mx-0 d-flex flex-row flex-wrap justify-content-between align-content-center">
                <div class="ms-5 mt-2 mb-1">
                    DANH SÁCH SẢN PHẨM
                </div>
                <a href="/manage-index-add.html" type="button" class="btn btn-primary me-4 rounded-4">Thêm sản phẩm</a>
            </div>

            <!-- phan con lai cua product main content header gom: tim  kiem va select   -->
            <div id="filter_header_two" class="p-2 mx-0 d-flex flex-row flex-wrap justify-content-between align-content-center">
                <div class="productlist_filter__search ms-4 w-25">
                    <div class="input-group input-group-sm">
                        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" aria-label="product name" aria-describedby="button-addon">
                        <button class="btn btn-secondary" type="button" id="button-addon">FIND</button>
                    </div>
                </div>

                <div class="productlist_filter__sort me-4">
                    <select class="form-select form-select-sm" aria-label="Sort by">
                        <option selected>Xắp xếp theo</option>
                        <option value="1">Bán chạy</option>
                        <option value="2">Tên A -> Z</option>
                        <option value="3"> Tên: Z -> A</option>
                        <option value="4">Giá: tăng dần</option>
                        <option value="5">Giá: giảm dần</option>
                    </select>
                </div>

            </div>
        </div>


        <!-- danh sach san pham -->
        <div class="productlist_list m-0">
            <div class="table-responsive text-center mb-0 border">
                <table class="table
                        table-hover	
                        align-middle
                        table-sm mb-0">
                    <thead class="table-secondary table-sm">
                        <tr>
                            <th style="width: 5%;;">STT</th>
                            <th style="width: 80px;">Hình ảnh</th>
                            <th style="width: 10%;">Mã</th>
                            <th style="width: 25%;">Tên sản phẩm</th>
                            <th style="width: 15%;">Loại</th>
                            <th>Tồn kho</th>
                            <th>Giá</th>
                            <th style="width: 200px;">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="producttable__body">
                        <tr class="table__row" id="table_element_first">
                            <td scope="row">
                                1
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <a href="/manage-index-view-info-product.html" type="button" class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </a>
                                <a href="/manage-index-update-product.html" type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_second">
                            <td scope="row">
                                2
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="ttable__row" id="table_element_third">
                            <td scope="row">
                                3
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_fourth">
                            <td scope="row">
                                4
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_fifth">
                            <td scope="row">
                                5
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_sixth">
                            <td scope="row">
                                6
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_seventh">
                            <td scope="row">
                                7
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_eighth">
                            <td scope="row">
                                8
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_ninth">
                            <td scope="row">
                                9
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>
                        <tr class="table__row" id="table_element_tenth">
                            <td scope="row">
                                10
                            </td>
                            <td>
                                <img class="" src="/assets/img/shoe/shoename3/shoes.png" width="70px" height="70px" alt="avatar">
                            </td>
                            <td>
                                HSM00100
                            </td>
                            <td>
                                Giày Thể Thao Nữ Biti's Hunter
                            </td>
                            <td>
                                Hunter
                            </td>
                            <td>
                                45
                            </td>
                            <td>
                                736,000
                            </td>
                            <td class="productoperator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                <div class="checkproduct btn btn-sm btn-outline-secondary">
                                    XEM
                                </div>
                                <a type="button" class="update_info_product btn btn-sm btn-outline-secondary">
                                    SỬA
                                </a>
                                <div class="deleteproduct btn btn-sm btn-outline-secondary">
                                    XOÁ
                                </div>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

                <nav aria-label="Page navigation" class="m-1 mb-3">
                    <ul class="pagination justify-content-end me-2">
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

        </div>

    </div>

</div>

<?php
include __DIR__ . "/inc/foot.php";
?>