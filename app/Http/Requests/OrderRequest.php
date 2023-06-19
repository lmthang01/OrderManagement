<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OrderRequest extends FormRequest
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
    // public function rules(): array
    // {
    //     return [
            
    //         'code_order' => 'required|unique:orders,code_order,'.$this->id,
    //         // 'phone' => 'required',
    //         'contact_id' => 'required',
    //         'payments' => 'required',
           
    //         'delivery_address'=> 'required',

    //     ];
    // }

    // public function messages()
    // {
    //     return [
    //         'code_order.unique' => 'Mã đơn hàng đã tồn tại!',
    //         'code_order.required' => 'Mã đơn hàng không được để trống!',

    //         // 'phone.required' => 'Số điện thoại không được để trống!',
           
    //         'contact_id.required' => 'Người liên hệ không được để trống!',
    //         'payments.required' => 'Hình thức thanh toán không được để trống!',
     
    //         'delivery_address.required' => 'Địa chỉ giao hàng không được để trống!',
            
    //     ];
    // }
}
