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
                                <h4 class="header-title header-title-main">Cập Nhật Thông Tin Khách Hàng</h4>
                                <div class="btn-group-head-order">
                                    {{-- <button onclick="window.location.href='#'" type="button"
                                        class="btn btn-addorder"><i class="fa fa-floppy-o"
                                            aria-hidden="true"></i><span>Cập nhật</span></button>
                                    <a href="../Customer/customer.php">
                                        <button type="button" class="btn btn-addorder btn-back"><i
                                                class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở
                                                về</span></button>
                                    </a> --}}

                                    <span class="btn btn-addorder"><i class="fa fa-floppy-o"
                                        aria-hidden="true"></i><a href="#"
                                            style="color: white"> <span>Lưu dữ liệu</span></a> </span>
                                    <span class="btn btn-addorder btn-back"><i class="fa fa-chevron-left"
                                            aria-hidden="true"></i><a href="{{ route('get.index') }}"
                                            style="color: white"> <span>Trờ về</span></a> </span>
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
                                <h4 class="header-title">Thông Tin Cơ Bản</h4>
                            </div>
                            <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các
                                trường có dấu <code>*</code> là bắt buộc phải điền.</p>

                            <div class="row">


                                <div class="col-6">
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label input-label">Mã Khách
                                            hàng</label>
                                        <input class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-search-input" class="col-form-label input-label">Tên khách
                                            hàng</label>
                                        <input class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email-input"
                                            class="col-form-label input-label">Email</label>
                                        <input class="form-control" type="email" value=""
                                            id="example-email-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label input-label">Địa chỉ văn
                                            phòng</label>
                                        <input class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-tel-input" class="col-form-label input-label">Số điện
                                            thoại</label>
                                        <input class="form-control" type="tel" value=""
                                            id="example-tel-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label input-label">Mã số
                                            thuế</label>
                                        <input type="text" class="form-control" id="example-text-input"
                                            value="">
                                    </div>
                                </div>

                                <div class="col-6 ">

                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label input-label">Người liên
                                            hệ</label>
                                        <input type="text" class="form-control" id="example-text-input"
                                            value="">
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
                                        <label for="example-text-input" class="col-form-label input-label">Mô tả</label>
                                        <input class="form-control" type="text" value=""
                                            id="example-text-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-datetime-local-input"
                                            class="col-form-label input-label">Ngày tạo</label>
                                        <input class="form-control" type="datetime-local" value=""
                                            id="example-datetime-local-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-datetime-local-input"
                                            class="col-form-label input-label">Ngày cập nhật</label>
                                        <input class="form-control" type="datetime-local" value=""
                                            id="example-datetime-local-input">
                                    </div>
                                    <div class="form-group">
                                        <label for="example-text-input" class="col-form-label input-label">Hình
                                            ảnh</label>
                                        <input class="form-control" type="file" value=""
                                            id="example-file-input">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Form nhập thông tin hàng hóa end -->
            </div>
        </div>

    </div>

</div>
@stop