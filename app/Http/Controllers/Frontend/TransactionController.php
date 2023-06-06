<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\Customer;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with('customer:id,name','user:id,name','personContact:id,name');
        $transactions = $transactions
            ->orderByDesc('transaction_id')
            ->paginate(20);

        $model = new Transaction();
        $status = $model->get_Transaction_Status();

        $viewData = [
            'transactions' => $transactions,
            'transaction_status' => $status
        ];

        return view('frontend.transaction.index', $viewData);
    }

    public function create()
    {
        // Truy thức dữ liệu của Customer, Contact
        $customers = Customer::all();
        // Đợi thêm Contact
        // $contact = Contact::all();

        $model = new Transaction();
        $status = $model->get_Transaction_Status();

        return view('frontend.transaction.create', compact('customers', 'contact', 'status'));
    }

    public function store(TransactionRequest $transaction_request)
    {
        try {
            $data = $transaction_request->all(); // Lấy dữ liệu từ $transaction_request gửi lên
            $data['created_at'] = Carbon::now();

            $data['user_id'] = Auth::user()->id; // Hiển thị name người phụ trách giao dịch

            $transaction = Transaction::create($data);

        } catch (\Exception $exception) {
            Log::error("ERROR => TransactionController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('frontend.customer.create');
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.index');
    }

    public function detail($transaction_id)
    {
        $transaction = Transaction::findOrFail($transaction_id);
        $customer = Customer::all();

        $model = new Transaction();
        $status = $model->get_Transaction_Status();

        return view('frontend.transaction.detail', compact('transaction', 'customer', 'contact', 'status'));
    }

    public function update(TransactionRequest $transaction_request, $transaction_id)
    {
        try {
            $data = $transaction_request->all();
            $data['updated_at'] = Carbon::now();

            Transaction::find($transaction_id)->update($data);
        } catch (\Exception $exception) {
            Log::error("ERROR => TransactionController@update => " . $exception->getMessage());
            toastr()->error('Cập nhật giao dịch thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.transaction_update', $transaction_id);
        }
        toastr()->success('Cập nhật giao dịch thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.index');
    }

    public function delete(Request $transaction_request, $transaction_id, )
    {
        try {
            $transaction = Transaction::findOrFail($transaction_id);
            if ($transaction) $transaction->delete();
        } catch (\Exception $exception) {
            toastr()->error('Xóa giao dịch thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => TransactionController@delete => " . $exception->getMessage());
        }
        toastr()->success('Xóa giao dịch thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.index');
    }
}
