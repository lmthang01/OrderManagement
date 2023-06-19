
<div class="modal fade bd-example-modal-lg modal-xl2">
    <div class="modal-dialog modal-lg modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hàng hóa</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                 <form method="post"  >
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
                                            <h4 class="header-title header-title-main"></h4>
                                            <div class="btn-group-head-order">
                                                <button type="submit" name="submit_form_goods" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                                <button type="reset" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Nhập lại</span></button>
                                            </div>
                                        </div>
                                        <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                        
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="example-text-input"  class="col-form-label input-label">Mã hàng hóa:</label>
                                                    <input class="form-control" name="goods_code" type="text"  id="example-text-input"
                                                 @foreach ($goods ?? [] as $item)   value="{{ old('goods_code', $item->goods_code ?? '') }}" @endforeach>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input"  class="col-form-label input-label">Tên hàng hóa:</label>
                                                    <input class="form-control" name="name" type="text"  id="example-text-input"
                                                  @foreach ($goods ?? [] as $item)   value="{{ old('name', $item->name ?? '') }}" @endforeach>
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
                                                  @foreach ($goods ?? [] as $item)   value="{{ old('manufacturer', $item->manufacturer ?? '') }}" @endforeach>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Xuất xứ:</label>
                                                    <input class="form-control" name="origin" type="text" id="example-text-input"
                                                  @foreach ($goods ?? [] as $item)   value="{{ old('origin', $item->origin ?? '') }}" @endforeach>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                                    <input class="form-control" name="guarantee" type="text"id="example-text-input" 
                                                  @foreach ($goods ?? [] as $item)   value="{{ old('guarantee', $item->guarantee ?? '') }}" @endforeach>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Mô tả:</label>
                                                    <input class="form-control" name="describe" type="text" id="example-text-input"
                                                  @foreach ($goods ?? [] as $item)   value="{{ old('describe', $item->describe ?? '') }}" @endforeach>
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
                                                      @foreach ($goods ?? [] as $item)   value="{{ old('input_price', $item->input_price ?? '') }}" @endforeach>
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="warping_ratio" type="text" id="example-text-input"
                                                       @foreach ($goods ?? [] as $item)   value="{{ old('warping_ratio', $item->warping_ratio ?? '') }}" @endforeach>
                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="output_price" type="text" id="example-text-input"
                                                      @foreach ($goods ?? [] as $item)   value="{{ old('output_price', $item->output_price ?? '') }}" @endforeach>
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="tax" type="text" id="example-text-input"
                                                      @foreach ($goods ?? [] as $item)   value="{{ old('tax', $item->tax ?? '') }}" @endforeach>

                                                        <span class="unit-price">%</span>
                                                    </div>
                                                </div>
                                                <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
                                                <div class="form-group">
                                                    <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                                                    <div class="textbox-unitprice">
                                                        <input class="form-control" name="total" type="text" id="example-text-input"
                                                      @foreach ($goods ?? [] as $item)   value="{{ old('total', $item->total ?? '') }}" @endforeach>
                                                        <span class="unit-price">0</span>
                                                    </div>
                                                </div>
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
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        
        </div>
    </div>
</div>
</div>