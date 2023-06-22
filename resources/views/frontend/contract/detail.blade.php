@extends('frontend.layouts.business_contract')
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <div class="col-lg-12 col-ml-12">
                <div class="row">
                    <!-- Tiêu đề -->
                    <div class="col-12 mt-5">
                        <div class="card card-header-main">
                            <div class="card-body">
                                <div class="card-header-order">
                                    <h4 class="header-title header-title-main">Chi tiết hợp đồng</h4>
                                    <div class="btn-group-head-order">
                                        <a href="{{ route('get.contract_update', $contract->id) }}">
                                            <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-edit"></i></i><span>Sửa</span></button>
                                        </a>
                                        <a href="#">
                                            <button type="button" class="btn btn-addorder"><i class="fa fa-print" aria-hidden="true"></i><span>Xuất file PDF</span></button>
                                        </a>
                                        <a href="{{ route('get.contract_index') }}">
                                            <button type="button" class="btn btn-addorder btn-back"><i class="fa fa-chevron-left" aria-hidden="true"></i><span>Trở về</span></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                    <!-- Form thông tin start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4">
                                        <div class="row form-group detail-frame">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Mã hợp đồng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->id ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Tên hợp đồng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->name ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Loại hợp đồng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->contract_type }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Chủ sở hữu:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Ngày bắt đầu:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->start_day ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Ngày kết thúc:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->finish_day ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Người đại diện:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->contact->name ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Chức vụ:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->contact->position->name ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>SĐT đại diện:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->contact->phone ?? '[N/A]' }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Ghi chú:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->note }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Hình thức thanh toán:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract->payments }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Trạng thái:</strong></label>
                                            </div>
                                            <div class="col-sm-7 pt-2">
                                                <p class="input-label {{ $contract->getStatus($contract->status)['class'] ?? 'badge badge-light' }}">{{ $contract->getStatus($contract->status)['name'] ?? '[N\A]' }}</p>
                                            </div>
                                        </div>
                                        {{-- <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Địa chỉ giao hàng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ $contract-> }}</p>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <div class="col-4">
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Thuế:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label"></p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Phí vận chuyển:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label"></p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Giá trị hợp đồng:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ number_format($contract->value, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Đã thanh toán:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ number_format($contract->payment_amount, 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Nợ:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">{{ number_format(floatval($contract->value) - floatval($contract->payments), 0, ',', '.') }}</p>
                                            </div>
                                        </div>
                                        <div class="row form-group detail-frame-right">
                                            <div class="col-sm-5">
                                                <label class="col-form-label input-label"><strong>Giá nhập vào:</strong></label>
                                            </div>
                                            <div class="col-sm-7">
                                                <p class="col-form-label input-label">...</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form thông tin end -->
                    <!-- Form thông tin khách hàng start -->
                    <div class="col-12 mt-2">
                        <div class="card">
                            <div class="card-body">
                                <div class="head-title-addbtn">
                                    <h4 class="header-title">Khách hàng</h4>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable3" class="text-center table-business">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Mã khách hàng</th>
                                                <th>Tên khách hàng</th>
                                                <th>Điện thoại</th>
                                                <th>Địa chỉ</th>
                                                <th>Mã số thuế</th>
                                                <th>Trạng thái</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($customer ?? [] as $item)
                                                @if ($contract->customer_id == $item->id)    {{-- Kiểm tra điều kiện id khách hàng tương ứng với hợp đồng --}}
                                                    <tr>
                                                        <td>{{ $item->id }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>{{ $item->phone }}</td>
                                                        <td>{{ $item->address }}</td>
                                                        <td>{{ $item->tax_code }}</td>
                                                        <td>
                                                            <span
                                                                class="{{ $item->getStatus($item->status)['class'] ?? 'badge badge-light' }}">
                                                                {{ $item->getStatus($item->status)['name'] ?? 'Mới' }}
                                                            </span>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form thông tin khách hàng end -->
                </div>
            </div>
        </div>
    </div>
@stop
