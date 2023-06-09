@extends('frontend.layouts.business_contract')
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card card-header-main">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title header-title-main">Thêm mới hợp đồng bán ra</h4>
                                    <div class="btn-group-head-order">
                                        <button type="button" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                                        <a href="../Contract/contract.php">
                                            <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form nhập thông tin Khách hàng start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title">Thông tin Khách hàng</h4>
                                </div>
                                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                <div class="btn-load">
                                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn Khách Hàng</button>
                                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" >Chọn Liên Hệ</button>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Mã khách hàng:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tên khách hàng:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Địa chỉ ĐKKD:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Địa chỉ văn phòng:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Ngày sinh:</label>
                                            <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input" disabled>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Email:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Số điện thoại KH:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Số tài khoản:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Mã số thuế:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Người đại diện:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Chức vụ:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form nhập thông tin Khách hàng end -->
                    <!-- Form nhập thông tin Hợp đồng start-->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title">Thông tin hợp đồng</h4>
                                </div>
                                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Chủ sở hữu:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn chủ sở hữu--</option>
                                                <option value="">Hà Trung Nghĩa</option>
                                                <option value="">Lê Minh Thắng</option>
                                                <option value="">Huỳnh Nhật Trường</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Giá trị hợp đồng:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price unit-price-exp">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày bắt đầu:</label>
                                            <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày kết thúc:</label>
                                            <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày hiệu lực:</label>
                                            <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Trạng thái:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn trạng thái--</option>
                                                <option value="">Chưa thực hiện</option>
                                                <option value="">Đã đặt cọc</option>
                                                <option value="">Đang thực hiện</option>
                                                <option value="">Thanh toán hoàn tất</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tên hợp đồng:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Loại hợp đồng:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn loại hợp đồng--</option>
                                                <option value="">Đơn hàng bán lẻ</option>
                                                <option value="">Đơn hàng đặt tiệc</option>
                                                <option value="">Thiết kế Web</option>
                                                <option value="">Đăng ký gói dịch vụ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Hình thức thanh toán:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn hình thức thanh toán--</option>
                                                <option value="">Trả trước</option>
                                                <option value="">Trả sau</option>
                                                <option value="">Trả góp</option>
                                                <option value="">12 tháng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Hình thức vận chuyển:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn hình thức vận chuyển--</option>
                                                <option value="">Vietnam Post</option>
                                                <option value="">Viettel Post</option>
                                                <option value="">J&T</option>
                                                <option value="">Ninja Van</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày thanh toán:</label>
                                            <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Loại thanh toán:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn loại thanh toán--</option>
                                                <option value="">Nhận tiền mặt</option>
                                                <option value="">Nhận chuyển khoản</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">% giá trị HĐ:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tiền thanh toán:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price unit-price-exp">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Doanh số tính cho:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn--</option>
                                                <option value="">Hà Trung Nghĩa</option>
                                                <option value="">Lê Minh Thắng</option>
                                                <option value="">Huỳnh Nhật Trường</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Ghi chú:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form nhập thông tin Hợp đồng end -->
                    <!-- Form nhập thông tin Hàng hóa start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title">Thông tin hàng hóa</h4>
                                </div>
                                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                <div class="btn-load">
                                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn Hàng Hóa</button>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Mã hàng hóa:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tên hàng hóa:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Đơn vị:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn đơn vị--</option>
                                                <option value="">Gam</option>
                                                <option value="">Mét</option>
                                                <option value="">Chiếc</option>
                                                <option value="">Bộ</option>
                                                <option value="">Gói</option>
                                                <option value="">Hộp</option>
                                                <option value="">Thùng</option>
                                                <option value="">Lít</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Hãng SX:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Xuất xứ:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Mô tả:</label>
                                            <input class="form-control" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-file-input" class="col-form-label input-label">Hình ảnh:</label>
                                            <input class="form-control" type="file" value="" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Đơn giá nhập:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price">%</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price">%</span>
                                            </div>
                                        </div>
                                        <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control" type="text" value="" id="example-text-input">
                                                <span class="unit-price">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group-head-order">
                                    <button type="button" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form nhập thông tin Hàng hóa end -->
                    <!-- Bảng thông tin hàng hóa start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="head-title-addbtn">
                                    <h4 class="header-title">Hàng hóa</h4>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center table-business">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Mã hàng hóa</th>
                                                <th>Tên hàng hóa</th>
                                                <th>Mô tả</th>
                                                <th>Xuất xứ</th>
                                                <th>Hãng SX</th>
                                                <th>Bảo hành</th>
                                                <th>Đơn vị tính</th>
                                                <th>Giá nhập</th>
                                                <th>Giá xuất</th>
                                                <th>Thuế</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form thông tin khách hàng end -->
                    <!-- Thống kê tổng đơn hàng -->
                    <div class="card-body card-body-order">
                        <div class="statistics-total">
                            <div class="total-label">
                                <span>Tổng tiền hàng:</span><br>
                                <span>Tiền chiết khấu:</span><br>
                                <span>Tiền thuế:</span><br>
                                <span>Tổng tiền:</span><br>
                                <span>Lợi nhuận:</span>
                            </div>
                            <div class="total-money">
                                <span>35.200.000</span><br>
                                <span>11.000.000</span><br>
                                <span>11.000.000</span><br>
                                <span>11.000.000</span><br>
                                <span>24.200.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
