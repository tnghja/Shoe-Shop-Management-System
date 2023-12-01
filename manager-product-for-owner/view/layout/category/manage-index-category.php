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
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4 active" aria-current="page" href="#">Danh mục sản
                phẩm</a>
            <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?page=inventory">Nhà kho</a>
        </nav>
    </div>

    <!-- main content wrapper -->
    <div class="maincontent container container-fluid">
        <!-- to do -->
        <div class="container container-fluid">
            <div class="list_catalog">
                <div class="col-12 mb-1">
                    DANH MỤC SẢN PHẨM
                </div>
                <table class="table_catalog table border table-hover mb-2">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 10%;">SST</th>
                            <th scope="col" style="width: 40%;">Đối tượng</th>
                            <th scope="col" style="width: 35%;">Loại sản phẩm</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $count = 1;
                        foreach ($res as $row) {
                        ?>
                            <tr class="<?= 'row' . $count ?>">
                                <th scope="row"><?= $row['id'] ?></th>
                                <td><?= $row['object'] ?></td>
                                <td><?= $row['category_name'] ?></td>
                                <td class="catalog_operator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                    <button type="button" class="edit_producttpye btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#edit_staticBackdrop">
                                        SỬA
                                    </button>
                                    <div class="delete_producttype btn btn-sm btn-secondary">
                                        XOÁ
                                    </div>
                                </td>
                            </tr>
                        <?php
                            $count++;
                        }
                        ?>
                    </tbody>
                </table>
                <nav aria-label="Page navigation" class="mb-3">
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


            <!-- Modal -->
            <div class="modal fade" id="edit_staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">SỬA DANH MỤC SẢN PHẨM</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form class="form_edit_catalog">
                                <!-- doi tuong/customer -->
                                <div class="form_edit_catalog__cus">
                                    <label for="customertype" class="form-label">Đối tượng</label>
                                    <select id="customertype" class="form-select">
                                        <option selected>Nam</option>
                                    </select>
                                </div>

                                <!-- type -->
                                <div class="form_edit_catalog__type">
                                    <label for="producttype" class="form-label">Tên loại sản phẩm</label>
                                    <input type="text" class="form-control" id="producttype" value="Giày thể thao">
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">HUỶ</button>
                            <button type="button" class="btn btn-primary">LƯU THAY ĐỔI</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="add_catalog p-1 row g-1">
                <div class="col-12">
                    THÊM DANH MỤC SẢN PHẨM
                </div>
                <form class="form_add_catalog col-12 row g-2 border p-2" method=POST>
                    <!-- doi tuong/customer -->
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
                            <button type="submit" class="btn btn-primary">THÊM</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>