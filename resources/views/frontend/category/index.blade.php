@extends('frontend.layouts.app_frontend')
@section('content')
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <div class="head-title-addbtn">
                        <h4 class="header-title">Danh sách khách hàng</h4>
                        <!-- AddNew & OtherOptions Btn -->
                        <div class="head-title-btn">
                            <a href="{{ route('get.list_customer_create') }}">
                                <button type="button" class="btn btn-primary btn-addtrans mb-3"><i
                                        class="fa fa-plus-circle" aria-hidden="true"></i></i><span>Thêm
                                        mới</span></button>
                            </a>
                        </div>
                    </div>
                    <div class="data-tables datatable-dark">
                        <table id="dataTable" class="text-center table-business">
                            <thead class="text-capitalize">
                                <tr>
                                    <th>TÊN NHÓM</th>
                                    <th>MÔ TẢ</th>
                                    <th>SỐ LƯỢNG</th>
                                    <th>NGÀY TẠO</th>
                                    <th>NGÀY CẬP NHẬT</th>
                                    <th>THAO TÁC</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Học toeic</td>
                                    <td>Sinh viên có nhu cầu học toeic</td>
                                    <td>2</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <ul class="d-flex justify-content-center">
                                            <li class="mr-2"><a href="{{ route('get.list_customer_detail') }}"
                                                    class="text-primary"><i class="fa fa-info-circle"
                                                        aria-hidden="true"></i></a></li>
                                            <li class="mr-2"><a href="{{ route('get.list_customer_update') }}"
                                                    class="text-primary"><i class="fa fa-edit"></i></a></li>
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
        <!-- data table end -->

        <!-- Dark table start -->
        <div class="col-12 mt-5">
            <div class="card">

            </div>
        </div>
        <!-- Dark table end -->
    </div>
</div>
@stop