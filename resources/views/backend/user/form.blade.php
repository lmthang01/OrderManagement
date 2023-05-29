<form method="POST" action="" autocomplete="off" enctype="multipart/form-data">
    <div class="row">
        <div class="col-md-8">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Tên user <span style="color: red">*</span></label>
                <input type="text" name="name" placeholder="Nguyễn Văn A" class="form-control"
                    value="{{ old('name', $user->name ?? '') }}">
                @error('name')
                    <small id="" class="form-text text-danger">{{ $errors->first('name') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email <span style="color: red">*</span></label>
                <input type="text" name="email" placeholder="nva@gmail.com" class="form-control"
                    value="{{ old('name', $user->email ?? '') }}">
                @error('email')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('email') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Số điện thoại <span style="color: red">*</span></label>
                <input type="number" name="phone" placeholder="0869 . . . " class="form-control"
                    value="{{ old('name', $user->phone ?? '') }}">
                @error('phone')
                    <small id="emailHelp" class="form-text text-danger">{{ $errors->first('phone') }}</small>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Hình ảnh</label>
                <input type="file" class="form-control" name="avatar">
                @if (isset($user->avatar) && $user->avatar)
                    <img src="{{ pare_url_file($user->avatar) }}"
                        style="width: 60px; height: 60px; border-radius: 10px; margin-top: 10px" alt="">
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Lưu dữ liệu</button>
        </div>
        <div class="col-md-3">
            <div class="form-group">
                <label for="exampleInputEmail1">User Type <span style="color: red">*</span></label>
                <select name="user_type" class="form-control" id="">
                    @foreach ($usersType ?? [] as $item)
                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Trạng thái</label>
                <select name="status" class="form-control" id="">
                    <option value="-1" {{ ($user->status ?? -1) == -1 ? "selected" : "" }}>Tạm dừng</option>
                    <option value="1" {{ ($user->status ?? 1) == 1 ? "selected" : "" }}>Chờ kích hoạt</option>
                    <option value="2" {{ ($user->status ?? 1) == 2 ? "selected" : "" }}>Hoạt động</option>
                </select>
            </div>
        </div>
    </div>
</form>
