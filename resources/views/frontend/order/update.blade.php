@extends('frontend.layouts.app_frontend')
@section('content')
<form method="POST" action="" >
    @csrf
            <div class="main-content-inner">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="row">
                            <!-- Tiêu đề -->
                            <div class="col-12 mt-5">
                                <div class="card card-header-main">
                                    <div class="card-body">
                                        <div class="card-header-order">
                                            <h4 class="header-title header-title-main">Cập nhật đơn hàng</h4>
                                            <div class="btn-group-head-order">
                                                <button type="submit" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Cập nhật</span></button>
                                                {{-- <a href="../Contract/addnewContract.php">
                                                    <button type="button" class="btn btn-addorder"><i class="fa fa-folder-open" aria-hidden="true"></i><span>Lưu và sinh hợp đồng</span></button>
                                                </a> --}}
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
                                               <!-- Large modal -->
                                               <a href="{{ route('get.customer_selecttion_update', $order->id) }}">
                                                <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn khách hàng</button>
                                               </a>
                                                {{-- @include('frontend.order.select_customer') --}}
                                           <!-- Extra Large modal modal end -->
                                            {{-- <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" disabled>Chọn Hợp Đồng</button> --}}
                                            <!-- Sau khi "Chọn Khách Hàng" hoặc "Chọn Hợp Đồng" thì nút "Chọn Liên Hệ" sẽ active -->
                                            {{-- @if (isset($customer->id) && $customer->id)
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" data-toggle="modal" data-target=".modal-xl1" >Chọn Liên Hệ</button>
                                            @include('frontend.order.select_contact')
                                            @else
                                            <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" disabled>Chọn Liên Hệ</button>
                                            @endif --}}
                                        </div>
                                        <div class="row">
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã đơn hàng:</label>
                                                    <input class="form-control" name="code_order" type="text" value="{{ old('code_order', $order->code_order ?? '') }}" id="example-datetime-local-input">
                                                    @error('code_order')
                                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('code_order') }}</small>
                                                    @enderror
                                                    {{-- <select class="custom-select custom-select-height">
                                                        <option value="KH" selected="selected">Chọn Khách Hàng</option>
                                                        <option value="HD">Chọn Hợp Đồng</option>
                                                        <option value="AddNewKH">Thêm Mới Khách Hàng</option>
                                                        {{-- <option value="">----Chọn khách hàng----</option>
                                                        @foreach ($customers ?? [] as $item)
                                                            <option value="{{ $item->id }}"
                                                                {{ ($order->code_customer ?? 0) == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                                            </option>
                                                        @endforeach --}}
                                                    {{-- </select> --}} 
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ngày đặt hàng:</label>
                                                    <input class="form-control" type="datetime-local" name="order_date" value="{{ old('order_date', $order->order_date ?? '') }}" id="example-datetime-local-input">
                                                   
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
                                                    
                                                    <input class="form-control" name="code_customer" type="text" value="{{ old('code_customer', $order->customer->id ?? '[N\A]') }}" id="example-text-input" disabled>
                                                    @error('code_customer')
                                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('code_customer') }}</small>
                                                    @enderror
                                                </div>
                                            
                                        
                                                
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tên khách hàng:</label>
                                                    <input class="form-control" name="code_customer" type="text" value="{{ old('code_customer', $order->customer->name ?? '[N\A]') }}" id="example-text-input" disabled>
                                                  
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ:</label>
                                                    <input class="form-control" type="text" name="code_customer" value="{{ old('code_customer', $order->customer->address ?? '[N\A]') }}" id="example-text-input" disabled>
                                                    
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Email:</label>
                                                    <input class="form-control" type="text" name="code_customer"value="{{ old('code_customer', $order->customer->email ?? '[N\A]') }}" id="example-text-input" disabled>
                                                   
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" type="text" name="code_customer" value="{{ old('code_customer',$order->customer->phone ?? '[N\A]') }}" id="example-text-input" disabled>
                                                   
                                                </div>
                                                
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mã số thuế:</label>
                                                    <input class="form-control" type="text" name="code_customer" value="{{ old('code_customer', $order->customer->tax_code ?? '[N\A]') }}" id="example-text-input" disabled>
                                                   
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Hình thức TT:</label>
                                                    <input class="form-control" name="payments" type="text" value="{{ old('payments', $order->payments ?? '') }}" id="example-text-input">
                                                    @error('payments')
                                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('payments') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Ghi chú:</label>
                                                    <input class="form-control" name="note" type="text" value="{{ old('note', $order->note ?? '') }}" id="example-text-input">
                                                </div>
                                            </div>
                                        
                                            <div class="col-4">
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Người giao:</label>
                                                    <select name="deliver_id" class="custom-select custom-select-height" id="">
                                                        <option value="">---Chọn người giao---</option>
                                                        @foreach ($deliver ?? [] as $order_all)
                                                        <option value="{{ $order_all->id }}"
                                                            {{ ($order->deliver_id ?? 0) == $order_all->id ? 'selected' : '' }}>{{ $order_all->name }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                @error('deliver_id')
                                                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('deliver_id') }}</small>
                                                @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tên người liên hệ:</label>
                                                    <input class="form-control" name="contact_id" type="text" value="{{ old('contact_id', $order->contact_id ?? '') }}" id="example-text-input">
                                                    @error('contact_id')
                                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('contact_id') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                                    <input class="form-control" name="phone" type="text" value="{{ old('phone', $order->phone ?? '') }}" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                                    <input class="form-control" name="guarantee" type="text" value="{{ old('guarantee', $order->guarantee ?? '') }}" id="example-text-input">
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Địa chỉ GH:</label>
                                                    <input class="form-control" name="delivery_address" type="text" value="{{ old('delivery_address', $order->delivery_address ?? '') }}" id="example-text-input">
                                                    @error('delivery_address')
                                                        <small id="emailHelp" class="form-text text-danger">{{ $errors->first('delivery_address') }}</small>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-datetime-local-input" class="col-form-label input-label">Thời gian GH:</label>
                                                    <input class="form-control" name="delivery_time" type="datetime-local" value="{{ old('delivery_time', $order->delivery_time ?? '') }}" id="example-datetime-local-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                   

  <!-- Form thông tin hàng hóa start -->
 
  <div class="col-12 mt-2">
    <div class="card">
         <!-- AddNew & OtherOptions Btn -->
       
        <div class="card-body">
            <div class="head-title-btn">
                <a href="{{ route ('get.goods_update', $order->id) }}">
                    <button type="button" class="btn btn-primary btn-addtrans mb-3" ><i class="fa fa-plus-circle" aria-hidden="true"></i></i><span>Thêm hàng hóa</span></button>
                    {{-- @include('frontend.order.form_goods')  --}}
                </a>
                </div>
            <div class="head-title-addbtn">
                
               

            </div>
            <div class="data-tables datatable-dark">
                
                <table id="dataTable3" class="text-center table-business">
                    <thead class="text-capitalize">
                        <tr>
                            <th>Thao tác</th>
                            <th>Mã hàng hóa</th>
                            <th>Tên hàng hóa</th>
                            <th>Mô tả</th>
                            <th>Xuất xứ</th>
                            <th>Hãng SX</th>
                            <th>Bảo hành</th>
                            <th>Đơn vị tính</th>
                            <th>Giá nhập</th>
                            <th>Giá xuất</th>
                            <th>Tỉ lệ vênh</th>
                            <th>Thuế</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($goods1 ?? [] as $item)
                        <tr>
                          
                            <td>
                                <ul class="d-flex justify-content-center">
                                     <li><a href="{{ route('get.goods_delete', $item->id) }}" class="text-danger"><i class="ti-trash"></i></a></li>
                                </ul>
                            </td>
                            <td>{{ $item->goods_code }} </td>
                            <td><input type="text" value="{{  $item->name }}"></td>
                            <td><input type="text" value="{{ $item->describe }}"></td>
                            <td><input type="text" value="{{ $item->origin }}"></td>
                            <td><input type="text" value="{{ $item->manufacturer }}"></td>
                            <td><input type="text" value="{{ $item->guarantee }}"></td>
                            <td><input type="text" value="{{ $item->unit->name }}"></td>
                            <td><input type="text" value="{{ $item->input_price }}"></td>
                            <td><input type="text" value="{{ $item->output_price }}"></td>
                            <td><input type="text" value="{{ $item->markup_ratio }}"></td>
                            <td><input type="text" value="{{ $item->tax }}"></td>
                            <td><input type="text" value="{{ $item->total }}"></td>
                        </tr>
                        @endforeach 
                        @foreach ($goods2 ?? [] as $item)
                        <tr>
                          
                            <td>
                                <ul class="d-flex justify-content-center">
                                     <li><a href="{{ route('get.goods_delete', $item->id) }}" class="text-danger"><i class="ti-trash"></i></a></li>
                                </ul>
                            </td>
                            <td>{{ $item->goods_code }} </td>
                            <td><input type="text" value="{{  $item->name }}"></td>
                            <td><input type="text" value="{{ $item->describe }}"></td>
                            <td><input type="text" value="{{ $item->origin }}"></td>
                            <td><input type="text" value="{{ $item->manufacturer }}"></td>
                            <td><input type="text" value="{{ $item->guarantee }}"></td>
                            <td><input type="text" value="{{ $item->unit->name}}"></td>
                            <td><input type="text" value="{{ $item->input_price }}"></td>
                            <td><input type="text" value="{{ $item->output_price }}"></td>
                            <td><input type="text" value="{{ $item->markup_ratio }}"></td>
                            <td><input type="text" value="{{ $item->tax }}"></td>
                            <td><input type="text" value="{{ $item->total }}"></td>
                        </tr>
                        @endforeach                      
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
            <span>Tiền hàng:</span><br>
            <span>Tiền thuế:</span><br>
            <span>Tiền CK:</span><br>
            <span>Tổng tiền:</span>
        </div>
        <div class="total-money">
            <span>1.900.000</span><br>
            <span>0</span><br>
            <span>0</span><br>
            <span>1.900.000</span>
        </div>
    </div>
</div>

<!-- Thống kê tổng đơn hàng end -->

<!-- Thống kê tổng đơn hàng end -->
                              
                        </div>
                    </div>
                   
                </div>
              
               

            </form>
  @stop