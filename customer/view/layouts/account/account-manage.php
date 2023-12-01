
    <div class="container mt-3 w-75">
        <div class="account__information">
            <div class="account__information-title d-flex justify-content-center">
                <h2>QUẢN LÝ ĐƠN HÀNG</h2>
            </div>
            <div class="account__information-detail d-flex justify-content-between align-items-start mt-2">
                <div class="user d-flex flex-column justify-content-center p-5 w-25">
                    <div class="user__avatar d-flex align-items-center flex-column">
                        <img src="../view/assets/img/avatar/avatar9.jpg">
                        <h5>Xin chao Nguyen Tho</h5>
                    </div>
                    <div class="user__menu mt-3">
                        <li>
                            <i class="bi bi-person"></i>
                            <a href="account.html">Thông tin tài khoản</a>
                        </li>
                        <li>
                            <i class="bi bi-menu-button-wide"></i>
                            <a href="account-manage.html">Quản lý đơn hàng</a>
                        </li>
                        <li>
                            <i class="bi bi-map"></i>
                            <a href="account-maps.html">Danh sách địa chỉ</a>
                        </li>
                        <li>
                            <i class="bi bi-bell"></i>
                            <a href="account-notifi.html">Danh sách thông báo</a>
                        </li>
                        <li>
                            <i class="bi bi-box-arrow-in-right"></i>
                            <a href="#">Đăng xuất</a>
                        </li>
                    </div>
                </div>
                <div
                    class="user__infor flex-fill bd-highligh p-3 d-flex flex-column justify-content-center align-items-center w-75">
                    <div class="user__infor-detail d-flex flex-column justify-content-center align-items-center">
                        <h3>Đơn hàng của bạn</h3>
                        <table class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Mã</th>
                                    <th scope="col">Ngày</th>
                                    <th scope="col">Tên</th>
                                    <th scope="col">Trạng thái</th>
                                    <th scope="col">Xem</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>#123456</td>
                                    <td>12/2/2023</td>
                                    <td>Nike ABCD</td>
                                    <td class="text-warning">Đang xác nhận</td>
                                    <td class="d-flex justify-content-center">
                                        <!-- <button type="button" class="btn btn-success w-100">XEM</button> -->
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            XEM
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>#123456</td>
                                    <td>12/2/2023</td>
                                    <td>Nike ABCD</td>
                                    <td class="text-primary">Đang giao</td>
                                    <td class="d-flex justify-content-center">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            XEM
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>#123456</td>
                                    <td>12/2/2023</td>
                                    <td>Nike ABCD</td>
                                    <td class="text-success">Đã giao</td>
                                    <td class="d-flex justify-content-center">
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-success w-100" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal">
                                            XEM
                                        </button>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog d-flex align-items-center justify-content-center" id="modal-dialog-user">
                            <div class="modal-content" id="modal-user">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">
                                        Đơn hàng <span>#123465</span>
                                    </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="bill-title d-flex justify-content-between align-items-center">
                                        <div class="user__infor-detail w-75">
                                            <div class="title">
                                                <p>Họ và tên:</p>
                                                <span>Nguyễn Trương Phước Thọ</span>
                                            </div>
                                            <div class="title">
                                                <p>Email:</p>
                                                <span>abc9@gmail.com</span>
                                            </div>
                                            <div class="title">
                                                <p>Địa chỉ:</p>
                                                <span>123 Trần Hưng Đạo, Hội Phú, Đà Nẵng</span>
                                            </div>
                                            <div class="title">
                                                <p>Điện thoại:</p>
                                                <span>0987 654 321</span>
                                            </div>
                                        </div>
                                        <div class="user__avatar">
                                            <img src="img/avatar9.jpg" class="bill-ava">
                                        </div>
                                    </div>
                                    <div class="bill__description">
                                        <div class="bill__description-date d-flex justify-content-around">
                                            <div class="title">
                                                <p>Ngày đặt: <span>15/05/2025</span> </p>
                                            </div>
                                            <div class="title">
                                                <p>Mã hóa đơn: <span>#123456</span> </p>
                                            </div>
                                            <div class="title">
                                                <p>Trạng thái <span class="text-warning">Đang xác nhận</span> </p>
                                            </div>
                                        </div>
                                        <div class="bill__description-title">
                                            <div class="title d-flex justify-content-between">
                                                <h4>THÔNG TIN SẢN PHẨM</h4>

                                            </div>
                                            <table class="table table-striped table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Tên</th>
                                                    <th scope="col">Số lượng</th>
                                                    <th scope="col">Giá</th>
                                                    <th scope="col">Tổng tiền</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <th scope="row">1</th>
                                                    <td>Thượng đình x9x1-456</td>
                                                    <td>1</td>
                                                    <td>123.239đ</td>
                                                    <td>123.239đ</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">2</th>
                                                    <td>Thượng đình x9x1-456</td>
                                                    <td>1</td>
                                                    <td>123.239đ</td>
                                                    <td>123.239đ</td>
                                                  </tr>
                                                  <tr>
                                                    <th scope="row">3</th>
                                                    <td>Thượng đình x9x1-456</td>
                                                    <td>1</td>
                                                    <td>123.239đ</td>
                                                    <td>123.239đ</td>
                                                  </tr>
                                                </tbody>
                                            </table>
                                            <div class="bill__description d-flex justify-content-between p-3">
                                                <div class="bill__payment">
                                                    <div class="bill__payment-ti">
                                                        <i class="bi bi-credit-card"></i>
                                                        Hình thức thanh toán
                                                    </div>
                                                    <h6>Thanh toán khi nhận hàng</h6>
                                                </div>
                                                <div class="bill__total d-flex align-items-center gap-3">
                                                    <h4>Cần thanh toán</h4>
                                                    <h6 class="text-danger">1.123.456đ</h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
