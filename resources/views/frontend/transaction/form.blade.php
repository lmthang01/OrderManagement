<form method="POST" action="{{ route('get.transaction_store') }}" autocomplete="off" enctype="multipart/form-data">
    <div class="row">
        <div class="col-sm-6">
            @csrf
            {{-- Tên giao dịch --}}
            <div class="form-group">
                <label for="transaction_name" class="input-label">Tên giao dịch<span style="color: red">*</span>:</label>
                <input type="text" name="name" class="form-control" value="{{ old('name', $transaction->name ?? '') }}" id="transaction_name">
                @error('name')
                    <small id="" class="form-text text-danger">{{ $errors->first('name') }}</small>
                @enderror
            </div>
            {{-- Mô tả giao dịch --}}
            <div class="form-group">
                <label for="transaction_des" class="input-label">Mô tả:</label>
                <textarea name="description" id="transaction_des" class="form-control" cols="30" rows="2">{{ old('description', $customer->description ?? '') }}</textarea>
                @error('description')
                    <small id="" class="form-text text-danger">{{ $errors->first('description') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="choose_customer" class="input-label">Khách hàng<span style="color: red">*</span>:</label>
                <select name="customer_id" class="custom-select custom-select-height" id="choose_customer">
                    <option value="">----Chọn khách hàng----</option>
                    @foreach ($customers ?? [] as $item)
                        <option value="{{ $item->id }}"
                            {{ ($customer->customer_id ?? 0) == $item->id ? 'selected' : '' }}>{{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('customer_id')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('category_id') }}</small>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="exampleInputEmail1" class="input-label">Liên hệ:</label>
                <select name="category_id" class="custom-select custom-select-height" id="">
                    <option value="">----Chọn liên hệ----</option>
                    @foreach ($contact ?? [] as $item)
                        <option value="{{ $item->id }}"
                            {{ ($contact->contact_id ?? 0) == $item->id ? 'selected' : '' }}>{{ $item->name }}
                        </option>
                    @endforeach
                </select>
                @error('category_id')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('category_id') }}</small>
                @enderror
            </div> --}}
            <div class="form-group">
                <label for="create_day" class="col-form-label input-label">Ngày tạo:</label>
                <input class="form-control" type="datetime-local" value="" id="create_day">
            </div>
            <div class="form-group">
                <label for="start_day" class="col-form-label input-label">Ngày bắt đầu:</label>
                <input class="form-control" type="datetime-local" value="" id="start_day">
            </div>
            <div class="form-group">
                <label for="finish_day" class="col-form-label input-label">Ngày hoàn thành:</label>
                <input class="form-control" type="datetime-local" value="" id="finish_day">
            </div>

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="choose_customer" class="input-label">Loại giao dịch<span style="color: red">*</span>:</label>
                <select name="transtypes_id" class="custom-select custom-select-height" id="choose_customer">
                    <option value="">----Chọn loại giao dịch----</option>
                    <option value="1">Đăng ký dịch vụ</option>
                    <option value="2">Đào tạo nghiệp vụ</option>
                    <option value="3">Vận chuyển</option>
                    <option value="4">Đóng hàng</option>
                </select>
                @error('transtypes_id')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('category_id') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="input-label">Trạng thái:</label>
                <select name="status" class="custom-select custom-select-height" >
                    @foreach ($status ?? [] as $key => $item)
                        <option value="{{ $key }}" {{ ($transaction->status ?? 0) == $key ? 'selected' : '' }}>
                            {{ $item['name'] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="result_trans" class="input-label">Kết quả:</label>
                <input type="text" id="result_trans" name="result" class="form-control"
                    value="{{ old('result', $transaction->result ?? '') }}">
                @error('result')
                    <small id="" class="form-text text-danger">{{ $errors->first('result') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="" class="input-label">Mức ưu tiên:</label>
                <select name="status" class="custom-select custom-select-height" >
                    <option value="0">--Chọn mức ưu tiên--</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                </select>
            </div>
            <div class="form-group">
                <label for="transaction_address" class="input-label">Địa chỉ giao dịch:</label>
                <textarea name="address" id="transaction_address" class="form-control" cols="30" rows="2">{{ old('address', $transaction->transaction_address ?? '') }}</textarea>
                @error('transaction_address')
                    <small id="" class="form-text text-danger">{{ $errors->first('transaction_address') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="transaction_doc" class="input-label">Tài liệu giao dịch:</label>
                <input type="file" class="form-control" name="document">
            </div>
            <div class="form-group btn-group-savetrans">
                <button type="submit" class="btn btn-primary btn-savetrans mt-3"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                <button onclick="window.location.href='{{ route('get.transaction_index') }}'" type="button" class="btn btn-primary btn-savetrans mt-3"><i class="fa fa-times-circle" aria-hidden="true"></i><span>Hủy</span></button>
            </div>
        </div>
    </div>
</form>
