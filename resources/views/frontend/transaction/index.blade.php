@extends('frontend.layouts.business_transaction')
@section('content')
    <div class="main-content-inner">
        <div class="row">
            <!-- Data table start -->
            <div class="col-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <div class="head-title-addbtn">
                            <h4 class="header-title">Giao dịch</h4>
                            <!-- AddNew & OtherOptions Btn -->
                            <div class="head-title-btn">
                                <a href="{{ route('get.transaction_create') }}">
                                    <button type="button" class="btn btn-primary btn-addtrans mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i></i><span>Thêm mới</span></button>
                                </a>
                            </div>
                        </div>
                        <div class="data-tables datatable-dark">
                            <table id="dataTable3" class="text-center table-business">
                                <thead class="text-capitalize">
                                    <tr>
                                        <th>Tên giao dịch</th>
                                        <th>Mô tả</th>
                                        <th>Người phụ trách</th>
                                        <th>Khách hàng</th>
                                        <th>Loại giao dịch</th>
                                        <th>Người liên hệ</th>
                                        <th>Thời gian thực hiện</th>
                                        <th>Trạng thái</th>
                                        <th>Kết quả</th>
                                        <th>Ưu tiên</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($transactions ?? [] as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td> {{-- style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis;" --}}
                                            <td>{{ $item->user->name ?? '[N\A]' }}</td>
                                            <td>{{ $item->customer->name ?? '[N\A]' }}</td>
                                            <td>{{ $item->transaction_type }}</td>
                                            <td>{{ $item->contact->name ?? '[N\A]' }}</td>
                                            <td style="white-space: pre-line;">{{ $item->start_day }}<br>{{ $item->deadline_date }}<br>{{ $item->finish_day }}</td>
                                            <td>
                                                <span
                                                    class="{{ $item->getStatus($item->status)['class'] ?? 'badge badge-light' }}">
                                                    {{ $item->getStatus($item->status)['name'] ?? 'Mới' }}
                                                </span>
                                            </td>
                                            <td>{{ $item->result }}</td>
                                            <td>{{ $item->priority }}</td>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <li class="mr-2"><a href="{{ route('get.transaction_detail', $item->id) }}"
                                                            class="text-primary"><i class="fa fa-info-circle"
                                                                aria-hidden="true"></i></a></li>
                                                    <li class="mr-2"><a href="{{ route('get.transaction_update', $item->id) }}"
                                                            class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                    <li><a href="{{ route('get.transaction_delete', $item->id) }}"
                                                            class="text-danger"><i class="ti-trash"></i></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Data table end -->
        </div>
    </div>
@stop
