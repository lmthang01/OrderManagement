<form id="contractFormUpdate" method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    @csrf
    <!-- Form nhập thông tin Khách hàng start -->
    <div class="col-12 mt-3">
        <div class="card">
            <div class="card-body">
                <div class="card-header-order">
                    <h4 class="header-title">Thông tin Khách hàng</h4>
                </div>
                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                {{-- Modal Khách hàng --}}
                    <div class="card">
                        <div class="modal fade show" id="modal-customer" style="display: none; padding-right: 17px; background: rgba(0,0,0,0.3);" data-backdrop="static">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Danh Sách Khách Hàng</h5>
                                        <button type="button" class="close" id="modal-close-button"><span>×</span></button>
                                    </div>
                                    <div class="modal-body">
                                        <!-- Bảng danh sách thông tin khách hàng start -->
                                        <div class="data-tables datatable-dark">
                                            <table id="dataTable3" class="text-center table-business">
                                                <thead class="text-capitalize">
                                                    <tr>
                                                        <th>Mã khách hàng</th>
                                                        <th>Tên khách hàng</th>
                                                        <th>Địa chỉ</th>
                                                        <th>Điện thoại</th>
                                                        <th>Email</th>
                                                        <th>Mã số thuế</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach ($customers ?? [] as $item)
                                                        <tr>
                                                            <td>{{ $item->id }}</td>
                                                            <td>{{ $item->name }}</td>
                                                            <td>{{ $item->address }}</td>
                                                            <td>{{ $item->phone }}</td>
                                                            <td>{{ $item->email }}</td>
                                                            <td>{{ $item->tax_code }}</td>
                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- Bảng danh sách thông tin khách hàng end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- Xử lý click chọn 1 khách hàng --}}
                    <script>
                        $(document).ready(function() {
                            // Lắng nghe sự kiện nhấp chuột vào hàng trong bảng
                            $('#dataTable3 tbody tr').click(function() {
                                // Lấy giá trị trong các ô dữ liệu của hàng được nhấp
                                var customerId = $(this).find('td:first').text();
                                var customerName = $(this).find('td:nth-child(2)').text();
                                var customerAddress = $(this).find('td:nth-child(3)').text();
                                var customerPhone = $(this).find('td:nth-child(4)').text();
                                var customerEmail = $(this).find('td:nth-child(5)').text();
                                var customerTaxCode = $(this).find('td:nth-child(6)').text();

                                // Hiển thị thông tin khách hàng được chọn vào các box
                                $('#customer_id').val(customerId);
                                $('#customer_name').val(customerName);
                                $('#customer_address').val(customerAddress);
                                $('#customer_phone').val(customerPhone);
                                $('#customer_email').val(customerEmail);
                                $('#customer_tax_code').val(customerTaxCode);

                                // Đồng thời ẩn modal
                                $('#modal-customer').modal('hide');
                            });

                            // Xử lý tắt bằng nút "x"
                            $('#modal-close-button').click(function() {
                                $('#modal-customer').modal('hide');
                            });
                        });
                    </script>
                    {{-- CSS để khi click "Chọn khách hàng" bảng mở ra không bị JS của dataTable tự đặt width khiến bảng bể --}}
                    <style>
                        #dataTable3 {
                            width: 100% !important;
                        }
                    </style>
                    {{-- End --}}
                {{-- End Modal Khách hàng --}}
                {{-- Modal Liên hệ --}}
                <div class="card">
                    <div class="modal fade show" id="modal-contact" style="display: none; padding-right: 17px; background: rgba(0,0,0,0.3);" data-backdrop="static">
                        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Danh Sách Liên Hệ</h5>
                                    <button type="button" class="close" id="modal-close-button-contact"><span>×</span></button>
                                </div>
                                <div class="modal-body">
                                    <!-- Bảng danh sách thông tin liên hệ start -->
                                    <div class="data-tables datatable-dark">
                                        <table id="dataTable2" class="text-center table-business">
                                            <thead class="text-capitalize">
                                                <tr>
                                                    <th>Mã liên hệ</th>
                                                    <th>Tên liên hệ</th>
                                                    <th>Chức vụ</th>
                                                    <th>Địa chỉ</th>
                                                    <th>Điện thoại</th>
                                                    <th>Email</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($contacts ?? [] as $item)
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->position->name }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->email }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- Bảng danh sách thông tin liên hệ end -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Xử lý click chọn 1 liên hệ --}}
                <script>
                    $(document).ready(function() {
                        // Lắng nghe sự kiện nhấp chuột vào hàng trong bảng
                        $('#dataTable2 tbody tr').click(function() {
                            // Lấy giá trị trong các ô dữ liệu của hàng được nhấp
                            var contactId = $(this).find('td:nth-child(1)').text();
                            var contactName = $(this).find('td:nth-child(2)').text();
                            var contactPosition = $(this).find('td:nth-child(3)').text();
                            var contactPhone = $(this).find('td:nth-child(5)').text();

                            // Hiển thị thông tin khách hàng được chọn vào các box
                            $('#contact_id').val(contactId);
                            $('#contact_name').val(contactName);
                            $('#contact_position').val(contactPosition);
                            $('#contact_phone').val(contactPhone);

                            // Đồng thời ẩn modal
                            $('#modal-contact').modal('hide');
                        });

                        // Xử lý tắt bằng nút "x"
                        $('#modal-close-button-contact').click(function() {
                            $('#modal-contact').modal('hide');
                        });
                    });
                </script>
                {{-- CSS để khi click "Chọn liên hệ" bảng mở ra không bị JS của dataTable tự đặt width khiến bảng bể --}}
                <style>
                    #dataTable2 {
                        width: 100% !important;
                    }
                </style>
                {{-- End --}}
            {{-- End Modal Liên hệ --}}
                <div class="btn-load">
                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" data-toggle="modal" data-target="#modal-customer"><i class="fa fa-plus pr-1" aria-hidden="true"></i> Chọn Khách Hàng</button>
                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" data-toggle="modal" data-target="#modal-contact"><i class="fa fa-plus pr-1" aria-hidden="true"></i> Chọn Liên Hệ</button>
                </div>
                    <div class="row">
                        <div class="col-4">
                            <div class="form-group">
                                <label for="customer_id" class="col-form-label input-label">Mã khách hàng<code>*</code>:</label>
                                <input type="text" name="customer_id" class="form-control" value="{{ old('customer_id', $contract->customer_id ?? '') }}" id="customer_id" readonly>
                                @error('customer_id')
                                    <small id="" class="form-text text-danger">{{ $errors->first('customer_id') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_name" class="col-form-label input-label">Tên khách hàng:</label>
                                <input type="text" name="customer_name" class="form-control" value="{{ old('customer_name', $contract->customer->name ?? '') }}" id="customer_name" readonly>
                                @error('customer_name')
                                    <small id="" class="form-text text-danger">{{ $errors->first('customer_name') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_address" class="col-form-label input-label">Đại chỉ:</label>
                                <input type="text" name="customer_address" class="form-control" value="{{ old('customer_address', $contract->customer->address ?? '') }}" id="customer_address" readonly>
                                @error('customer_address')
                                    <small id="" class="form-text text-danger">{{ $errors->first('customer_address') }}</small>
                                @enderror
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="form-group">
                                <label for="customer_email" class="col-form-label input-label">Email:</label>
                                <input type="text" name="customer_email" class="form-control" value="{{ old('customer_email', $contract->customer->email ?? '') }}" id="customer_email" readonly>
                                @error('customer_email')
                                    <small id="" class="form-text text-danger">{{ $errors->first('customer_email') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_phone" class="col-form-label input-label">SĐT Khách hàng:</label>
                                <input type="text" name="customer_phone" class="form-control" value="{{ old('customer_phone', $contract->customer->phone ?? '') }}" id="customer_phone" readonly>
                                @error('customer_phone')
                                    <small id="" class="form-text text-danger">{{ $errors->first('customer_phone') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="customer_tax_code" class="col-form-label input-label">Mã số thuế:</label>
                                <input type="text" name="customer_tax_code" class="form-control" value="{{ old('customer_tax_code', $contract->customer->tax_code ?? '') }}" id="customer_tax_code" readonly>
                                @error('customer_tax_code')
                                    <small id="" class="form-text text-danger">{{ $errors->first('customer_tax_code') }}</small>
                                @enderror
                            </div>
                        </div>

                        <div class="col-4">
                            <div class="row">
                                <div class="col-6 form-group">
                                    <label for="contact_id" class="col-form-label input-label">Mã đại diện<code>*</code>:</label>
                                    <input type="text" name="contact_id" class="form-control" value="{{ old('contact_id', $contract->contact_id ?? '') }}" id="contact_id" readonly>
                                    @error('contact_id')
                                        <small id="" class="form-text text-danger">{{ $errors->first('contact_id') }}</small>
                                    @enderror
                                </div>
                                <div class="col-6 form-group">
                                    <label for="contact_name" class="col-form-label input-label">Người đại diện:</label>
                                    <input type="text" name="contact_name" class="form-control" value="{{ old('contact_name', $contract->contact->name ?? '') }}" id="contact_name" readonly>
                                    @error('contact_name')
                                        <small id="" class="form-text text-danger">{{ $errors->first('contact_name') }}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="contact_position" class="col-form-label input-label">Chức vụ:</label>
                                <input type="text" name="contact_position" class="form-control" value="{{ old('contact_position', $contract->contact->position->name ?? '') }}" id="contact_position" readonly>
                                @error('contact_position')
                                    <small id="" class="form-text text-danger">{{ $errors->first('contact_position') }}</small>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="contact_phone" class="col-form-label input-label">SĐT Liên hệ:</label>
                                <input type="text" name="contact_phone" class="form-control" value="{{ old('contact_phone', $contract->contact->phone ?? '') }}" id="contact_phone" readonly>
                                @error('contact_phone')
                                    <small id="" class="form-text text-danger">{{ $errors->first('contact_phone') }}</small>
                                @enderror
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <!-- Form nhập thông tin Khách hàng end -->
    <!-- Form nhập thông tin Hợp đồng start-->
    <div class="col-12 mt-2">
        <div class="card">
            <div class="card-body">
                <div class="card-header-order">
                    <h4 class="header-title">Thông tin hợp đồng</h4>
                </div>
                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="choose_user" class="col-form-label input-label">Chủ sở hữu<code>*</code>:</label>
                            <select name="user_id" class="custom-select custom-select-height" id="choose_user" style="font-size: 14px !important;" onchange="loadUserPhone()">
                                <option value="">----Chọn chủ sở hữu----</option>
                                @foreach ($users ?? [] as $item)
                                    <option value="{{ $item->id }}" {{ ($item->id == old('user_id', $contract->user_id ?? null)) ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <small id="" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- Xử lý khi chọn Chủ sở hữu tự động load số điện thoại --}}
                        <script>
                            function loadUserPhone() {
                                var select = document.getElementById('choose_user');
                                var selectedUserId = select.value;

                                var selectedUser = {!! json_encode($users ?? []) !!}
                                    .find(function (user) {
                                        return user.id == selectedUserId;
                                    });
                                document.getElementById('user_phone').value = selectedUser ? selectedUser.phone : '';
                            }
                        </script>
                        {{-- End --}}
                        <div class="form-group">
                            <label for="contract_value" class="col-form-label input-label">Giá trị hợp đồng<code>*</code>:</label>
                            <div class="textbox-unitprice">
                                <input class="form-control custom-select-height" name="value" type="text" value="{{ old('value', $contract->value ?? '') }}" id="contract_value" style="border-radius: 3px 0 0 3px !important;">
                                <span id="unit-price-ctrvalue" class="unit-price unit-price-exp" style="border-radius: 0 3px 3px 0 !important;">0</span>
                            </div>
                            @error('value')
                                    <small id="" class="form-text text-danger">{{ $errors->first('value') }}</small>
                            @enderror
                        </div>
                        {{-- Xử lý tự động load giá trị hợp đồng --}}
                        <script>
                            $(document).ready(function() {
                              $('#contract_value').on('input', function() {
                                var inputValue = $(this).val();
                                var formattedValue = parseFloat(inputValue).toLocaleString('vi-VN'); // Định dạng giá trị số thành chuỗi với phân cách hàng nghìn
                                $('#unit-price-ctrvalue').text(formattedValue);
                              });
                            });
                        </script>
                        {{-- End --}}
                        {{-- Xử lý thời gian --}}
                        <div class="form-group">
                            <label for="start_day" class="col-form-label input-label">Ngày bắt đầu<code>*</code>:</label>
                            <input class="form-control custom-select-height" type="datetime-local" name="start_day" value="{{ old('start_day', $contract->start_day ?? '') }}" id="start_day">
                            @error('start_day')
                                <small id="" class="form-text text-danger">{{ $errors->first('start_day') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="finish_day" class="col-form-label input-label">Ngày kết thúc<code>*</code>:</label>
                            <input class="form-control custom-select-height" type="datetime-local" name="finish_day" value="{{ old('finish_day', $contract->finish_day ?? '') }}" id="finish_day">
                            @error('finish_day')
                                <small id="" class="form-text text-danger">{{ $errors->first('finish_day') }}</small>
                            @enderror
                        </div>
                        <input type="hidden" name="selected_start_day" id="selected_start_day">
                        <input type="hidden" name="selected_finish_day" id="selected_finish_day">
                        {{-- End --}}
                        <div class="form-group">
                            <label for="" class="col-form-label input-label">Trạng thái:</label>
                            <select name="status" class="custom-select custom-select-height" style="font-size: 14px !important;">
                                @foreach ($status ?? [] as $key => $item)
                                    <option value="{{ $key }}" {{ ($contract->status ?? 0) == $key ? 'selected' : '' }}>
                                        {{ $item['name'] }}</option>
                                @endforeach
                            </select>
                            @error('status')
                                <small id="" class="form-text text-danger">{{ $errors->first('status') }}</small>
                            @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="name" class="col-form-label input-label">Tên hợp đồng<code>*</code>:</label>
                            <input class="form-control custom-select-height" name="name" type="text" value="{{ old('name', $contract->name ?? '') }}" id="name">
                            @error('name')
                                <small id="" class="form-text text-danger">{{ $errors->first('name') }}</small>
                            @enderror
                        </div>
                        {{-- Xử lý loại hợp đồng --}}
                        <div class="form-group">
                            <label for="" class="col-form-label input-label">Loại hợp đồng<code>*</code>:</label>
                            <select name="contract_type" class="custom-select custom-select-height" style="font-size: 14px !important;">
                                <option value="">----Chọn loại hợp đồng----</option>
                                @foreach ($contract_types ?? [] as $item)
                                    <option value="{{ $item->id }}" {{ ($item->id == old('contract_type', $contract->contract_type_id ?? null)) ? 'selected' : '' }}>
                                        {{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('contract_type')
                                <small id="" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        {{-- End --}}
                        <div class="form-group">
                            <label for="choose_payments" class="col-form-label input-label">Hình thức thanh toán:</label>
                            <select name="payments" class="custom-select custom-select-height" id="choose_payments" style="font-size: 14px !important;">
                                <option value="">----Chọn hình thức thanh toán----</option>
                                <option value="Trả trước" {{ old('payments', $contract->payments) == "Trả trước" ? 'selected' : '' }}>Trả trước</option>
                                <option value="Trả sau" {{ old('payments', $contract->payments) == "Trả sau" ? 'selected' : '' }}>Trả sau</option>
                                <option value="Trả góp" {{ old('payments', $contract->payments) == "Trả góp" ? 'selected' : '' }}>Trả góp</option>
                                <option value="12 tháng" {{ old('payments', $contract->payments) == "12 tháng" ? 'selected' : '' }}>12 tháng</option>
                            </select>
                            @error('payments')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="choose_transportation" class="col-form-label input-label">Hình thức vận chuyển:</label>
                            <select name="transportation" class="custom-select custom-select-height" id="choose_transportation" style="font-size: 14px !important;">
                                <option value="">----Chọn hình thức vận chuyển----</option>
                                <option value="Vietnam Post" {{ old('transportation', $contract->transportation) == "Vietnam Post" ? 'selected' : '' }}>Vietnam Post</option>
                                <option value="Viettel Post" {{ old('transportation', $contract->transportation) == "Viettel Post" ? 'selected' : '' }}>Viettel Post</option>
                                <option value="J&T" {{ old('transportation', $contract->transportation) == "J&T" ? 'selected' : '' }}>J&T</option>
                                <option value="Ninja Van" {{ old('transportation', $contract->transportation) == "Ninja Van" ? 'selected' : '' }}>Ninja Van</option>
                            </select>
                            @error('transportation')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="user_phone" class="col-form-label input-label">SĐT Chủ sở hữu:</label>
                            <input class="form-control custom-select-height" name="user_phone" type="text" value="{{ old('user_phone', $contract->user->phone ?? '') }}" id="user_phone">
                            @error('user_phone')
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('user_phone') }}</small>
                             @enderror
                        </div>
                    </div>

                    <div class="col-4">
                        <div class="form-group">
                            <label for="payment_date" class="col-form-label input-label">Ngày thanh toán:</label>
                            <input class="form-control custom-select-height" type="datetime-local" name="payment_date" value="{{ old('payment_date', $contract->payment_date ?? '') }}" id="payment_date">
                            @error('payment_date')
                                <small id="" class="form-text text-danger">{{ $errors->first('payment_date') }}</small>
                            @enderror
                        </div>
                        <input type="hidden" name="selected_payment_date" id="selected_payment_date">
                        <div class="form-group">
                            <label for="choose_payment_type" class="col-form-label input-label">Loại thanh toán:</label>
                            <select name="payment_type" class="custom-select custom-select-height" id="choose_payment_type" style="font-size: 14px !important;">
                                <option value="">--Chọn loại thanh toán--</option>
                                <option value="Nhận tiền mặt" {{ old('payment_type', $contract->payment_type) == "Nhận tiền mặt" ? 'selected' : '' }}>Nhận tiền mặt</option>
                                <option value="Nhận chuyển khoản" {{ old('payment_type', $contract->payment_type) == "Nhận chuyển khoản" ? 'selected' : '' }}>Nhận chuyển khoản</option>
                            </select>
                            @error('payment_type')
                                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="percentage_value" class="col-form-label input-label">% Giá trị HĐ:</label>
                            <div class="textbox-unitprice">
                                <input class="form-control custom-select-height" name="percentage_value" type="text" value="{{ old('percentage_value', $contract->percentage_value ?? '') }}" id="percentage_value" style="border-radius: 3px 0 0 3px !important;">
                                <span class="unit-price" style="border-radius: 0 3px 3px 0 !important;">%</span>
                            </div>
                            @error('percentage_value')
                                <small id="" class="form-text text-danger">{{ $errors->first('percentage_value') }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="payment_amount" class="col-form-label input-label">Tiền thanh toán:</label>
                            <div class="textbox-unitprice">
                                <input class="form-control custom-select-height" name="payment_amount" type="text" value="{{ old('payment_amount', $contract->payment_amount ?? '') }}" id="payment_amount" style="border-radius: 3px 0 0 3px !important;">
                                <span id="unit-price-payment_amount" class="unit-price unit-price-exp" style="border-radius: 0 3px 3px 0 !important;">0</span>
                            </div>
                            @error('payment_amount')
                                <small id="" class="form-text text-danger">{{ $errors->first('payment_amount') }}</small>
                            @enderror
                        </div>
                        {{-- Xử lý tự động load dữ liệu lên ô "Tiền thanh toán" = "Giá trị HĐ" x "% Giá trị HĐ" --}}
                        <script>
                            $(document).ready(function() {
                                // Lắng nghe sự kiện khi giá trị trong ô % Giá trị HĐ thay đổi
                                $('#percentage_value').on('input', function() {
                                    var contractValue = parseFloat($('#contract_value').val()); // Lấy giá trị từ ô Giá trị hợp đồng
                                    var percentageValue = parseFloat($(this).val()); // Lấy giá trị từ ô % Giá trị HĐ
                                    var payment = contractValue * (percentageValue / 100); // Tính toán giá trị tiền thanh toán
                                    var formattedPayment = parseFloat(payment).toLocaleString('vi-VN'); // Định dạng giá trị số thành chuỗi với phân cách hàng nghìn
                                    $('#payment_amount').val(payment); // Cập nhật giá trị vào ô Tiền thanh toán và giới hạn số lẻ thành 2 chữ số
                                    $('#unit-price-payment_amount').text(formattedPayment); // Đồng thời cập nhật vào ô nổi bật nối sau
                                });
                                // Xử lý tự load tiền thanh toán khi nhập trực tiếp vào ô tiền thanh toán
                                $('#payment_amount').on('input', function() {
                                    var inputValue = $(this).val();
                                    var formattedValue = parseFloat(inputValue).toLocaleString('vi-VN');
                                    var contractValue = parseFloat($('#contract_value').val());
                                    var percentageValue = inputValue / contractValue * 100;
                                    $('#percentage_value').val(percentageValue);
                                    $('#unit-price-payment_amount').text(formattedValue);
                                });
                            });
                        </script>
                        {{-- End --}}
                        {{-- <div class="form-group">
                            <label for="choose_user_revenue" class="col-form-label input-label">Doanh số tính cho:</label>
                            <select name="user_id" class="custom-select custom-select-height" id="choose_user_revenue" style="font-size: 14px !important;">
                                <option value="">---- Chọn ----</option>
                                @foreach ($users ?? [] as $item)
                                    <option value="{{ $item->id }}"
                                        {{ ($user->user_id ?? 0) == $item->id ? 'selected' : '' }}>{{ $item->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('user_id')
                                <small id="emailHelp" class="form-text text-danger">{{ $errors->first('user_id') }}</small>
                            @enderror
                        </div> --}}
                        <div class="form-group">
                            <label for="contract_note" class="col-form-label input-label">Ghi chú:</label>
                            <input class="form-control custom-select-height" name="note" type="text" value="{{ old('note', $contract->note ?? '') }}" id="contract_note">
                            @error('note')
                                <small id="" class="form-text text-danger">{{ $errors->first('note') }}</small>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Form nhập thông tin Hợp đồng end -->
</form>
