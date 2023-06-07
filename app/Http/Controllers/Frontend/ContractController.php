<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractRequest;
use App\Models\Contract;
use App\Models\Customer;
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
            'contract_status' => $status
        ];

        return view('frontend.contract.index', $viewData);
    }

    public function create()
    {

    }

    public function store(ContractRequest $request)
    {

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
