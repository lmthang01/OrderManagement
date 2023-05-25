<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Models\UserHasType;
use App\Models\UserType;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('userType')->orderByDesc('id')->paginate(20); 
        $viewData = [
            'users' => $users
        ];
        return view('backend.user.index', $viewData);
    }

    public function create()
    {
        $usersType = UserType::all();
        return view('backend.user.create', compact('usersType'));
    }

    public function store(UserRequest $request)
    {
        try {

            $data = $request->except('_token', 'avatar', 'user_type'); 
            $data['created_at'] = Carbon::now();
            $data['password'] = bcrypt(Carbon::now()); // Mã hóa password, vì tạo trường password không được để trống bên databases
            $data['status'] = 1;

            if($request->avatar){
                $file = upload_image('avatar');
                if(isset($file['code']) && $file['code'] == 1){
                    $data['avatar'] = $file['name'];
                }
            }

            // dd($request->all());

            $user = User::create($data);

            // Sau khi thêm user -> check type user là gì
            if ($user) {
                $this->insertOrUpdateHasType($user, $request->user_type);
            }

            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            Log::error("ERROR => UserController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get_admin.user.create');
        }
        return redirect()->route('get_admin.user.index');
    }

    /*
        Kiểm tra khi user thêm vào thuộc type nào
        Nếu đã có type trước đây tiến hàng cập nhật
        Ngược lại thì insert type vào csdl
    */
    protected function insertOrUpdateHasType($user, $typeID){

        $check = UserHasType::where('user_id', $user->id)->first();
        if($check){
            $check->user_type_id = $typeID;
            $check->updated_at = Carbon::now();
            $check->save();
        }else{
            DB::table('user_has_types')->insert([
                'user_type_id' => $typeID,
                'created_at' => Carbon::now(),
                'user_id' => $user->id
            ]);
        }
    }

    public function edit($id)
    {

        $usersType = UserType::all();
        $user = User::findOrFail($id);
        return view('backend.user.update', compact('user', 'usersType')); 
    }

    public function update(UserRequest $request, $id)
    {
        try {
            $data = $request->except('_token', 'avatar', 'user_type');
            $data['updated_at'] = Carbon::now();

            // dd($request->all());
            /* Nếu có name = avatar gửi lên request và có kết quả trả về "code" */
            if ($request->avatar) {
                $file = upload_image('avatar');
                if (isset($file['code']) && $file['code'] == 1) {
                    $data['avatar'] = $file['name'];
                }
            }

            $update = User::find($id)->update($data);
            if($update){
                $user = User::find($id);
                $this->insertOrUpdateHasType($user, $request->user_type);
            }

            toastr()->success('Cập nhật thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            Log::error("ERROR => UserController@update => " . $exception->getMessage());
            toastr()->error('Cập nhật thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get_admin.user.update', $id);
        }
        return redirect()->route('get_admin.user.index');
    }

    public function delete(Request $request, $id)
    {
        try {

            $user = User::findOrFail($id);
            if($user){
                UserHasType::where('user_id', $id)->delete();
                $user->delete();
            }

            toastr()->success('Xóa thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            toastr()->error('Xóa thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => UserController@delete => " . $exception->getMessage());
        }
        return redirect()->route('get_admin.user.index');
    }
}
