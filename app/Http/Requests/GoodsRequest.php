<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GoodsRequest extends FormRequest
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
    //         'goods_code' => 'required|unique:goods,goods_code,'.$this->id,
    //         'name' => 'required',
            
    //         'input_price' => 'required',

    //     ];
    // }

    // public function messages()
    // {
    //     return [
    //         'goods_code.unique' => 'Mã hàng hóa đã tồn tại!',
    //         'goods_code.required' => 'Mã hàng hóa không được để trống!',

    //         'name.required' => 'Tên hàng hóa không được để trống!',
           
    //         'input_price.required' => 'Giá nhập không được để trống!',
            
    //     ];
    // }
}
