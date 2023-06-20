<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\GoodsRequest;
use App\Http\Requests\SelectCustomerRequest;
use App\Models\Order;
use App\Models\Goods;
use App\Models\Contact;
use App\Models\Position;
use App\Models\Customer;
use App\Models\Deliver;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{
    // Chi tiết đơn hàng 
    public function detail($id){
        $unit = Unit::all();
        $orders = Order::findOrFail($id);
        $delivers = Deliver::all();
        $goods= Goods::with('unit:id,name',);
        $goods = Goods::where('order_id', $id)->get();
        $customers = Customer::all(); 

        return view('frontend.order.detail', compact('orders','goods','unit'));
    }

    // Giao diện trang chủ đơn hàng
    public function index(Request $request){
        $goods = Goods::where('order_id', '0')->delete();      
        $orders= Order::where('code_order','')->delete();
        $orders= Order::where('test',0)->delete();
        $customers = Customer::all(); 
        $contacts = Contact::all();
        $delivers = Deliver::all();
        $units = Unit::all();
        $orders = Order::with('customer:id,name', 'contact:id,name', 'deliver:id,name');
        $orders = $orders->orderByDesc('id')->paginate(20); // Phân trang 20 dòng
        $viewData = [
            'orders' => $orders
        ];
        return view('frontend.order.index', $viewData);
    }

/////                   //////   
///// CHỌN KHÁCH HÀNG
/////                   //////   

    // chọn khách hàng (tạo đơn hàng)
    public function customer_selecttion_create(){

        $customer = Customer::all();
        return view('frontend.order.select_customer_update',compact('customer'));
    }

    // lưu khách hàng vào csdl order( tạo đơn hàng)
    public function customer_selecttion_store(SelectCustomerRequest $request){
        try {
                
            $data = $request->except('_token');           
            $data=['code_customer' => $request->code_customer,];
            $data['created_at'] = Carbon::now();
            $data['user_id'] = Auth::user()->id; // Hiển thị name người tạo đơn hàng
                
            if((Order::where('code_customer'.'><','0')) && (Order::where('code_order','')) ){
              Order::where('code_order','')->update($data);  
            }
            
            Order::create($data); 
            
        }catch (\Exception $exception) {
            Log::error("ERROR => OrderController@customer_selecttion_store=> " . $exception->getMessage());
            toastr()->error('Thêm thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.customer_selecttion_create');
        }
            toastr()->success('Thêm thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');

    }


    // chọn khách hàng (cập nhật đơn hàng)
    public function customer_selecttion_update($id){
        $order = Order::findOrFail($id);
    
        $customer = Customer::all();
        return view('frontend.order.select_customer_update',compact('order','customer'));
    }

    // Câp nhật khách hàng vào csdl order (Cập nhật đơn hàng)
    public function customer_selecttion_store_update(SelectCustomerRequest $request, $id){
        try {
                
            $data = $request->except('_token');           
            $data=['code_customer' => $request->code_customer,];
            $data['created_at'] = Carbon::now();
            $data['user_id'] = Auth::user()->id; // Hiển thị name người tạo đơn hàng

            Order::find($id)->update($data);  
            
        }catch (\Exception $exception) {
            Log::error("ERROR => OrderController@customer_selecttion_store_update=> " . $exception->getMessage());
            toastr()->error('Thêm thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.customer_selecttion_update', $id);
        }
            toastr()->success('Thêm thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_update', $id) ;

    }

/////           ////////
///// HÀNG HÓA  ////////
/////           ////////

    // Hiển thị giao diện thêm hàng hóa
    public function goods_create(){
        $unit = Unit::all();
        $goods1 = Goods::all();
       return view('frontend.order.form_goods',compact('unit', 'goods1'));

    }

    // Thêm hàng hóa vào csdl goods
    public function goods_store(GoodsRequest $request){
        try {
                
            $data = $request->except('_token','avatar');
            $data =[
                'goods_code' => $request->goods_code,
                'name' => $request->name,
                'unit_id' => $request->unit_id,
                'manufacturer' => $request->manufacturer,
                'origin' => $request->origin,
                'gender' => $request->gender,
                'describe' => $request->describe,
                'input_price' => $request->input_price,
                'output_price' => $request->input_price + $request->input_price * $request-> warping_ratio / 100,
                // 'output_price' => $request->output_price,
                'warping_ratio' => $request->warping_ratio,
                'tax' => $request->tax,
                'total' => ($request->input_price + $request->input_price * $request-> warping_ratio / 100) * $request->tax
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
            Log::error("ERROR => OrderController@goods_store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.goods_create');
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');
    }

    // Giao diện thêm hàng hóa theo id đơn hàng
    public function goods_update($id){
        $unit = Unit::all();
        $goods1 = Goods::all();
        return view('frontend.order.form_goods_update',compact('unit', 'goods1'));
    }

    // Thêm hàng hóa theo tương ứng id đơn hàng
    public function goods_store_update(GoodsRequest $request,$id){
        try {
                
            $data = $request->except('_token','avatar');
            $data =[
                'goods_code' => $request->goods_code,
                'name' => $request->name,
                'unit_id' => $request->unit_id,
                'manufacturer' => $request->manufacturer,
                'origin' => $request->origin,
                'gender' => $request->gender,
                'describe' => $request->describe,
                'input_price' => $request->input_price,
                'output_price' => $request->input_price + $request->input_price * $request-> warping_ratio / 100,
                // 'output_price' => $request->output_price,
                'warping_ratio' => $request->warping_ratio,
                'tax' => $request->tax,
                'total' => ($request->input_price + $request->input_price * $request-> warping_ratio / 100) * $request->tax
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
            Log::error("ERROR => OrderController@goods_store_update => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.goods_update', $id);
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_update', $id);
    }

    // Xóa hàng hóa 
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

/////           ////////
///// ĐƠN HÀNG  ////////
/////           ////////

    // Hiển thị giao diện tạo đơn hàng
    public function create(){
        $orders= Order::where('code_order', '')->get(); 
        $deliver = Deliver::all();
        $order_all = Order::all();
        $customer= Customer::all();
        $unit= Unit::all();
        $goods1 = Goods::with('unit::id,name');
        $goods1 = Goods::where('order_id', '0')->get();
 
        $contacts = Contact::all();
 
       return view('frontend.order.create',compact('goods1', 'order_all','customer','contacts','orders', 'deliver','unit' ));

    }

    // Lưu đơn hàng mới vào csdl đơn hàng
    public function store_order(OrderRequest $request)
    {        
          try {
            $data_goods = $request->except('_token',);
            $data1 = $request->except('_token');
            $data1 =[
                
                'code_order' => $request->code_order,                
                'deliver_id' => $request->deliver_id,
                'contact_id' => $request->contact_id,
                'phone' => $request->phone,
                'guarantee' => $request->guarantee,
                'delivery_address' => $request->delivery_address,
                'delivery_time' => $request->delivery_time,
                'payments' => $request->payments,
                'order_date' => $request->order_date,
                'note' => $request->note,                
            ]; 
            $data2=['test'=>$request->test,];
            $data_goods =[
                'order_id' => $request->id,                
            ];  
            $order = Order::where('code_order','')->update($data1);  
             Order::where('id', Order::max('id'))->update($data2);  
            $goods = Goods::where('order_id','0')->update($data_goods);
         
       
        } catch (\Exception $exception) {
            Log::error("ERROR => OrderController@store_order => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_create');
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            if($request->code_order == ''){
            return redirect()->route('get.order_create');
            }if($request->code_order != ''){
                return redirect()->route('get.order_index');

            }   
    }

    // Hiển thị trang cập nhật đơn hàng
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        $unit= Unit::all();
        $goods1 = Goods::where('order_id', $id)->get();
        $customer = Customer::all();
        $deliver = Deliver::all();
        // $goods1 = Goods::with('unit::id,name');
        $goods2 = Goods::where('order_id', '0')->get();

        return view('frontend.order.update', compact('order','goods1','customer', 'deliver','goods2', 'unit')); 
    }

    // Cập nhật dữ liệu vào csdl đơn hàng
    public function update(OrderRequest $request, $id)
    {
          try {
            $data_goods = $request->except('_token',);
            $data1 = $request->except('_token');
            $data1 =[
                
                'code_order' => $request->code_order,                
                'deliver_id' => $request->deliver_id,
                'contact_id' => $request->contact_id,
                'phone' => $request->phone,
                'guarantee' => $request->guarantee,
                'delivery_address' => $request->delivery_address,
                'delivery_time' => $request->delivery_time,
                'payments' => $request->payments,
                'order_date' => $request->order_date,
                'note' => $request->note,                
            ]; 
           
            $data_goods =[
                'order_id' => $request->id,                
            ];  


            $order = Order::find($id)->update($data1); 
             
            $goods = Goods::where('order_id','0')->update($data_goods);
         
      
        } catch (\Exception $exception) {
            Log::error("ERROR => OrderController@update => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.order_update', $id);
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);            
            return redirect()->route('get.order_index');

    }

    // Xóa đơn hàng 
    public function delete(Request $request, $id)
    {
        try {
            $orders = Order::findOrFail($id);
            if ($orders) $orders->delete();
        } catch (\Exception $exception) {
            toastr()->error('Xóa thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => OrderController@delete => " . $exception->getMessage());
        }
        toastr()->success('Xóa thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.order_index');
    }
}
