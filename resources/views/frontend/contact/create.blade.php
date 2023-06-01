@extends('frontend.layouts.app_frontend')
@section('content')
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Tiêu đề -->
                            <div class="col-12 mt-5">
                                <div class="card card-header-main">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title header-title-main">Thêm mới liên hệ</h4>
                                            <div class="btn-group-head-order">
                                                <button type="button" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                                                <a href="{{ route ('get.contact_index') }}">
                                                    <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End -->
                            <!-- Form nhập thông tin liên hệ start-->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Thông tin cơ bản</h4>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        
                                        <div class="row">
                                            

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Người liên hệ</label>
                                                    <input class="form-control" type="text" value="Huỳnh Nhật Trường" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-search-input" class="col-form-label input-label">Khách hàng</label>
                                                    <input class="form-control" type="text" value="Nguyễn Văn Tèo" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label input-label">Chức vụ:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option>---Chọn chức vụ--</option>
                                                        <option>Giám đốc</option>
                                                        <option>Phó giám đốc</option>
                                                        <option>Trưởng phòng kỹ thuật</option>
                                                        <option>Thu mua</option>
                                                    </select>
                                                </div> 
                                                <div class="form-group">
                                                    <label for="example-email-input" class="col-form-label input-label">Email</label>
                                                    <input class="form-control" type="email" value="truong@gmail.com" id="example-email-input">
                                                </div>
                                                        
                                            </div>

                                            <div class="col-6 ">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ liên hệ</label>
                                                    <input type="text" class="form-control" id="example-text-input" value="Cần Thơ">
                                                </div>
                                                <div class="form-group">
                                                    <label class="col-form-label input-label">Loại giao dịch:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option>--Chọn giới tính--</option>
                                                        <option>Nam</option>
                                                        <option>Nữ</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-tel-input" class="col-form-label input-label">Số điện thoại</label>
                                                    <input class="form-control" type="tel" value="0123345678" id="example-tel-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Ngày sinh</label>
                                                    <input class="form-control" type="datetime-local" value="2001-01-01" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin hàng hóa end -->     
                        </div>
                    </div>
                    <!-- Form thông tin hàng hóa start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="head-title-addbtn">
                                    <h4 class="header-title">Khách hàng</h4>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center table-business">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Mã khách hàng</th>
                                                <th>Tên khách hàng</th>
                                                <th>Địa chỉ</th>
                                                <th>Số điện thoại</th>
                                                <th>Fax</th>
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
                </div>
            </div>       
        </div>
        <!-- main content area end -->
@stop