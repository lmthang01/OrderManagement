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
use Psy\Readline\Hoa\Console;

class TransactionController extends Controller
{
    public function index(){
        $transactions = Transaction::with('customer:id,name','user:id,name');
        $transactions = $transactions
            ->orderByDesc('id')
            ->paginate(20);

        $model = new Transaction();
        $status = $model->getStatus();

        $viewData = [
            'transactions' => $transactions,
            'transaction_status' => $status
        ];

        return view('frontend.transaction.index', $viewData);
    }

    public function create()
    {
        // Truy xuất dữ liệu của Customer, Contact
        $customers = Customer::all();
        // Đợi thêm Contact
        // $contact = Contact::all();

        $model = new Transaction();
        $status = $model->getStatus();

        return view('frontend.transaction.create', compact('customers', 'status'));
    }

    public function store(TransactionRequest $request)
    {
        try {
            $data = $request->all();
            // Thêm đoạn code sau để lấy thông tin khách hàng từ request và gán vào các field tương ứng
            $customers = Customer::findOrFail($data['customer_id']);

            // Lưu tệp tin vào thư mục lưu trữ
            if ($request->hasFile('document')) {
                $file = $request->file('document');
                $fileName = $file->getClientOriginalName();
                $filePath = $file->storeAs('documents', $fileName, 'public');
                $data['document'] = $filePath;
            }

            $transaction = Transaction::create($data);

            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);

        } catch (\Exception $exception) {
            Log::error("ERROR => TransactionController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.transaction_create');
        }
        return redirect()->route('get.transaction_index');
    }


    public function detail($id)
    {
        $transaction = Transaction::findOrFail($id);
        $customer = Customer::all();

        $model = new Transaction();
        $status = $model->getStatus();

        return view('frontend.transaction.detail', compact('transaction', 'customer', 'status'));
    }

    public function edit($id){

        $transaction = Transaction::findOrFail($id);
        $customers = Customer::all();
        $model = new Transaction();
        $status = $model->getStatus();

        return view('frontend.transaction.update', compact('transaction', 'customers', 'status'));
    }

    public function update(TransactionRequest $request, $id)
    {
        try {
            $data = $request->all();
            $data['updated_at'] = Carbon::now();

            // $customer = Customer::findOrFail($data['customer_id']);

            Transaction::find($id)->update($data);

        } catch (\Exception $exception) {
            Log::error("ERROR => TransactionController@update => " . $exception->getMessage());
            toastr()->error('Cập nhật giao dịch thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.transaction_update', $id);
        }

        toastr()->success('Cập nhật giao dịch thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.transaction_index');
    }


    public function delete(Request $request, $id)
    {
        try {
            $transaction = Transaction::findOrFail($id);
            if ($transaction) $transaction->delete();
        } catch (\Exception $exception) {
            toastr()->error('Xóa giao dịch thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => TransactionController@delete => " . $exception->getMessage());
        }
        toastr()->success('Xóa giao dịch thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.transaction_index');
    }
}
