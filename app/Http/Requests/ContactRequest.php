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
            'name' => 'required|unique:contacts,name,'.$this->id,
            'email' => 'unique:contacts,email,'.$this->id,
            'customer_id' => 'required|unique:contacts,customer_id,'.$this->id,
            'position_id' => 'required',

        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'Tên người liên hệ đã tồn tại!',
            'name.required' => 'Tên người liên hệ không được để trống!',

            'email.unique' => 'Email đã tồn tại!',

            'customer_id.unique' => 'Tên khách hàng đã tồn tại!',
            'customer_id.required' => 'Tên khách hàng không được để trống!',
           
            'position_id.required' => 'Chức vụ không được để trống!',
            
        ];
    }
}
