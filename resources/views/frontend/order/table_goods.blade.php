  <!-- Form thông tin hàng hóa start -->
 
  <div class="col-12 mt-2">
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
                            <td><input type="text" value="{{ $item->describe }}"></td>
                            <td><input type="text" value="{{ $item->input_price }}"></td>
                            <td><input type="text" value="{{ $item->output_price }}"></td>
                            <td><input type="text" value="{{ $item->warping_ratio }}"></td>
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