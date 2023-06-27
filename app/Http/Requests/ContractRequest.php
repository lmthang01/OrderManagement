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
            'value' => 'required',
            'start_day' => 'required',
            'finish_day' => 'required',
            'contract_type' => 'required',
            'user_id' => 'required',
            'customer_id' => 'required',
            'contact_id' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên hợp đồng không được để trống!',
            'start_day.required' => 'Hãy chọn ngày bắt đầu hợp đồng!',
            'finish_day.required' => 'Hãy chọn ngày kết thúc hợp đồng!',
            'value.required' => 'Giá trị hợp đồng không thể trống!',
            'contract_type.required' => 'Hãy chọn loại hợp đồng!',
            'user_id.required' => 'Hãy chọn chủ sở hữu!',
            'customer_id.required' => 'Hãy chọn khách hàng bằng cách nhấn nút "Chọn Khách Hàng" phía trên!',
            'contact_id.required' => 'Hãy chọn liên hệ bằng cách nhấn nút "Chọn Liên Hệ" phía trên!'
        ];
    }
}
