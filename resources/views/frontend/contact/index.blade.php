@extends('frontend.layouts.app_frontend')
@section('content')
            <!-- page title area end -->
            <div class="main-content-inner">
                <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                            <div class="head-title-addbtn">
                                    <h4 class="header-title">Liên hệ với khách hàng</h4>
                                    <!-- AddNew & OtherOptions Btn -->
                                    <div class="head-title-btn">
                                        <a href="{{ route('get.contact_create') }}">
                                            <button type="button" class="btn btn-primary btn-addtrans mb-3"><i class="fa fa-plus-circle" aria-hidden="true"></i></i><span>Thêm mới</span></button>
                                        </a>
                                    </div>
                                </div>
                                <div class="data-tables datatable-dark">
                                    <table id="dataTable" class="text-center table-business">
                                        <thead class="text-capitalize">
                                            <tr>
                                                <th>Người liên hệ</th>
                                                <th>Khách hàng</th>
                                                <th>Chức vụ</th>
                                                <th>Email</th>
                                                <th>Địa chỉ liên hệ</th>
                                                <th>Giới tính</th>
                                                <th>Số điện thoại</th>
                                                <th>Ngày sinh</th>
                                                <th>Thao tác</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contacts ?? [] as $item)
                                            <tr>
                                                <td>{{ $item->name }}</td>
                                                <td><a href="#" >
                                                   {{ $item->customer_id }}
                                                </a></td>
                                                <td>{{ $item->position }}</td>
                                                <td>{{ $item->email }}</td>
                                                <td>{{ $item->address }}</td>
                                                <td>{{ $item->gender }}</td>
                                                <td>{{ $item->tel }}</td>                                                
                                                <td>{{ $item->date }}</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="{{ route ('get.contact_update') }}" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                <td></td>
                                            </tr>
                                            @endforeach
                                            {{-- <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                 <td></td>     
                                            </tr> --}}
                                            {{-- <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                    <td></td>
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                   <td></td>
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                  <td></td>    
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                 <td></td> 
                                            </tr>
                                            <tr>
                                                <td>Huỳnh Nhật Trường</td>
                                                <td><a href="../../View/Lienhe/customerdetails.php">Hà Trung Nghĩa</a></td>
                                                <td>Kĩ thuật</td>
                                                <td>truong@gmail.com</td>
                                                <td>Cần Thơ</td>
                                                <td>Nam</td>
                                                <td>0988222666</td>                                                
                                                <td>01/01/2001</td>
                                                <td>
                                                    <ul class="d-flex justify-content-center">
                                                        <li class="mr-2"><a href="../Contact/infoContact.php" class="text-primary"><i class="fa fa-info-circle" aria-hidden="true"></i></a></li>
                                                        <li class="mr-2"><a href="../Contact/updateContact.php" class="text-primary"><i class="fa fa-edit"></i></a></li>
                                                        <li><a href="#" class="text-danger"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </td>                                                
                                                   <td></td>
                                            </tr> --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                      {{-- <!-- Dark table start -->
                      <div class="col-12 mt-5">
                        <div class="card">
                            
                        </div>
                    </div>
                    <!-- Dark table end --> --}}
                </div>
            </div>
        {{-- </div> --}}
@stop