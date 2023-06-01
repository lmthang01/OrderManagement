<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TransactionRequest extends FormRequest
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
            'finish_day' => 'required',
            'transaction_type' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên giao dịch không được để trống!',
            'start_day.required' => 'Ngày bắt đầu không được để trống!',
            'finish_day.required' => 'Ngày kết thúc không được để trống!',
            'transaction.required' => 'Phải chọn loại giao dịch!'
        ];
    }
}
