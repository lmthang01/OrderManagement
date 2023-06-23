@extends('frontend.layouts.app_frontend')
@section('content')
<form method="POST" action="" >
    @csrf
            <div class="main-content-inner">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                           
                           
                            <!-- Form nhập thông tin hàng hóa start-->
                            
                            <div class="col-12 mt-2">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title header-title-main">Hàng Hóa</h4>
                                            <div class="btn-group-head-order">
                                                <button type="submit" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                                {{-- <button onclick="window.location.href='{{ route ('get.order_create') }}'" type="button" class="btn btn-addorder btn-back">Trở về</button> --}}
                                        </div>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"  class="col-form-label input-label">Mã hàng hóa:</label>
                                                    <input class="form-control" name="goods_code" type="text"  id="example-text-input"
                                                    value="{{ old('goods_code', $goods->goods_code ?? '') }}">
                                                    @error('goods_code')
                                                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('goods_code') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input"  class="col-form-label input-label">Tên hàng hóa:</label>
                                                    <input class="form-control" name="name" type="text"  id="example-text-input"
                                                    value="{{ old('name', $goods->name ?? '') }}">
                                                    @error('name')
                                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('name') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn vị:</label>
                                                    <select name="unit_id" class="custom-select custom-select-height" id="">
                                                        <option value="">---Chọn đơn vị---</option>
                                                        @foreach ($unit ?? [] as $goods1)
                                                        <option value="{{ $goods1->id }}"
                                                            {{ ($goods1->unit_id ?? 0) == $goods1->id ? 'selected' : '' }}>{{ $goods1->name }}
                                                        </option>
                                                        @endforeach
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
                                                        <input class="form-control" name="input_price" type="number" id="example-text-input"
                                                        value="{{ old('input_price', $goods->input_price ?? '') }}" >
                                                        <span class="unit-price">0</span>
                                                        @error('input_price')
                                                            <small id="emailHelp" class="form-text text-danger">{{ $errors->first('input_price') }}</small>
                                                        @enderror
                                                    </div>
                                                
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="markup_ratio" type="number" id="example-text-input"
                                                         value="{{ old('markup_ratio', $goods->markup_ratio ?? '') }}" >
                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                            
                                                {{-- <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="output_price" type="number" id="example-text-input"
                                                        value="{{ old('output_price', $goods->output_price ?? '') }}" >
                                                        <span class="unit-price">0</span>                                                        
                                                    </div>
                                                </div> --}}
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="tax" type="number" id="example-text-input"
                                                        value="{{ old('tax', $goods->tax ?? '') }}" >

                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
                                                {{-- <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="total" type="number" id="example-text-input"
                                                        value="{{ old('total', $goods->total ?? '') }}" >
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                        {{-- <div class="btn-group-head-order">
                                            <button type="submit" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                            <button onclick="window.location.href='{{ route ('get.contact_index') }}'" type="button" class="btn btn-addorder btn-back">Trở về</button>
                                        </div> --}}
                                 
                                    </div>
                                </div>
                            </div>
                       
                            <!-- Form nhập thông tin hàng hóa end -->
                           
                        </div>
                    </div>
                </div>
            </form>
  @stop