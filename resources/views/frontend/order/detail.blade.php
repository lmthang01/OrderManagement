@extends('frontend.layouts.app_frontend')
@section('content')

            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12 col-ml-12">
                        <div class="row">
                            <!-- Tiêu đề -->
                            <div class="col-12 mt-5">
                                <div class="card card-header-main">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title header-title-main">Chi tiết đơn hàng</h4>
                                            <div class="btn-group-head-order">
                                                <a href="{{ route('get.order_update') }}">
                                                    <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-edit"></i></i><span>Sửa</span></button>
                                                </a>
                                                <a href="">
                                                    <button type="button" class="btn btn-addorder"><i class="fa fa-print" aria-hidden="true"></i><span>In đơn hàng</span></button>
                                                </a>
                                                <a href="../Contract/addnewContract.php">
                                                    <button type="button" class="btn btn-addorder"><i class="fa fa-folder-open" aria-hidden="true"></i><span>Sinh hợp đồng</span></button>
                                                </a>
                                                <a href="{{ route('get.order_index') }}">
                                                    <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <!-- Form thông tin start -->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-3">
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Mã đơn hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">DH00044</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Trạng thái đơn hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">Đang thực hiện</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày đặt:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">16/05/2023 18:39</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Tên người liên hệ:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">Hà Trung Nghĩa</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Số điện thoại:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">0339551111</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ghi chú:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Người tạo:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">Lê Minh Thắng</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Mã khách hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">KH01</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Khách hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">Hà Trung Nghĩa</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Địa chỉ văn phòng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Điện thoại:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">0326457271</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Mã số thuế:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Số HĐ:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Tên HĐ:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày bắt đầu:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">16/05/2023 18:25:00</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày kết thúc:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">16/05/2023 23:59:00</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-3">
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Ngày giao hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Người giao</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">Huỳnh Nhật Trường</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Hình thức thanh toán:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Địa chỉ giao hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Thời gian giao hàng:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                                <div class="row form-group">
                                                    <div class="col-sm-5">
                                                        <label for="example-text-input" class="col-form-label input-label"><strong>Bảo hành:</strong></label>
                                                    </div>
                                                    <div class="col-sm-7">
                                                        <p class="col-form-label input-label">...</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form thông tin end -->
                            <!-- Form thông tin hàng hóa start -->
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
                                                        <td>HH01</td>
                                                        <td>Khóa học TOEIC</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>...</td>
                                                        <td>Khóa</td>
                                                        <td>0</td>
                                                        <td>3.000.000</td>
                                                        <td>6</td>
                                                        <td>2.820.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form thông tin khách hàng end -->
                        </div>
                    </div>
                </div>
     @stop 