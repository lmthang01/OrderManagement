@extends('frontend.layouts.app_frontend')
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">

                    <!-- Tiêu đề -->
                    <div class="col-12 mt-5">
                        <div class="card card-header-main">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title header-title-main">Chi tiết thông tin Khách hàng</h4>
                                    <div class="btn-group-head-order">
                                        {{-- <button onclick="window.location.href='../Customer/updateCustomer.php'"
                                        type="button" class="btn btn-addorder btn-back"><i
                                            class="fa fa-edit"></i></i><span>Sửa</span></button>
                                    <button onclick="window.location.href='../Customer/customer.php'" type="button"
                                        class="btn btn-addorder btn-back"><i class="fa fa-chevron-left"
                                            aria-hidden="true"></i><span>Trở về</span></button> --}}

                                        <span class="btn btn-addorder btn-back"><i class="fa fa-edit"></i>
                                            <a href="#" style="color: white"><span>Lưu dữ liệu</span></a>
                                        </span>
                                        <span class="btn btn-addorder btn-back"><i class="fa fa-chevron-left"
                                                aria-hidden="true"></i>
                                            <a href="{{ route('get.index') }}" style="color: white"><span>Trở về</span></a>
                                        </span>
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
                                    <div class="col-6">
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Mã khách
                                                        hàng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">KH0521</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Chủ sở hữu:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">Huỳnh Nhật Trường</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Số điện
                                                        thoại:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">0827423388</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Email:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">truong@gmail.com</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Phường/Xã:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">Phú Hiệp</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Quận/Huyện:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">Phú Tân</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Tỉnh/Thành
                                                        phố:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">An Giang</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Trạng thái:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">Đã hoàn thành</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Tên khách
                                                        hàng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">Hà Trung Nghĩa</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Địa chỉ văn
                                                        phòng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">Tiền Giang</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Mô tả:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">...</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Mã số thuế:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">...</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Ngày tạo:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">22/05/2023 16:00</p>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <div class="col-sm-5">
                                                <label for="example-text-input"
                                                    class="col-form-label input-label"><strong>Ngày cập
                                                        nhật:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">22/05/2023 16:00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form thông tin end -->
                    <!-- Form thông tin khách hàng start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="head-title-addbtn">
                                    <h4 class="header-title">Liên hệ</h4>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center table-business">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Người liên hệ</th>
                                                <th>Chức vụ</th>
                                                <th>Số điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Lê Minh Thắng</td>
                                                <td>Kỹ thuật</td>
                                                <td>0334567878</td>
                                                <td>...</td>
                                                <td>thang@gmail.com</td>
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

    </div>
@stop
