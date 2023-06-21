<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractRequest;
use App\Models\Contract;
use App\Models\ContractType;
use App\Models\User;
use App\Models\Customer;
use App\Models\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ContractController extends Controller
{
    public function index(){
        $contracts = Contract::with('customer:id,name','user:id,name');
        $contracts = $contracts
            ->orderByDesc('id')
            ->paginate(20);

        $model = new Contract();
        $status = $model->getStatus();

        $viewData = [
            'contracts' => $contracts,
            'contract_status' => $status,
        ];

        return view('frontend.contract.index', $viewData);
    }

    public function create()
    {
        $users = User::all();
        $customers = Customer::all();
        $contacts = Contact::all();
        $contract_types = ContractType::all();

        $model = new Contract();
        $status = $model->getStatus();

        return view('frontend.contract.create', compact('status', 'users', 'customers', 'contacts', 'contract_types'));
    }

    public function store(ContractRequest $request)
    {
        try {

            $data = $request->all();
            $data['created_at'] = Carbon::now();

            // $data['user_id'] = Auth::user()->id;

            $customer = Contract::create($data);

        } catch (\Exception $exception) {
            Log::error("ERROR => CustomerController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('frontend.customer.create');
        }
            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.index');
    }

    public function detail($id)
    {
        $contract = Contract::findOrFail($id);
        $customer = Customer::all();

        $model = new Contract();
        $status = $model->getStatus();

        return view('frontend.contract.detail', compact('contract', 'customer', 'status'));
    }

    public function update(ContractRequest $request, $id)
    {

    }

    public function delete(Request $request, $id, )
    {
        try {
            $contract = Contract::findOrFail($id);
            if ($contract) $contract->delete();
        } catch (\Exception $exception) {
            toastr()->error('Xóa hợp đồng thất bại!', 'Thông báo', ['timeOut' => 2000]);
            Log::error("ERROR => ContractController@delete => " . $exception->getMessage());
        }
        toastr()->success('Xóa hợp đồng thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.contract_index');
    }
}
