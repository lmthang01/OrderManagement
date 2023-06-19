
<div class="row">
    <div class="col-4">
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Mã đơn hàng<span style="color: red">*</span></label>
            <input type="hidden" name="id" @foreach ($orders ?? [] as $item) value="{{ old('id', $item->id ?? '') }}"  @endforeach >
            <input type="hidden" name="test" value="1">
            <input class="form-control" name="code_order" type="text" @foreach ($orders ?? [] as $item) value="{{ old('code_order', $item->code_order ?? '') }}"  @endforeach id="example-datetime-local-input">
            @error('code_order')
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('code_order') }}</small>
            @enderror
            {{-- <select class="custom-select custom-select-height">
                <option value="KH" selected="selected">Chọn Khách Hàng</option>
                <option value="HD">Chọn Hợp Đồng</option>
                <option value="AddNewKH">Thêm Mới Khách Hàng</option>
                {{-- <option value="">----Chọn khách hàng----</option>
                @foreach ($customers ?? [] as $order)
                    <option value="{{ $order->id }}"
                        {{ ($order->code_customer ?? 0) == $order->id ? 'selected' : '' }}>{{ $order->name }}
                    </option>
                @endforeach --}}
            {{-- </select> --}} 
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Ngày đặt hàng:</label>
            <input class="form-control" type="datetime-local" name="order_date" @foreach ($orders ?? [] as $item) value="{{ old('order_date', $item->order_date ?? '') }}"  @endforeach id="example-datetime-local-input">
           
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
            <label for="example-text-input" class="col-form-label input-label">Mã khách hàng</label>
             
            <input class="form-control"  name="code_customer"  type="text" @foreach ($orders ?? [] as $item) value="{{ old('code_customer', $item->customer->id  ?? '[N\A]')}}" @endforeach  id="example-text-input" disabled>
                
        </div>
       

        
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Tên khách hàng:</label>
            <input class="form-control" name="code_customer" type="text" @foreach ($orders ?? [] as $item) value="{{ old('code_customer', $item->customer->name ?? '[N\A]') }}" @endforeach  id="example-text-input" disabled>
          
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Địa chỉ:</label>
            <input class="form-control" type="text" name="code_customer" @foreach ($orders ?? [] as $item) value="{{ old('code_customer', $item->customer->address ?? '[N\A]') }}"  @endforeach id="example-text-input" disabled>
            
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Email:</label>
            <input class="form-control" type="text" name="code_customer" @foreach ($orders ?? [] as $item) value="{{ old('code_customer', $item->customer->email ?? '[N\A]') }}"  @endforeach id="example-text-input" disabled>
           
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
            <input class="form-control" type="text" name="code_customer" @foreach ($orders ?? [] as $item) value="{{ old('code_customer', $item->customer->phone ?? '[N\A]') }}"  @endforeach id="example-text-input" disabled>
           
        </div>
        
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Mã số thuế:</label>
            <input class="form-control" type="text" name="code_customer" @foreach ($orders ?? [] as $item) value="{{ old('code_customer', $item->customer->tax_code ?? '[N\A]') }}"  @endforeach id="example-text-input" disabled>
           
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Hình thức TT<span style="color: red">*</span></label>
            <input class="form-control" name="payments" type="text" @foreach ($orders ?? [] as $item) value="{{ old('payments', $item->payments ?? '') }}"  @endforeach id="example-text-input">
            @error('payments')
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('payments') }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Ghi chú:</label>
            <input class="form-control" name="note" type="text" @foreach ($orders ?? [] as $item) value="{{ old('note', $item->note ?? '') }}"  @endforeach id="example-text-input">
        </div>
    </div>

    <div class="col-4">
        <div class="form-group">   
            <label for="example-search-input" class="col-form-label input-label">Người giao<span style="color: red">*</span></label>
                <select name="deliver_id" class="custom-select custom-select-height" id="">
                    <option value="">---Chọn người giao---</option>
                    @foreach ($deliver ?? [] as $order_all)
                    <option value="{{ $order_all->id }}"
                        {{ ($order_all->deliver_id ?? 0) == $order_all->id ? 'selected' : '' }}>{{ $order_all->name }}
                    </option>
                    @endforeach
                </select>
            @error('deliver_id')
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('deliver_id') }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Tên người liên hệ<span style="color: red">*</span></label>
            <input class="form-control" name="contact_id" type="text" @foreach ($orders ?? [] as $item) value="{{ old('contact_id', $item->contact_id ?? '') }}"  @endforeach id="example-text-input">
            @error('contact_id')
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('contact_id') }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Số điện thoại</label>
            <input class="form-control" name="phone" type="text" @foreach ($orders ?? [] as $item)  value="{{ old('phone', $item->phone ?? '') }}"  @endforeach id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
            <input class="form-control" name="guarantee" type="text" @foreach ($orders ?? [] as $item) value="{{ old('guarantee', $item->guarantee ?? '') }}"  @endforeach id="example-text-input">
        </div>
        <div class="form-group">
            <label for="example-text-input" class="col-form-label input-label">Địa chỉ giao hàng<span style="color: red">*</span></label>
            <input class="form-control" name="delivery_address" type="text" @foreach ($orders ?? [] as $item) value="{{ old('delivery_address', $item->delivery_address ?? '') }}"  @endforeach id="example-text-input">
            @error('delivery_address')
                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('delivery_address') }}</small>
            @enderror
        </div>
        <div class="form-group">
            <label for="example-datetime-local-input" class="col-form-label input-label">Thời gian GH:</label>
            <input class="form-control" name="delivery_time" type="datetime-local" @foreach ($orders ?? [] as $item) value="{{ old('delivery_time', $item->delivery_time ?? '') }}"  @endforeach id="example-datetime-local-input">
        </div>
    </div>
</div>
