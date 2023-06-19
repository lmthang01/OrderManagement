<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Http\Requests\GoodsRequest;
use App\Models\Order;
use App\Models\Goods;
use App\Models\Contact;
use App\Models\Position;
use App\Models\Customer;
use App\Models\Deliver;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{
    public function detail($id){

        $orders = Order::findOrFail($id);
        $delivers = Deliver::all();
        $goods = Goods::where('order_id', $id)->get();
        $customers = Customer::all(); 

        return view('frontend.order.detail', compact('orders','goods'));
    }

    public function index(Request $request){
      
       
        $goods = Goods::where('order_id', '0')->delete();
      
        $orders= Order::where('code_order','')->delete();
        $orders= Order::where('test',0)->delete();
        $customers = Customer::all(); 
        $contacts = Contact::all();
        $delivers = Deliver::all();
        $orders = Order::with('customer:id,name', 'contact:id,name', 'deliver:id,name');
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


//      public function form_order($id){
//         // $orders= Order::all();
    
//         $customer = Customer::findOrFail($id);
//         // $goods = Goods::all(); 
//         $goods = Goods::where('order_id', '0')->get();
    
//    return view('frontend.order.create', compact('customer','goods'));

// }



    public function create(){
        $orders= Order::where('code_order', '')->get(); 
        $deliver = Deliver::all();
        $order_all = Order::all();
        $customer= Customer::all();
        $goods1 = Goods::where('order_id', '0')->get();
 
        $contacts = Contact::all();
 
       return view('frontend.order.create',compact('goods1', 'order_all','customer','contacts','orders', 'deliver' ));

    }

    public function store_order(OrderRequest $request, GoodsRequest $requestgoods)
    {
       
        if(isset($_POST['submit_form_goods'])){
            // dd($request->all());
            try {
                
                $data = $requestgoods->except('_token','avatar');
                $data =[
                    'goods_code' => $requestgoods->goods_code,
                    'name' => $requestgoods->name,
                    'unit' => $requestgoods->unit,
                    'manufacturer' => $requestgoods->manufacturer,
                    'origin' => $requestgoods->origin,
                    'gender' => $requestgoods->gender,
                    'describe' => $requestgoods->describe,
                    'input_price' => $requestgoods->input_price,
                    'output_price' => $requestgoods->input_price + $requestgoods->input_price * $requestgoods-> warping_ratio / 100,
                    // 'output_price' => $request->output_price,
                    'warping_ratio' => $requestgoods->warping_ratio,
                    'tax' => $requestgoods->tax,
                    'total' => ($requestgoods->input_price + $requestgoods->input_price * $requestgoods-> warping_ratio / 100) * $requestgoods->tax
            ]; 
            if ($requestgoods->avatar) {
                $file = upload_image('avatar');
                if (isset($file['code']) && $file['code'] == 1) {
                    $data['avatar'] = $file['name'];
                }
            }
                $data['created_at'] = Carbon::now();
             
    
                $goods = Goods::create($data);
                
            } catch (\Exception $exception) {
                Log::error("ERROR => OrderController@store_order => " . $exception->getMessage());
                toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->route('get.order_create');
            }
                toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->back();
            };

          
        if(isset($_POST['submit_form_customer'])){
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
                Log::error("ERROR => OrderController@store_order=> " . $exception->getMessage());
                toastr()->error('Thêm thất bại!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->route('get.order_create');
            }
                toastr()->success('Thêm thành công!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->back() ;

        };

        if(isset($_POST['submit_form_order'])){
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
         
        // if ($request->avatar) {
        //     $file = upload_image('avatar');
        //     if (isset($file['code']) && $file['code'] == 1) {
        //         $data['avatar'] = $file['name'];
        //     }
        // }
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
        };
          
    }

    public function edit($id)
    {
        $order = Order::findOrFail($id);
       
        $goods1 = Goods::where('order_id', $id)->get();
        $customer = Customer::all();
        $deliver = Deliver::all();
       
      
        $goods2 = Goods::where('order_id', '0')->get();

        return view('frontend.order.update', compact('order','goods1','customer', 'deliver','goods2')); 
    }

    public function update(OrderRequest $request, GoodsRequest $requestgoods, $id)
    {
       
        if(isset($_POST['submit_form_goods'])){
            // dd($request->all());
            try {
                
                $data = $requestgoods->except('_token','avatar');
                $data =[
                    'goods_code' => $requestgoods->goods_code,
                    'name' => $requestgoods->name,
                    'unit' => $requestgoods->unit,
                    'manufacturer' => $requestgoods->manufacturer,
                    'origin' => $requestgoods->origin,
                    'gender' => $requestgoods->gender,
                    'describe' => $requestgoods->describe,
                    'input_price' => $requestgoods->input_price,
                    'output_price' => $requestgoods->input_price + $requestgoods->input_price * $requestgoods-> warping_ratio / 100,
                    // 'output_price' => $request->output_price,
                    'warping_ratio' => $requestgoods->warping_ratio,
                    'tax' => $requestgoods->tax,
                    'total' => ($requestgoods->input_price + $requestgoods->input_price * $requestgoods-> warping_ratio / 100) * $requestgoods->tax
            ]; 
            if ($requestgoods->avatar) {
                $file = upload_image('avatar');
                if (isset($file['code']) && $file['code'] == 1) {
                    $data['avatar'] = $file['name'];
                }
            }
                $data['created_at'] = Carbon::now();
             
    
                $goods = Goods::create($data);
                
            } catch (\Exception $exception) {
                Log::error("ERROR => OrderController@update => " . $exception->getMessage());
                toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->route('get.order_update', $id);
            }
                toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->route('get.order_update', $id);
            };

          
        if(isset($_POST['submit_form_customer'])){
            try {
                
                $data = $request->except('_token');           
                $data=['code_customer' => $request->code_customer,];
                $data['created_at'] = Carbon::now();
                $data['user_id'] = Auth::user()->id; // Hiển thị name người tạo đơn hàng
                    
               
                Order::find($id)->update($data);  
                
                
            }catch (\Exception $exception) {
                Log::error("ERROR => OrderController@update=> " . $exception->getMessage());
                toastr()->error('Thêm thất bại!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->route('get.order_update', $id);
            }
                toastr()->success('Thêm thành công!', 'Thông báo', ['timeOut' => 2000]);
                return redirect()->route('get.order_update', $id) ;

        };

        if(isset($_POST['submit_form_order'])){
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

            
        };

    //     if(isset($_POST['submit_form_table_goods'])){
    //         try {
    //             //code...
            
    //         $data2 = $requestgoods->except('_token');
    //         $data2=[
    //             'name' => $requestgoods->name2,
    //             // 'unit' => $requestgoods->unit,
    //             'manufacturer' => $requestgoods->manufacturer2,
    //             'origin' => $requestgoods->origin2,
    //             'gender' => $requestgoods->gender2,
    //             'describe' => $requestgoods->describe2,
    //             'input_price' => $requestgoods->input_price2,
    //             'output_price' => $requestgoods->input_price2 + $requestgoods->input_price2 * $requestgoods-> warping_ratio2 / 100,
    //             // 'output_price' => $request->output_price,
    //             'warping_ratio' => $requestgoods->warping_ratio,
    //             'tax' => $requestgoods->tax,
    //             'total' => ($requestgoods->input_price2 + $requestgoods->input_price2 * $requestgoods-> warping_ratio2 / 100) * $requestgoods->tax2
        
    //     ];

    //     Goods::find($requestgoods->id2)->update($data2);

    //     $data1 = $requestgoods->except('_token');
    //     $data1=[
    //         'name' => $requestgoods->name1,
    //         // 'unit' => $requestgoods->unit,
    //         'manufacturer' => $requestgoods->manufacturer1,
    //         'origin' => $requestgoods->origin1,
    //         'gender' => $requestgoods->gender1,
    //         'describe' => $requestgoods->describe1,
    //         'input_price' => $requestgoods->input_price1,
    //         'output_price' => $requestgoods->input_price1 + $requestgoods->input_price1 * $requestgoods-> warping_ratio1 / 100,
    //         // 'output_price' => $request->output_price,
    //         'warping_ratio' => $requestgoods->warping_ratio,
    //         'tax' => $requestgoods->tax,
    //         'total' => ($requestgoods->input_price1 + $requestgoods->input_price1 * $requestgoods-> warping_ratio1 / 100) * $requestgoods->tax1
    
    // ];     
    // Goods::find($requestgoods->id1)->update($data1);
    // } catch (\Exception $exception) {
    //     Log::error("ERROR => OrderController@update => " . $exception->getMessage());
    //     toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
    //     return redirect()->route('get.order_update', $id);
    // }
    //     toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);            
    //     return redirect()->route('get.order_update');

  
    //     };
    
    }

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
