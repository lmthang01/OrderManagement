<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            // 'email' => 'unique:contacts,email,'.$this->id,
            'customer_id' => 'required',
            'position_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            // 'name.unique' => 'Tên người liên hệ đã tồn tại!',
            'name.required' => 'Tên người liên hệ không được để trống!',

            // 'email.unique' => 'Email đã tồn tại!',

            'customer_id.required' => 'Vui lòng chọn khách hàng!',
           
            'position_id.required' => 'Vui lòng chọn chức vụ!',
            
        ];
    }
}
