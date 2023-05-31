@extends('frontend.layouts.app_frontend')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- Data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="head-title-addbtn">
                        <h4 class="header-title">Khách hàng</h4>
                        <!-- AddNew & OtherOptions Btn -->
                        <div class="head-title-btn">
                            <a href="{{ route('get.customer_create') }}">
                                <button type="button" class="btn btn-primary btn-addtrans mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i></i><span>Thêm mới</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable3" class="text-center table-business">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>Mã khách hàng</th>
                                    <th>Tên khách hàng</th>
                                    <th>Địa chỉ văn phòng</th>
                                    <th>Điện thoại</th>
                                    <th>Email</th>
                                    <th>Mã số thuế</th>
                                    <th>Người liên hệ</th>
                                    <th>Chức vụ</th>
                                    <th>Mô tả</th>
                                    <th>Ngày tạo</th>
                                    <th>Ngày cập nhật</th>
                                    <th>Hình</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>KH0521</td>
                                    <td>Hà Trung Nghĩa</td>
                                    <td>An Giang</td>
                                    <td>0336788766</td>
                                    <td>nghia@gmail.com</td>
                                    <td>...</td>
                                    <td>Lê Minh Thắng</td>
                                    <td>Quản lý</td>
                                    <td>...</td>
                                    <td>24/05/2023 16:00</td>
                                    <td>24/05/2023 16:00</td>
                                    <td>...</td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-2"><a href="{{ route('get.customer_detail') }}" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                            <li class="mr-2"><a href="{{ route('get.customer_update') }}" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                            <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                        </ul>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Data table end -->
    </div>
</div>
@stop