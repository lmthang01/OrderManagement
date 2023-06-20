@extends('frontend.layouts.business_contract')
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-12 mt-5">
                        <div class="card card-header-main">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title header-title-main">Thêm mới hợp đồng bán ra</h4>
                                    <div class="btn-group-head-order">
                                        <button type="button" class="btn btn-addorder"><i class="fa fa-floppy-o" aria-hidden="true"></i><span>Lưu</span></button>
                                        <a href="../Contract/contract.php">
                                            <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                            var contactName = $(this).find('td:nth-child(2)').text();
                                            var contactPosition = $(this).find('td:nth-child(3)').text();
                                            var contactPhone = $(this).find('td:nth-child(5)').text();

                                            // Hiển thị thông tin khách hàng được chọn vào các box
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
                                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" data-toggle="modal" data-target="#modal-customer">Chọn Khách Hàng</button>
                                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3" data-toggle="modal" data-target="#modal-contact">Chọn Liên Hệ</button>
                                </div>
                                <div class="row">
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="customer_id" class="col-form-label input-label">Mã khách hàng:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="customer_id" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_name" class="col-form-label input-label">Tên khách hàng:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="customer_name" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_address_office" class="col-form-label input-label">Địa chỉ:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="customer_address_office" disabled>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="customer_email" class="col-form-label input-label">Email:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="customer_email" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_phone" class="col-form-label input-label">Số điện thoại KH:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="customer_phone" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_tax_code" class="col-form-label input-label">Mã số thuế:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="customer_tax_code" disabled>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="contact_name" class="col-form-label input-label">Người đại diện:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="contact_name" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact_position" class="col-form-label input-label">Chức vụ:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="contact_position" disabled>
                                        </div>
                                        <div class="form-group">
                                            <label for="contact_phone" class="col-form-label input-label">Số điện thoại LH:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="contact_phone" disabled>
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
                                            <label for="example-text-input" class="col-form-label input-label">Chủ sở hữu:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn chủ sở hữu--</option>
                                                <option value="">Hà Trung Nghĩa</option>
                                                <option value="">Lê Minh Thắng</option>
                                                <option value="">Huỳnh Nhật Trường</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Giá trị hợp đồng:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price unit-price-exp">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày bắt đầu:</label>
                                            <input class="form-control custom-select-height" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày kết thúc:</label>
                                            <input class="form-control custom-select-height" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày hiệu lực:</label>
                                            <input class="form-control custom-select-height" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Trạng thái:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn trạng thái--</option>
                                                <option value="">Chưa thực hiện</option>
                                                <option value="">Đã đặt cọc</option>
                                                <option value="">Đang thực hiện</option>
                                                <option value="">Thanh toán hoàn tất</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tên hợp đồng:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Loại hợp đồng:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn loại hợp đồng--</option>
                                                <option value="">Đơn hàng bán lẻ</option>
                                                <option value="">Đơn hàng đặt tiệc</option>
                                                <option value="">Thiết kế Web</option>
                                                <option value="">Đăng ký gói dịch vụ</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Hình thức thanh toán:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn hình thức thanh toán--</option>
                                                <option value="">Trả trước</option>
                                                <option value="">Trả sau</option>
                                                <option value="">Trả góp</option>
                                                <option value="">12 tháng</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Hình thức vận chuyển:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn hình thức vận chuyển--</option>
                                                <option value="">Vietnam Post</option>
                                                <option value="">Viettel Post</option>
                                                <option value="">J&T</option>
                                                <option value="">Ninja Van</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Số điện thoại:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>

                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="example-datetime-local-input" class="col-form-label input-label">Ngày thanh toán:</label>
                                            <input class="form-control custom-select-height" type="datetime-local" value="" id="example-datetime-local-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Loại thanh toán:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn loại thanh toán--</option>
                                                <option value="">Nhận tiền mặt</option>
                                                <option value="">Nhận chuyển khoản</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">% giá trị HĐ:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tiền thanh toán:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price unit-price-exp">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Doanh số tính cho:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn--</option>
                                                <option value="">Hà Trung Nghĩa</option>
                                                <option value="">Lê Minh Thắng</option>
                                                <option value="">Huỳnh Nhật Trường</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Ghi chú:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form nhập thông tin Hợp đồng end -->
                    <!-- Form nhập thông tin Hàng hóa start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title">Thông tin hàng hóa</h4>
                                </div>
                                <p class="text-muted font-14">Vui lòng điền thông tin cần thiết vào form bên dưới. Các trường có dấu <code>*</code> là bắt buộc phải điền.</p>
                                <div class="btn-load">
                                    <button type="button" class="btn btn-xs btn-outline-dark mb-3 mt-3 mr-3">Chọn Hàng Hóa</button>
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Mã hàng hóa:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tên hàng hóa:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Đơn vị:</label>
                                            <select class="custom-select custom-select-height">
                                                <option selected="selected">--Chọn đơn vị--</option>
                                                <option value="">Gam</option>
                                                <option value="">Mét</option>
                                                <option value="">Chiếc</option>
                                                <option value="">Bộ</option>
                                                <option value="">Gói</option>
                                                <option value="">Hộp</option>
                                                <option value="">Thùng</option>
                                                <option value="">Lít</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Hãng SX:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Xuất xứ:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Bảo hành:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Mô tả:</label>
                                            <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                        </div>
                                        <div class="form-group">
                                            <label for="example-file-input" class="col-form-label input-label">Hình ảnh:</label>
                                            <input class="form-control custom-select-height" type="file" value="" id="example-file-input">
                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Đơn giá nhập:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tỷ lệ vênh:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price">%</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Đơn giá xuất:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price">0</span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Thuế:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price">%</span>
                                            </div>
                                        </div>
                                        <!-- Sau khi tính toán thuế và tất cả tính toán liên quan -->
                                        <div class="form-group">
                                            <label for="example-text-input" class="col-form-label input-label">Tổng tiền đơn hàng:</label>
                                            <div class="textbox-unitprice">
                                                <input class="form-control custom-select-height" type="text" value="" id="example-text-input">
                                                <span class="unit-price">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group-head-order">
                                    <button type="button" class="btn btn-addorder"><i class="fa fa-plus-circle" aria-hidden="true"></i><span>Thêm Hàng Hóa</span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form nhập thông tin Hàng hóa end -->
                    <!-- Bảng thông tin hàng hóa start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="head-title-addbtn">
                                    <h4 class="header-title">Hàng hóa</h4>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable" class="text-center table-business">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Mã hàng hóa</th>
                                                <th>Tên hàng hóa</th>
                                                <th>Mô tả</th>
                                                <th>Xuất xứ</th>
                                                <th>Hãng SX</th>
                                                <th>Bảo hành</th>
                                                <th>Đơn vị tính</th>
                                                <th>Giá nhập</th>
                                                <th>Giá xuất</th>
                                                <th>Thuế</th>
                                                <th>Thành tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
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
                                <span>Tổng tiền hàng:</span><br>
                                <span>Tiền chiết khấu:</span><br>
                                <span>Tiền thuế:</span><br>
                                <span>Tổng tiền:</span><br>
                                <span>Lợi nhuận:</span>
                            </div>
                            <div class="total-money">
                                <span>35.200.000</span><br>
                                <span>11.000.000</span><br>
                                <span>11.000.000</span><br>
                                <span>11.000.000</span><br>
                                <span>24.200.000</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
