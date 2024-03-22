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
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 " href="../app/index.php?page=manage">Quản lý đơn hàng</a>
        </nav>
    </div>

    <!-- list product main content wrapper -->
    <div class="productlist_main  container-fluid bg-light">

        <div class="productlist_content_header">
            <!-- mot phan cua product main content header gom: tieu de va nut them san pham -->
            <div class="filter_header_one p-2 mx-0 d-flex flex-row flex-wrap justify-content-between align-content-center">
                <div class="mx-4 mt-2 mb-1">
                    <h6 class="m-0">DANH SÁCH SẢN PHẨM</h6>
                </div>
                <a href="index.php?page=add-product" type="button" class="btn btn-sm btn-primary mx-4 rounded-4">Thêm sản phẩm</a>
            </div>

            <!-- phan con lai cua product main content header gom: tim  kiem va select   -->
            <div id="filter_header_two" class="p-2 mx-0 d-flex flex-row flex-wrap justify-content-between align-content-center">
                <div class="productlist_filter__search mx-4">
                    <form action="?page=product-list" method="get">
                        <div class="input-group input-group-sm">
                            <input type="hidden" name="page" value="product-list">
                            <input type="search" id="inputForSearchProduct" name="SearchProduct" class="form-control" placeholder="Nhập tên sản phẩm" aria-label="search product name">
                            <button type="submit" class="btn btn-secondary">FIND</button>
                        </div>
                    </form>
                </div>

                <div class="productlist_filter__sort mx-4">
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
        <div class="productlist">
            <div class="table-responsive text-center mb-1">
                <table class="producttable table
                        table-hover	
                        align-middle
                        table-sm mb-1">
                    <thead class="table-secondary table-sm">
                        <tr>
                            <th class="text-center" style="width: 50px;">Mã</th>
                            <th>Tên sản phẩm</th>
                            <th class="text-center">Đối tượng</th>
                            <th class="text-center">Loại</th>
                            <th style="width: 150px;" class="text-center">Giá</th>
                            <th style="width: 150px;" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="producttable__body">
                        <?php foreach ($productList as $product) {

                            // $productHasColor = true;

                            // if (empty($inventoryObj->get_colors_of_product($product['id']))) {
                            //     $productHasColor = false;
                            // }
                            // // echo var_dump($productHasColor);

                            $category = $categoryObj->get_category_by_id($product['category_id']);
                        ?>
                            <tr class="table__row">
                                <td class="text-center">
                                    <?php echo $product['id'] ?>
                                </td>

                                <td>
                                    <?php echo $product['product_name'] ?>
                                </td>

                                <td class="text-center">
                                    <?php echo $category['object'] ?>
                                </td>

                                <td class="text-center">
                                    <?php echo $category['category_name'] ?>
                                </td>

                                <td style="width: 150px;" class="text-center">
                                    <?php echo $product['price'] ?>
                                </td>

                                <td style="width: 150px;" class="text-center">
                                    <a href="index.php?page=product-list&view=<?php echo $product['id'] ?>" type="button" class="checkproduct btn btn-sm btn-primary ms-0 m-1">
                                        XEM
                                    </a>
                                    <a href="index.php?page=product-list&edit=<?php echo $product['id'] ?>" type="button" class="update_info_product btn btn-sm btn-warning me-0 m-1">
                                        SỬA
                                    </a>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                </table>
                <hr>
                <?php if (empty($productList)) {
                    echo "<div><h6>Không có sản phẩm nào được tìm thấy</h6></div>";
                } ?>
                <div hidden class="mt-1">
                    <div>Pagination</div>
                </div>
            </div>
        </div>
    </div>
</div>