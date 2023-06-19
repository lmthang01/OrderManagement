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
                                                <button type="submit" name="submit_form_order" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Cập nhật</span></button>
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
                                               <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" data-toggle="modal" data-target=".modal-xl">Chọn khách hàng</button>
                                               
                                                @include('frontend.order.select_customer')
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
                        
                            <!-- Form thông tin khách hàng end -->
                             
                          
                               <!-- Form thông tin hàng hóa start -->
 
  {{-- <div class="col-12 mt-2">
    <div class="card">
         <!-- AddNew & OtherOptions Btn -->
       
        <div class="card-body">
            <div class="head-title-btn">
                  
                <button type="button" class="btn btn-primary btn-addtrans mb-3" data-toggle="modal" data-target=".modal-xl2"><i class="fa fa-plus-circle" aria-hidden="true"></i></i><span>Thêm hàng hóa</span></button>
                @include('frontend.order.form_goods') 
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
                        @foreach ($goods2 ?? [] as $item)
                        <tr>
                            <form action="" method="post">
                                @csrf
                            <td>
                                <ul class="d-flex justify-content-center">
                                    <li><button type="submit" name="submit_form_table_goods" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Cập nhật</span></button></li>

                                     <li><a href="{{ route('get.goods_delete', $item->id) }}" class="text-danger"><i class="ti-trash"></i></a></li>
                                </ul>
                            </td>
                            <td>{{ $item->goods_code }} <input type="hidden" name="id2" value="{{ $item->id }}"></td>
                            <td><input name="name2" type="text" value="{{ old('name', $item->name ?? '') }}"></td>
                            <td><input name="describe2" type="text" value="{{ $item->describe }}"></td>
                            <td><input name="origin2" type="text" value="{{ $item->origin }}"></td>
                            <td><input name="manufacturer2" type="text" value="{{ $item->manufacturer }}"></td>
                            <td><input name="guarantee2" type="text" value="{{ $item->guarantee }}"></td>
                            <td><input name="describe2" type="text" value="{{ $item->describe }}"></td>
                            <td><input name="input_price2" type="text" value="{{ $item->input_price }}"></td>
                            <td><input name="output_price2" type="text" value="{{ $item->output_price }}"></td>
                            <td><input name="warping_ratio2" type="text" value="{{ $item->warping_ratio }}"></td>
                            <td><input name="tax2" type="text" value="{{ $item->tax }}"></td>
                            <td><input name="total2" type="text" value="{{ $item->total }}"></td>
                        </tr>
                        @endforeach
                    </form>

                    @foreach ($goods1 ?? [] as $item)
                    <tr>
                        <form action="" method="post">
                            @csrf
                        <td>
                            <ul class="d-flex justify-content-center">
                                <li><button type="submit" name="submit_form_table_goods" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Cập nhật</span></button></li>

                                 <li><a href="{{ route('get.goods_delete', $item->id) }}" class="text-danger"><i class="ti-trash"></i></a></li>
                            </ul>
                        </td>
                        <td>{{ $item->goods_code }} <input type="hidden" name="id1" value="{{ old('id', $order->id ?? '') }}"></td>
                        <td><input name="name1" type="text" value="{{ old('name', $item->name ?? '') }}"></td>
                        <td><input name="describe1" type="text" value="{{ $item->describe }}"></td>
                        <td><input name="origin1" type="text" value="{{ $item->origin }}"></td>
                        <td><input name="manufacturer1" type="text" value="{{ $item->manufacturer }}"></td>
                        <td><input name="guarantee1" type="text" value="{{ $item->guarantee }}"></td>
                        <td><input name="describe1" type="text" value="{{ $item->describe }}"></td>
                        <td><input name="input_price1" type="text" value="{{ $item->input_price }}"></td>
                        <td><input name="output_price1" type="text" value="{{ $item->output_price }}"></td>
                        <td><input name="warping_ratio1" type="text" value="{{ $item->warping_ratio }}"></td>
                        <td><input name="tax1" type="text" value="{{ $item->tax }}"></td>
                        <td><input name="total1" type="text" value="{{ $item->total }}"></td>
                    </tr>
                    @endforeach
                </form>
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
</div> --}}
@include('frontend.order.table_goods')

<!-- Thống kê tổng đơn hàng end -->
                              
                        </div>
                    </div>
                   
                </div>
              
               

            </form>
  @stop