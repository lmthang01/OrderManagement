<form method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-6">
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
                <textarea name="description" id="transaction_des" class="form-control" cols="30" rows="2">{{ old('description', $transaction->description ?? '') }}</textarea>
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
                <label for="start_day" class="col-form-label input-label">Ngày bắt đầu<code>*</code>:</label>
                <input class="form-control" type="datetime-local" name="start_day" value="{{ old('start_day') }}" id="start_day">
            </div>
            <div class="form-group">
                <label for="deadline_date" class="col-form-label input-label">Hạn hoàn thành<code>*</code>:</label>
                <input class="form-control" type="datetime-local" name="deadline_date" value="{{ old('deadline_date') }}" id="deadline_date">
            </div>
            <div class="form-group">
                <label for="finish_day" class="col-form-label input-label">Ngày hoàn thành:</label>
                <input class="form-control" type="datetime-local" name="finish_day" value="{{ old('finish_day') }}" id="finish_day">
            </div>

        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="choose_customer" class="input-label">Loại giao dịch<span style="color: red">*</span>:</label>
                <select name="transtypes_id" class="custom-select custom-select-height" id="choose_customer">
                    <option value="">----Chọn loại giao dịch----</option>
                    <option value="1" {{ old('transtypes_id') == 1 ? 'selected' : '' }}>Giao dịch bán hàng</option>
                    <option value="2" {{ old('transtypes_id') == 2 ? 'selected' : '' }}>Giao dịch cung cấp dịch vụ</option>
                    <option value="3" {{ old('transtypes_id') == 3 ? 'selected' : '' }}>Giao dịch hợp tác đối tác</option>
                    <option value="4" {{ old('transtypes_id') == 4 ? 'selected' : '' }}>Giao dịch mua sắm</option>
                    <option value="5" {{ old('transtypes_id') == 5 ? 'selected' : '' }}>Giao dịch tài chính</option>
                </select>
                @error('transtypes_id')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('transtypes_id') }}</small>
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
                <label for="choose_customer" class="input-label">Mức ưu tiên:</label>
                <select name="status" class="custom-select custom-select-height" id="choose_customer">
                    <option value="">----Chọn mức ưu tiên----</option>
                    <option value="1" {{ old('status') == 1 ? 'selected' : '' }}>1</option>
                    <option value="2" {{ old('status') == 2 ? 'selected' : '' }}>2</option>
                    <option value="3" {{ old('status') == 3 ? 'selected' : '' }}>3</option>
                    <option value="4" {{ old('status') == 4 ? 'selected' : '' }}>4</option>
                    <option value="5" {{ old('status') == 5 ? 'selected' : '' }}>5</option>
                </select>
                @error('status')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('status') }}</small>
                 @enderror
            </div>
            <div class="form-group">
                <label for="transaction_address" class="input-label">Địa chỉ giao dịch:</label>
                <textarea name="address" id="transaction_address" class="form-control" cols="30" rows="2">{{ old('address', $transaction->transaction_address ?? '') }}</textarea>
                @error('transaction_address')
                    <small id="" class="form-text text-danger">{{ $errors->first('transaction_address') }}</small>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="transaction_doc" class="input-label">Tài liệu giao dịch:</label>
                <input type="file" class="form-control" name="document">
            </div> --}}
        </div>
    </div>
    <div class="form-group btn-group-savetrans">
        <button type="submit" class="btn btn-primary btn-savetrans mt-3"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
    </div>
</form>
