<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerRequest;
use App\Models\Category;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class CustomerController extends Controller
{
    public function index()
    {
        $customer = Customer::with('category:id,name')->orderByDesc('id')->paginate(20); // Phân trang 20 dòng
        $viewData = [
            'customer' => $customer
        ];
        // $viewData = [];
        return view('backend.customer.index', $viewData);
    }

    public function create()
    {
        $categories = Category::all(); // Hiểm thị dữ liệu của List khách hàng ở trang thêm mới khách hàng
        return view('backend.customer.create', compact('categories'));
    }

    public function store(CustomerRequest $request)
    {
        // dd($request->all());
        try {

            $data = $request->except('_token', 'avatar'); // Lấy dữ liệu từ $request gửi lên trừ _token và avatar
            $data['slug'] = Str::slug($request->name);
            $data['created_at'] = Carbon::now();

            if($request->avatar){
                $file = upload_image('avatar');
                if(isset($file['code']) && $file['code'] == 1){
                    $data['avatar'] = $file['name'];
                }
            }

            $customer = Customer::create($data);

            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            Log::error("ERROR => CustomerController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get_admin.customer.create');
        }
        return redirect()->route('get_admin.customer.index');
    }

    public function edit($id){

        $customer = Customer::findOrFail($id);
        $categories = Category::all();
        return view('backend.customer.update', compact('customer', 'categories')); // compact(): Tạo mảng với giá trị 'customer'
    }

    public function update(CustomerRequest $request, $id){
        try {
            $data = $request->except('_token', 'avatar');
            $data['slug'] = Str::slug($request->name);
            $data['updated_at'] = Carbon::now();

            // dd($request->all());
            if($request->avatar){
                $file = upload_image('avatar');
                if(isset($file['code']) && $file['code'] == 1){
                    $data['avatar'] = $file['name'];
                }
            }

            Customer::find($id)->update($data);
            toastr()->success('Cập nhật thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            Log::error("ERROR => CustomerController@update => ". $exception->getMessage());
            toastr()->error('Cập nhật thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get_admin.customer.update', $id);
        }
        return redirect()->route('get_admin.customer.index');
    }

    public function delete(Request $request, $id){
        try {
            $customer = Customer::findOrFail($id);
            if($customer) $customer->delete();
            toastr()->success('Xóa thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            toastr()->error('Xóa thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => CategoryController@delete => ". $exception->getMessage());
        }
        return redirect()->route('get_admin.customer.index');
    }
}
