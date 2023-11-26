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
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?list-product" >Danh sách sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?add-product">Thêm sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="#">Quản lý đơn hàng</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?add-category">Danh mục sản phẩm</a>
                    <a class="nav-link px-3 py-3 px-0 my-2 rounded-4" href="../app/index.php?inventory">Nhà kho</a>
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
                                    <th scope="col" style="width: 10%;">ST</th>
                                    <th scope="col" style="width: 40%;">Đối tượng</th>
                                    <th scope="col" style="width: 35%;">Loại sản phẩm</th>
                                    <th scope="col">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if($show_category){
                                    $n= count($show_category);
                                    for($i=0;$i<$n;$i++){
                                        $result = $show_category[$i];
                                        if($result){
                                ?>
                                        <tr class="row1">
                                            <th scope="row"><?php echo $i+1 ?></th>
                                            <td><?php echo $result['object'] ?></td>
                                            <td><?php echo $result['category_name'] ?></td>
                                            <td class="catalog_operator" class="btn-group btn-group-sm p-0 m-0" role="button group" aria-label="operator button group">
                                            <a href="index.php?edit-category&category_id=<?php echo $result['id'] ?>"  
                                                            style="-webkit-appearance: button; -moz-appearance: button;appearance: button;text-decoration: none;color: black;">Sửa</a>
                                                <a href="index.php?delete-category&category_id=<?php echo $result['id'] ?>"  
                                                            style="-webkit-appearance: button; -moz-appearance: button;appearance: button;text-decoration: none;color: black;">Xóa</a>
                                            </td>
                                        </tr>
                                <?php
                                        }
                                    }
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
                                <?php
                                if($n/7 < 3){
                                    for($i=1;$i<=$n/7+1;$i++){
                                ?>
                                        <li class="page-item active"><a class="page-link" href="index.php/add-category&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php
                                    }
                                }
                                else{
                                ?>
                                    <li class="page-item active"><a class="page-link" href="index.php/add-category&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <li class="page-item active"><a class="page-link" href="index.php/add-category&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                    <li class="page-item active"><a class="page-link" href="index.php/add-category&page=<?php echo $i ?>"><?php echo $i ?></a></li>
                                <?php
                                }
                                ?>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <span aria-hidden="true">&raquo;</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>


                    <!-- Modal -->
                   

                    
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