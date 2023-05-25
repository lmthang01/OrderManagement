@extends('backend.layouts.app_backend')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Khách hàng</h2>
        <a href="{{ route('get_admin.customer.create') }}"  class="btn btn-primary"  style="color: azure;">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Avatar</th>
                    <th>Tên khách hàng</th>
                    <th>Điện thoại</th>
                    <th>Email</th>
                    <th>List khách hàng</th>
                    <th>Người tạo</th>
                    <th>Ngày tạo</th>
                    {{-- <th>Slug</th> --}}
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers ?? [] as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>
                            <img src="{{ pare_url_file($item->avatar) }}" style="width: 60px; height: 60px; border-radius: 10px" alt="">
                        </td>  
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->phone }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->category->name ?? "[N\A]" }}</td>
                        <td>{{ $item->user_id }}</td>
                        <td>{{ $item->created_at }}</td>
                        {{-- <td>{{ $item->slug }}</td> --}}
                        <td>
                            <a href="{{ route('get_admin.customer.update', $item->id) }}" class="btn btn-info" style="padding: 5px">Edit</a>
                            {{-- <a href="#">|</a> --}}
                            <a href="{{ route('get_admin.customer.delete', $item->id) }}" class="btn btn-danger" style="padding: 5px">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
