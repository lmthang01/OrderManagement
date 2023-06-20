@extends('frontend.layouts.app_frontend')
@section('content')
<div class="col-12">
    <div class="card">
        <div class="card-body">                
            <div class="data-tables datatable-dark">
                <table id="dataTable2" class="text-center">
                    <thead class="text-capitalize">
                        <tr>
                            <th>Thao tác</th>
                            <th>#</th>
                            <th>Tên khách hàng</th>
                            <th>Điện thoại</th>
                            <th>Email</th>
                            <th>Trạng thái</th>
                            <th>List khách hàng</th>
                            <th>Người tạo</th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
               
                        @foreach ($customer ?? [] as $item)
                            <tr> <form action="" method="post" >
                                @csrf
                                <td>
                                    <ul class="d-flex justify-content-center">
                                        <button type="submit"  class="btn  btn-outline-primary" >   <li class="mr-2">
                                                <i class=""
                                                    aria-hidden="true" ></i>Chọn</li></button>
                       
                                    </ul>
                                </td>
                               
                                <td><input name="code_customer" type="text" value="{{  $item->id }}"  ></td>
                                </form>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>
                                    <span
                                        class="{{ $item->getStatus($item->status)['class'] ?? 'badge badge-light' }}">
                                        {{ $item->getStatus($item->status)['name'] ?? 'Mới' }}
                                    </span>
                                </td>
                                <td>{{ $item->category->name ?? '[N\A]' }}</td>
                                <td>{{ $item->user->name ?? '[N\A]' }}</td>
                               
                                
                            
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                
            </div>
        </div>
    </div>
</div>
@stop