<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\TransactionRequest;
use App\Models\Transaction;
use App\Models\Customer;
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

    public function store()
    {

    }

    public function edit()
    {

    }

    public function detail()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
