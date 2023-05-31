@extends('frontend.layouts.app_frontend')
@section('content')
    <div class="login-area login-s2">
        <div class="container">
            <div class="login-box ptb--10">
                <!-- Textual inputs start -->
                <div class="col-10 mt-5">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="login-form-head" style="font-weight: 400;" !importan>Cập Nhật Danh Sách Khách Hàng</h4>
                            <div class="form-group">
                                <label for="example-text-input" class="col-form-label input-label">Tên Nhóm</label>
                                <input class="form-control" type="text" value="" id="example-text-input">
                            </div>
                            <div class="form-group">
                                <label for="example-search-input" class="col-form-label input-label">Mô Tả</label>
                                <input class="form-control" type="text" value="">
                            </div>

                            {{-- <button type="submit" class="btn btn-dark mt-3 mr-3">Cập nhật</button>
                        <!-- <a  class="btn btn-outline-primary mt-4 pr-4 pl-4"> -->
                        <!-- <input  type="button" value="Hủy"> -->
                        <button onclick="window.location.href='../../View/List/listcustomer.php'" type="button"
                            class="btn btn-outline-dark mt-3">Hủy </button>
                        <!-- </a> --> --}}

                            <span class="btn btn-dark mt-4 pr-4 pl-4"><a href="#" style="color: white">Lưu dữ
                                    liệu</a></span>
                            <span class="btn btn-outline-dark mt-4 pr-4"><a href="{{ route('get.list_customer_index') }}"
                                    style="color: black">Trở về</a></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
