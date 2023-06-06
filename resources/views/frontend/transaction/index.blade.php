@extends('frontend.layouts.app_frontend')
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
                                        <th>Đánh giá</th>
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

                                    @foreach ($transaction ?? [] as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->description }}</td>

                                        </tr>
                                    @endforeach

                                    <tr>
                                        <td>May túi xách</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>Hà Trung Nghĩa</td>
                                        <td>Huỳnh Nhật Trường</td>
                                        <td>Đào tạo</td>
                                        <td>Lê Minh Thắng</td>
                                        <td>
                                            <div>
                                                <span id="createDate">24/05/2023 16:00</span><br>
                                                <span id="startDate">24/05/2023 16:00</span><br>
                                                <span id="endDate">25/05/2023 16:00</span>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-primary">pending</span></td>
                                        <td>...</td>
                                        <td>1</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-2"><a href="../Transaction/infoTransaction.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                <li class="mr-2"><a href="../Transaction/editTransaction.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>May túi xách</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>Hà Trung Nghĩa</td>
                                        <td>Huỳnh Nhật Trường</td>
                                        <td>Đào tạo</td>
                                        <td>Lê Minh Thắng</td>
                                        <td>
                                            <div>
                                                <span id="createDate">24/05/2023 16:00</span><br>
                                                <span id="startDate">24/05/2023 16:00</span><br>
                                                <span id="endDate">25/05/2023 16:00</span>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-primary">pending</span></td>
                                        <td>...</td>
                                        <td>1</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-2"><a href="../Transaction/infoTransaction.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                <li class="mr-2"><a href="../Transaction/editTransaction.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>May túi xách</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>Hà Trung Nghĩa</td>
                                        <td>Huỳnh Nhật Trường</td>
                                        <td>Đào tạo</td>
                                        <td>Lê Minh Thắng</td>
                                        <td>
                                            <div>
                                                <span id="createDate">24/05/2023 16:00</span><br>
                                                <span id="startDate">24/05/2023 16:00</span><br>
                                                <span id="endDate">25/05/2023 16:00</span>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-primary">pending</span></td>
                                        <td>...</td>
                                        <td>1</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-2"><a href="../Transaction/infoTransaction.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                <li class="mr-2"><a href="../Transaction/editTransaction.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>May túi xách</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>Hà Trung Nghĩa</td>
                                        <td>Huỳnh Nhật Trường</td>
                                        <td>Đào tạo</td>
                                        <td>Lê Minh Thắng</td>
                                        <td>
                                            <div>
                                                <span id="createDate">24/05/2023 16:00</span><br>
                                                <span id="startDate">24/05/2023 16:00</span><br>
                                                <span id="endDate">25/05/2023 16:00</span>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-primary">pending</span></td>
                                        <td>...</td>
                                        <td>1</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-2"><a href="../Transaction/infoTransaction.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                <li class="mr-2"><a href="../Transaction/editTransaction.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>May túi xách</td>
                                        <td>...</td>
                                        <td>...</td>
                                        <td>Hà Trung Nghĩa</td>
                                        <td>Huỳnh Nhật Trường</td>
                                        <td>Đào tạo</td>
                                        <td>Lê Minh Thắng</td>
                                        <td>
                                            <div>
                                                <span id="createDate">24/05/2023 16:00</span><br>
                                                <span id="startDate">24/05/2023 16:00</span><br>
                                                <span id="endDate">25/05/2023 16:00</span>
                                            </div>
                                        </td>
                                        <td><span class="status-p bg-primary">pending</span></td>
                                        <td>...</td>
                                        <td>1</td>
                                        <td>
                                            <ul class="d-flex justify-content-center">
                                                <li class="mr-2"><a href="../Transaction/infoTransaction.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                <li class="mr-2"><a href="../Transaction/editTransaction.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                            </ul>
                                        </td>
                                    </tr>
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
