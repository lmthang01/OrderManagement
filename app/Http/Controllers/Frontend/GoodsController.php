<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\GoodsRequest;
use App\Models\Goods;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Psy\Readline\Hoa\Console;

class GoodsController extends Controller
{
    public function index(){
        $goods = Goods::with('contract:id,name');
        $goods = $goods
            ->orderByDesc('id')
            ->paginate(10);

        return view('frontend.contract.create', compact('goods'));
    }

    public function create()
    {
        return view('frontend.contract.create');
    }

    public function store(GoodsRequest $request)
    {
        try {
            $data = $request->all();

            $goods = Goods::create($data);

            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);

        } catch (\Exception $exception) {
            Log::error("ERROR => GoodsController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.contract_create');
        }
        return redirect()->route('get.contract_create');
    }

    // public function edit($id){

    //     $transaction = Transaction::findOrFail($id);
    //     $customers = Customer::all();
    //     $model = new Transaction();
    //     $status = $model->getStatus();

    //     return view('frontend.transaction.update', compact('transaction', 'customers', 'status'));
    // }

    // public function update(GoodsRequest $request, $id)
    // {
    //     try {
    //         $data = $request->all();
    //         $data['updated_at'] = Carbon::now();

    //         // $customer = Customer::findOrFail($data['customer_id']);

    //         Transaction::find($id)->update($data);

    //     } catch (\Exception $exception) {
    //         Log::error("ERROR => TransactionController@update => " . $exception->getMessage());
    //         toastr()->error('Cập nhật giao dịch thất bại!', 'Thông báo', ['timeOut' => 2000]);
    //         return redirect()->route('get.transaction_update', $id);
    //     }

    //     toastr()->success('Cập nhật giao dịch thành công!', 'Thông báo', ['timeOut' => 2000]);
    //     return redirect()->route('get.transaction_index');
    // }

    public function delete(Request $request, $id)
    {
        try {
            $goods = Goods::findOrFail($id);
            if ($goods) $goods->delete();
        } catch (\Exception $exception) {
            toastr()->error('Xóa thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => GoodsController@delete => " . $exception->getMessage());
        }
        toastr()->success('Xóa thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.contract_create');
    }
}
