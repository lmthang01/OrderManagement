<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContractRequest;
use App\Models\Contract;
use App\Models\ContractType;
use App\Models\User;
use App\Models\Customer;
use App\Models\Contact;
use App\Models\Position;
use Dompdf\Dompdf;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class ContractController extends Controller
{
    public function index(){
        $contracts = Contract::with('customer:id,name','user:id,name','contact:id,name');
        $contracts = $contracts
            ->orderByDesc('id')
            ->paginate(10);

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
        // dd($data);
        try {
            $data = $request->all();
            $data['created_at'] = Carbon::now();
            $customers = Customer::findOrFail($data['customer_id']);
            $contacts = Contact::findOrFail($data['contact_id']);
            // $data['user_id'] = Auth::user()->id;

            $contracts = Contract::create($data);

            toastr()->success('Thêm mới thành công!', 'Thông báo', ['timeOut' => 2000]);
        } catch (\Exception $exception) {
            Log::error("ERROR => ContractController@store => " . $exception->getMessage());
            toastr()->error('Thêm mới thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.contract_create');
        }
        return redirect()->route('get.contract_index');
    }

    public function detail($id)
    {
        $contract = Contract::findOrFail($id);
        $customer = Customer::all();
        $contract_type = ContractType::all();

        $model = new Contract();
        $status = $model->getStatus();

        return view('frontend.contract.detail', compact('contract', 'customer', 'status', 'contract_type'));
    }

    public function edit($id){

        $contract = Contract::findOrFail($id);
        $users = User::all();
        $customers = Customer::all();
        $contacts = Contact::all();
        $positions = Position::all();
        $contract_types = ContractType::all();

        $model = new Contract();
        $status = $model->getStatus();

        return view('frontend.contract.update', compact('contract', 'users', 'customers', 'status', 'contacts', 'positions', 'contract_types'));
    }

    public function update(ContractRequest $request, $id)
    {
        try {
            $data = $request->all();
            $data['updated_at'] = Carbon::now();

            // $customer = Customer::findOrFail($data['customer_id']);

            Contract::find($id)->update($data);

        } catch (\Exception $exception) {
            Log::error("ERROR => ContractController@update => " . $exception->getMessage());
            toastr()->error('Cập nhật hợp đồng thất bại!', 'Thông báo', ['timeOut' => 2000]);
            return redirect()->route('get.contract_update', $id);
        }

        toastr()->success('Cập nhật hợp đồng thành công!', 'Thông báo', ['timeOut' => 2000]);
        return redirect()->route('get.contract_index');
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

    // public function generatePDF($contractId)
    // {
    //     // Lấy dữ liệu từ cơ sở dữ liệu
    //     $contract = Contract::findOrFail($contractId);

    //     // Tạo một đối tượng Dompdf
    //     $dompdf = new Dompdf();

    //     // Render template PDF từ dữ liệu
    //     $html = view('pdf.contract', compact('contract'));

    //     // Gán HTML vào Dompdf
    //     $dompdf->loadHtml($html);

    //     // Cấu hình Dompdf (tuỳ chọn)
    //     $dompdf->setPaper('A4', 'portrait');

    //     // Render PDF
    //     $dompdf->render();

    //     // Xuất file PDF
    //     $dompdf->stream('contract.pdf');
    // }
}
