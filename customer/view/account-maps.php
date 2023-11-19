
    <div class="container mt-3 w-75">
        <div class="account__information">
            <div class="account__information-title d-flex justify-content-center">
                <h2>DANH SÁCH ĐỊA CHỈ</h2>
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
                    <div class="user__infor-detail d-flex justify-content-center align-items-start">
                            <div class="user__infor-map w-50">
                                <div class="user__infor-title d-flex justify-content-between m-1 p-2" id="map-bg">
                                    <span>Nguyen Tho <em><s>(Địa chỉ mặc định)</s></em></span>
                                    <a href="#"><i class="bi bi-x text-danger"></i></a>
                                </div>
                                <div class="user__infor-detail m-1 p-2">
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
                                        <p>Ngày sinh:</p>
                                        <span>31/06/1986</span>
                                    </div>
                                    <div class="title">
                                        <p>Điện thoại</p>
                                        <span>0987 654 321</span>
                                    </div>
                                </div>
                            </div>
                            <div class="user__infor-btn w-50 m-1 d-flex flex-column justify-content-center" >
                                <button type="button" class="btn btn-dark w-100" onclick="displayForm()">NHẬP ĐỊA CHỈ MỚI</button>
                                <form class="user__infor-form p-2" id="user__infor-form">
                                    <div class="form-group mb-2">
                                      <label for="">Họ</label>
                                      <input type="text" class="form-control w-100 mt-1" id="exampleInputEmail1" placeholder="Nhập vào họ">
                                    </div>
                                    <div class="form-group mb-2">
                                      <label for="">Tên</label>
                                      <input type="text" class="form-control w-100 mt-1" id="exampleInputPassword1" placeholder="Nhập vào tên">
                                    </div>
                                    <div class="form-group mb-2">
                                      <label for="">Công ty</label>
                                      <input type="text" class="form-control w-100 mt-1" id="exampleInputEmail1" placeholder="Nhập vào địa chỉ Công ty">
                                    </div>
                                    <div class="form-group mb-2">
                                      <label for="">Số điện thoại</label>
                                      <input type="text" class="form-control w-100 mt-1" id="exampleInputPassword1" placeholder="Nhập vào số điện thoại">
                                    </div>
                                    <div class="form-group mb-2">
                                      <label for="">Địa chỉ</label>
                                      <input type="text" class="form-control w-100 mt-1" id="exampleInputPassword1" placeholder="Nhập vào địa chỉ">
                                    </div>
                                    <div class="form-check mb-2">
                                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                      <label class="form-check-label" for="exampleCheck1">Đặt làm địa chỉ mặc định</label>
                                    </div>
                                    <div class="d-flex justify-content-center m-2">
                                        <button type="submit" class="btn btn-dark w-75">Xác nhận</button>
                                    </div>
                                  </form>
                            </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
