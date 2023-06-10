<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Order;
use App\Models\Goods;
use App\Models\Contact;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class OrderController extends Controller
{
    public function detail(){

        return view('frontend.order.detail');
    }

    public function index(){
        $customers = Customer::all(); 
        $contacts = Contact::all();

        $orders = Order::with('customer:id,name', 'contact:id,name');
        $orders = $orders->orderByDesc('id')->paginate(20); // Phân trang 20 dòng
        $viewData = [
            'orders' => $orders

        ];
        return view('frontend.order.index', $viewData);
    }



///// HÀNG HÓA

    public function goods_create(){
      
        //  compact('goods', )
       return view('frontend.order.form_goods',);

    }

    public function goods_store(OrderRequest $request)
    {
        // dd($request->all());
        try {
            $data = $request->except('_token','avatar');
            $data =[
                'goods_code' => $request->goods_code,
                'name' => $request->name,
                'unit' => $request->unit,
                'manufacturer' => $request->manufacturer,
                'origin' => $request->origin,
                'gender' => $request->gender,
                'describe' => $request->describe,
                'input_price' => $request->input_price,
                'output_price' => $request->output_price,
                'warping_ratio' => $request->warping_ratio,
                'tax' => $request->tax
        ]; 
        if ($request->avatar) {
            $file = upload_image('avatar');
            if (isset($file['code']) && $file['code'] == 1) {
                $data['avatar'] = $file['name'];
            }
        }
            $data['created_at'] = Carbon::now();
         

            $goods = Goods::create($data);
            
        } catch (\Exception $exception) {
            Log::error("ERROR => OrderController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');
          
    }


    public function goods_delete(Request $request, $id)
    {
        try {
            $goods = Goods::findOrFail($id);
            if ($goods) $goods->delete();
        } catch (\Exception $exception) {
            toastr()->error('Xóa thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => OrderController@goods_delete => " . $exception->getMessage());
        }
        toastr()->success('Xóa thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.order_create');
    }


//// ĐƠN HÀNG

    public function create(){
        $goods = Goods::all(); 
        //  
       return view('frontend.order.create',compact('goods', ));

    }

    public function store(OrderRequest $request)
    {
        // dd($request->all());
        try {
            $data = $request->except('_token','avatar');
            $data =[
                'goods_code' => $request->goods_code,
                'name' => $request->name,
                'unit' => $request->unit,
                'manufacturer' => $request->manufacturer,
                'origin' => $request->origin,
                'gender' => $request->gender,
                'describe' => $request->describe,
                'input_price' => $request->input_price,
                'output_price' => $request->output_price,
                'warping_ratio' => $request->warping_ratio,
                'tax' => $request->tax
        ]; 
        if ($request->avatar) {
            $file = upload_image('avatar');
            if (isset($file['code']) && $file['code'] == 1) {
                $data['avatar'] = $file['name'];
            }
        }
            $data['created_at'] = Carbon::now();
         

            $goods = Goods::create($data);
            
        } catch (\Exception $exception) {
            Log::error("ERROR => OrderController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');
          
    }

    public function update(){
        return view('frontend.order.update');
    }
}
