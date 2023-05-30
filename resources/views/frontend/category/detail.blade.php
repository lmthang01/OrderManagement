@extends('frontend.layouts.app_frontend')
@section('content')
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--10">
                <!-- Textual inputs start -->
                <div class="col-10 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="login-form-head ">Chi tiết list khách hàng</h4>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label">TÊN NHÓM</label>
                                <input disabled class="form-control" type="text" value="KH không thường xuyên"
                                    id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="col-form-label">MÔ TẢ</label>
                                <input disabled class="form-control" type="text"
                                    value="KH sử dụng dịch vụ từ 3 tháng trở xuống trong 6 tháng theo dõi"
                                    id="example-text-input">
                            </div>
                            {{-- <button type="submit" class="btn btn-dark mt-4 pr-4 pl-4">Lưu</button> --}}
                            <!-- <a  class="btn btn-outline-primary mt-4 pr-4 pl-4"> -->
                            <!-- <input  type="button" value="Hủy"> -->
                            {{-- <button onclick="window.location.href='../../View/List/listcustomer.php'" type="button"
                                class="btn btn-outline-dark mt-4 pr-4">Trở về </button> --}}
                                <span class="btn btn-dark mt-4 pr-4 pl-4"><a href="{{ route('get.list_customer_update') }}" style="color: white">Chỉnh sửa</a></span>
                                <span class="btn btn-outline-dark mt-4 pr-4"><a href="{{ route('get.list_customer_index') }}" style="color: black">Trở về</a></span>
                            <!-- </a> -->
                        </div>
                    </div>
                </div>
                <!-- Textual inputs end -->
            </div>
        </div>
    </div>
@stop
