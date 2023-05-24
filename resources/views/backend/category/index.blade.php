@extends('backend.layouts.app_backend')
@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h2>Danh mục (List khách hàng)</h2>
        <a href="{{ route('get_admin.category.create') }}">Thêm mới</a>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tên</th>
                    <th>Avatar</th>
                    <th>Mô tả</th>
                    <th>Ngày tạo</th>
                    <th>Slug</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($category ?? [] as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->avatar }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->slug }}</td>
                        <td>
                            <a href="{{ route('get_admin.category.update', $item->id) }}">Edit</a>
                            <a href="#">|</a>
                            <a href="{{ route('get_admin.category.delete', $item->id) }}">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@stop
