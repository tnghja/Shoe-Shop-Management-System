<!-- main wrapper -->
<div class="main_wrapper d-flex flex-row">
    <!-- side navigate wrapper -->
    <div class="sidenav text-wrap p-0 m-0">
        <nav class="nav nav-pills flex-column text-center p-0 m-0">
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=dashboard">Dashboard</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=product-list">Danh sách
                sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=add-product">Thêm sản phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=category">Danh mục sản
                phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Nhà kho</a>
        </nav>
    </div>

    <!--list product main content wrapper -->
    <div class="productlist_main mx-0 px-0 container-fluid">

        <div class="productlist_content_header">
            <!-- mot phan cua product main content header gom: tieu de va nut them san pham -->

            <!-- phan con lai cua product main content header gom: tim  kiem va select   -->
            <div id="filter_header_two" class="p-2 mx-0 d-flex flex-row flex-wrap justify-content-between align-content-center">
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
                        <input type="text" class="form-control" placeholder="Nhập tên hoặc mã sản phẩm" aria-label="product name" aria-describedby="button-addon">
                        <button class="btn btn-secondary" type="button" id="button-addon">FIND</button>
                    </div>
                </div>

                <a href="index.php?page=add-product" type="button" class="btn btn-primary me-4 rounded-4">Thêm sản phẩm</a>
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
                            <th class="text-center" style="width: 50px;">Mã</th>
                            <th>Tên sản phẩm</th>
                            <th class="text-center">Đối tượng</th>
                            <th class="text-center">Loại</th>
                            <th style="width: 150px;" class="text-center">Giá</th>
                            <th style="width: 200px;" class="text-center">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="producttable__body">
                        <?php foreach ($productList as $product) {
                            // echo var_dump($product['id']);

                            $productHasColor = true;

                            if ($inventoryObj->get_colors_of_product($product['id']) == false) {
                                $productHasColor = false;
                            }
                            // echo var_dump($productHasColor);

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

                                <td style="width: 200px;" class="text-center d-flex justify-content-around">
                                    <a class="btn btn-secondary p-2 m-0" href="index.php?page=inventory&product=<?php echo $product['id'] ?>" role="button" aria-label="check color of the product">
                                        KIỂM TRA
                                    </a>
                                    <button class="btn btn-danger p-2 m-0" role="button" name="submitRemoveProduct" value="TRUE" onclick="return confirmSubmitRemoveProduct(<?php echo $product['id'] ?>, 'formRemoveProduct')" form="formRemoveProduct" formaction="index.php?page=inventory&removeProduct=TRUE" aria-label="remove the product" <?php if ($productHasColor == true) {
                                                                                                                                                                                                    echo 'disabled';
                                                                                                                                                                                                } ?>>
                                        XOÁ
                                    </button>
                                </td>
                            </tr>

                        <?php
                        }
                        ?>
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                
                <div class="mt-2">
                    <div hidden>Pagination</div>
                </div>
            </div>
        </div>

        <div hidden>
            <h3>this is hidden form to contain infor product removed</h3>
            <form id="formRemoveProduct" method="post">
                <input id="inputIdOfProductRemoved" type="text" name="removeProductId" value="-1">
            </form>
        </div>

    </div>

</div>