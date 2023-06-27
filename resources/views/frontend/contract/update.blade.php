@extends('frontend.layouts.business_contract')
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                {{-- <div class="row"> --}}
                    <div class="col-12 mt-5">
                        <div class="card card-header-main">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title header-title-main">Chỉnh sửa hợp đồng bán ra</h4>
                                    <div class="btn-group-head-order">
                                        <button type="button" onclick="submitFormUpdate()" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu thay đổi</span></button>
                                        <script>
                                            function submitFormUpdate() {
                                                var form = document.getElementById('contractFormUpdate');
                                                form.submit();
                                            }
                                        </script>
                                        <a href="{{ route('get.contract_index') }}">
                                            <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                        </a>
                                        <style>
                                            .btn:hover {
                                                color: #fff !important;
                                            }
                                        </style>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- ------------------ --}}
                    @include('frontend.contract.form_update')
                    {{-- ------------------ --}}
                    <!-- Bảng thông tin hàng hóa start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="head-title-addbtn">
                                    <h4 class="header-title">Hàng hóa</h4>
                                    <div class="btn-load">
                                        <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3"><i class="fa fa-plus pr-1" aria-hidden="true"></i> Chọn Hàng Hóa</button>
                                    </div>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable" class="text-center table-business">
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
                {{-- </div> --}}
            </div>
        </div>
    </div>
@stop
