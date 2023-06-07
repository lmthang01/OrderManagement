<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContractRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'start_day' => 'required',
            'contract_type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên hợp đồng không được để trống!',
            'customer.required'=> 'Hãy chọn khách hàng!',
            'start_day.required' => 'Hãy chọn ngày bắt đầu hợp đồng!',
            'contract_type.required' => 'Hãy chọn loại hợp đồng!'
        ];
    }
}
