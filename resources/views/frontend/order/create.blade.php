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
                                            <h4 class="header-title header-title-main">Thêm mới đơn hàng</h4>
                                            <div class="btn-group-head-order">
                                                <button type="button" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                                                <a href="../Contract/addnewContract.php">
                                                    <button type="button" class="btn btn-addorder"><i class="fa fa-folder-open" aria-hidden="true"></i><span>Lưu và sinh hợp đồng</span></button>
                                                </a>
                                                <a href="{{ route('get.order_index') }}">
                                                    <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- EnD -->
                            <!-- Form nhập thông tin cơ bản -->
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Thông tin cơ bản</h4>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        <div class="btn-load">
                                            <!-- Tùy vào chọn lựa ở mục "Chọn" tiếp theo để quyết định 1 nút active 1 nút disable - Không đồng thời cả 2" -->
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn Khách Hàng</button>
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" disabled>Chọn Hợp Đồng</button>
                                            <!-- Sau khi "Chọn Khách Hàng" hoặc "Chọn Hợp Đồng" thì nút "Chọn Liên Hệ" sẽ active -->
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" disabled>Chọn Liên Hệ</button>
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Chọn:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option value="KH" selected="selected">Chọn Khách Hàng</option>
                                                        <option value="HD">Chọn Hợp Đồng</option>
                                                        <option value="AddNewKH">Thêm Mới Khách Hàng</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ngày đặt hàng:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                                </div>

                                                <!-- Ở mục chọn, khi chọn "Chọn hợp đồng" thì 2 trường dưới mới xuất hiện -->

                                                <!-- <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã hợp đồng:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ngày bắt đầu HĐ:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div> -->
                                            </div>

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
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Email:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã số thuế:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input" disabled>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Hình thức TT:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ghi chú:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                            </div>

                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Người giao:</label>
                                                    <select class="custom-select custom-select-height">
                                                        <option selected="selected">--Chọn người giao--</option>
                                                        <option value="">Hà Trung Nghĩa</option>
                                                        <option value="">Lê Minh Thắng</option>
                                                        <option value="">Huỳnh Nhật Trường</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tên người liên hệ:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ GH:</label>
                                                    <input class="form-control" type="text" value="" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Thời gian GH:</label>
                                                    <input class="form-control" type="datetime-local" value="" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Form nhập thông tin cơ bản end -->
                            <!-- Form nhập thông tin hàng hóa start-->
                            
                            {{-- <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title">Thông tin hàng hóa</h4>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        <form method="POST" action="" >
                                            @csrf
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"  class="col-form-label input-label">Mã hàng hóa:</label>
                                                    <input class="form-control" name="goods_code" type="text"  id="example-text-input"
                                                   value="{{ old('goods_code', $goods->goods_code ?? '') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input"  class="col-form-label input-label">Tên hàng hóa:</label>
                                                    <input class="form-control" name="name" type="text"  id="example-text-input"
                                                    value="{{ old('name', $goods->name ?? '') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn vị:</label>
                                                    <select name="unit" class="custom-select custom-select-height">
                                                        <option value="">--Chọn đơn vị--</option>
                                                        <option value="Gam">Gam</option>
                                                        <option value="Mét">Mét</option>
                                                        <option value="Chiếc">Chiếc</option>
                                                        <option value="Bộ">Bộ</option>
                                                        <option value="Gói">Gói</option>
                                                        <option value="Hộp">Hộp</option>
                                                        <option value="Thùng">Thùng</option>
                                                        <option value="Lít">Lít</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Hãng SX:</label>
                                                    <input name="manufacturer" class="form-control" type="text" id="example-text-input"
                                                    value="{{ old('manufacturer', $goods->manufacturer ?? '') }}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Xuất xứ:</label>
                                                    <input class="form-control" name="origin" type="text" id="example-text-input"
                                                    value="{{ old('origin', $goods->origin ?? '') }}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                                    <input class="form-control" name="guarantee" type="text"id="example-text-input" 
                                                    value="{{ old('guarantee', $goods->guarantee ?? '') }}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mô tả:</label>
                                                    <input class="form-control" name="describe" type="text" id="example-text-input"
                                                    value="{{ old('describe', $goods->describe ?? '') }}" >
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-file-input" class="col-form-label input-label">Hình ảnh:</label>
                                                    <input class="form-control" type="file" name="avatar" >
                                                    @if (isset($goods->avatar) && $goods->avatar)
                                                        <img src="{{ pare_url_file($goods->avatar) }}"
                                                            style="width: 60px; height: 60px; border-radius: 10px; margin-top: 10px" alt="avatar customer">
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn giá nhập:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="input_price" type="text" id="example-text-input"
                                                        value="{{ old('input_price', $goods->input_price ?? '') }}" >
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="warping_ratio" type="text" id="example-text-input"
                                                         value="{{ old('warping_ratio', $goods->warping_ratio ?? '') }}" >
                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="output_price" type="text" id="example-text-input"
                                                        value="{{ old('output_price', $goods->output_price ?? '') }}" >
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="tax" type="text" id="example-text-input"
                                                        value="{{ old('tax', $goods->tax ?? '') }}" >

                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="total" type="text" id="example-text-input"
                                                        value="{{ old('total', $goods->total ?? '') }}" >
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="btn-group-head-order">
                                            <button type="submit" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div> --}}
                            
                            <!-- Form nhập thông tin hàng hóa end -->
                            @include('frontend.order.table_goods')
                        </div>
                    </div>
                </div>
  @stop