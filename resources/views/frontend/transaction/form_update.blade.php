<form method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <div class="col-12 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="header-title">Thông tin giao dịch</h4>
                </div>
                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
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
                            <label for="user_name" class="input-label">Người phụ trách:</label>
                            <input type="text" name="user_name" class="form-control" value="{{ old('user_name', $transaction->user->name ?? '') }}" id="user_name" disabled>
                            @error('user_name')
                                <small id="" class="form-text text-danger">{{ $errors->first('user_name') }}</small>
                            @enderror
                        </div>
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
                            <select name="transaction_type" class="custom-select custom-select-height" id="choose_customer">
                                <option value="">----Chọn loại giao dịch----</option>
                                <option value="1" {{ old('transaction_type', $transaction->transaction_type ?? '') == 1 ? 'selected' : '' }}>Giao dịch bán hàng</option>
                                <option value="2" {{ old('transaction_type', $transaction->transaction_type ?? '') == 2 ? 'selected' : '' }}>Giao dịch cung cấp dịch vụ</option>
                                <option value="3" {{ old('transaction_type', $transaction->transaction_type ?? '') == 3 ? 'selected' : '' }}>Giao dịch hợp tác đối tác</option>
                                <option value="4" {{ old('transaction_type', $transaction->transaction_type ?? '') == 4 ? 'selected' : '' }}>Giao dịch mua sắm</option>
                                <option value="5" {{ old('transaction_type', $transaction->transaction_type ?? '') == 5 ? 'selected' : '' }}>Giao dịch tài chính</option>
                            </select>
                            @error('transaction_type')
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('transaction_type') }}</small>
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
                            <select name="priority" class="custom-select custom-select-height" id="choose_customer">
                                <option value="">----Chọn mức ưu tiên----</option>
                                <option value="1" {{ old('priority') == 1 ? 'selected' : '' }}>1</option>
                                <option value="2" {{ old('priority') == 2 ? 'selected' : '' }}>2</option>
                                <option value="3" {{ old('priority') == 3 ? 'selected' : '' }}>3</option>
                                <option value="4" {{ old('priority') == 4 ? 'selected' : '' }}>4</option>
                                <option value="5" {{ old('priority') == 5 ? 'selected' : '' }}>5</option>
                            </select>
                            @error('priority')
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('priority') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="transaction_address" class="input-label">Địa chỉ giao dịch:</label>
                            <textarea name="address" id="transaction_address" class="form-control" cols="30" rows="2">{{ old('address', $transaction->transaction_address ?? '') }}</textarea>
                            @error('transaction_address')
                                <small id="" class="form-text text-danger">{{ $errors->first('transaction_address') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="input-label" for="">Tài liệu giao dịch:</label>
                            <input type="file" class="form-control" name="document">

                            @if (isset($transaction->document) && $transaction->document)
                                <a href="{{ pare_url_file($transaction->document) }}" target="_blank">{{ $transaction->document }}</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-title">
                    <h4 class="header-title">Thông tin khách hàng</h4>
                </div>
                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="choose_customer_swap" class="input-label">Thay đổi Khách hàng:</label>
                            <select name="choose_customer_swap" class="custom-select custom-select-height" id="choose_customer_swap" onchange="updateCustomerInfo()">
                                <option value="">----Chọn khách hàng----</option>
                                @foreach ($customers ?? [] as $item)
                                    <option value="{{ $item->id }}"
                                        {{ ($customer->choose_customer_swap ?? 0) == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('choose_customer_swap')
                                <small id="" class="form-text text-danger">{{ $errors->first('category_id') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_id" class="input-label">Mã khách hàng:</label>
                            <input type="text" name="customer_id" class="form-control" value="{{ old('customer_id', $transaction->customer->id ?? '') }}" id="customer_id" disabled>
                            @error('customer_id')
                                <small id="" class="form-text text-danger">{{ $errors->first('customer_id') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_name" class="input-label">Tên khách hàng:</label>
                            <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name', $transaction->customer->name ?? '') }}" id="customer_name" disabled>
                            @error('customer_name')
                                <small id="" class="form-text text-danger">{{ $errors->first('customer_name') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_address" class="input-label">Địa chỉ khách hàng:</label>
                            <input type="text" name="customer_address" class="form-control" value="{{ old('customer_address', $transaction->customer->address ?? '') }}" id="customer_address" disabled>
                            @error('customer_address')
                                <small id="" class="form-text text-danger">{{ $errors->first('customer_address') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_phone" class="input-label">Số điện thoại khách hàng:</label>
                            <input type="text" name="customer_phone" class="form-control" value="{{ old('customer_phone', $transaction->customer->phone ?? '') }}" id="customer_phone" disabled>
                            @error('customer_phone')
                                <small id="" class="form-text text-danger">{{ $errors->first('customer_phone') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_email" class="input-label">Email khách hàng:</label>
                            <input type="text" name="customer_email" class="form-control" value="{{ old('customer_email', $transaction->customer->email ?? '') }}" id="customer_email" disabled>
                            @error('customer_email')
                                <small id="" class="form-text text-danger">{{ $errors->first('customer_email') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="customer_tax_code" class="input-label">Mã số thuế:</label>
                            <input type="text" name="customer_tax_code" class="form-control" value="{{ old('customer_tax_code', $transaction->customer->tax_code ?? '') }}" id="customer_tax_code" disabled>
                            @error('customer_tax_code')
                                <small id="" class="form-text text-danger">{{ $errors->first('customer_tax_code') }}</small>
                            @enderror
                        </div>
                        <script>
                            function updateCustomerInfo() {
                                var select = document.getElementById('choose_customer_swap');
                                var selectedCustomerId = select.value;

                                var selectedCustomer = {!! json_encode($customers ?? []) !!}
                                    .find(function (customer) {
                                        return customer.id == selectedCustomerId;
                                    });

                                document.getElementById('customer_id').value = selectedCustomer ? selectedCustomer.id : '';
                                document.getElementById('customer_name').value = selectedCustomer ? selectedCustomer.name : '';
                                document.getElementById('customer_address').value = selectedCustomer ? selectedCustomer.address : '';
                                document.getElementById('customer_phone').value = selectedCustomer ? selectedCustomer.phone : '';
                                document.getElementById('customer_email').value = selectedCustomer ? selectedCustomer.email : '';
                                document.getElementById('customer_tax_code').value = selectedCustomer ? selectedCustomer.tax_code : '';
                            }
                        </script>
                    </div>
                    <div class="col-sm-6">
                        {{-- Sau khi có Contact đổi $transaction->customer->name thành $transaction->contact->name cho trường đầu tiên, các trường sau tương tự --}}
                        <div class="form-group">
                            <label for="contact_name" class="input-label">Tên liên hệ:</label>
                            <input type="text" name="contact_name" class="form-control" value="{{ old('contact_name', $transaction->customer->name ?? '') }}" id="contact_name" disabled>
                            @error('contact_name')
                                <small id="" class="form-text text-danger">{{ $errors->first('contact_name') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact_role" class="input-label">Chức vụ liên hệ:</label>
                            <input type="text" name="contact_role" class="form-control" value="{{ old('contact_role', $transaction->customer->address ?? '') }}" id="contact_role" disabled>
                            @error('contact_role')
                                <small id="" class="form-text text-danger">{{ $errors->first('contact_role') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="contact_phone" class="input-label">Số điện thoại liên hệ:</label>
                            <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $transaction->customer->phone ?? '') }}" id="contact_phone" disabled>
                            @error('contact_phone')
                                <small id="" class="form-text text-danger">{{ $errors->first('contact_phone') }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group btn-group-savetrans">
                    <button type="submit" class="btn btn-primary btn-savetrans mt-3"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                </div>
            </div>
        </div>
    </div>
</form>
