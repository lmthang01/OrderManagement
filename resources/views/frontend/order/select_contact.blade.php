{{-- 

<div class="modal fade bd-example-modal-lg modal-xl1">
    <div class="modal-dialog modal-lg modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Liên hệ</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
            </div>
            <div class="modal-body">
                
                       
                <div class="col-12 mt-2">
                    <div class="card">
                        <div class="card-body">
                        
                            <div class="data-tables datatable-dark">
                                <table id="dataTable" class="text-center table-business">
                                    <thead class="text-capitalize">
                                        <tr>
                                            <th>Thao tác</th>
                                            <th>Người liên hệ</th>
                                            <th>Khách hàng</th>
                                            <th>Chức vụ</th>
                                            <th>Email</th>
                                            <th>Địa chỉ liên hệ</th>
                                            <th>Giới tính</th>
                                            <th>Số điện thoại</th>
                                            <th>Ngày sinh</th>
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($contacts ?? [] as $item)
                                        <tr>
                                            <td>
                                                <ul class="d-flex justify-content-center">
                                                    <button class="btn  btn-outline-primary"><li class="mr-2"><a href="{{ route('get.form_order_contact', $item->id) }}"
                                                            class="text-primary"><i class=""
                                                                aria-hidden="true"></i>Chọn</a></li></button>
                                   
                                                </ul>
                                            </td>
                                            <td>{{ $item->name }}</td>
                                            <td><a href="{{ route('get.contact_customer_detail', $item->customer->id) }}" >
                                                {{ $item->customer->name }}
                                            </a></td>
                                            <td>{{ $item->position->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->address }}</td>
                                            <td>{{ $item->gender }}</td>
                                            <td>{{ $item->tel }}</td>                                                
                                            <td>{{ $item->date }}</td>
                                           
                                            
                                        </tr>
                                        @endforeach
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
            </div>
        </div>
    </div>
</div>
       --}}