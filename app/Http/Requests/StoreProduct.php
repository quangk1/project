<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        
        return true;
        // return mặc định là false 
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //numeric là decimal(10,2) 
            //           Giá trị phải là số.
            'name' => 'required|max:100',
            'price' => 'required|numeric',
            'old_price' => 'required|numeric|max:10000000000' // max:100000 là giá trị điền tối đa
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Tên sản phẩm không thể thiếu',
            'name.max' => 'Tên không dài quá 100 ký tự',
            'price.required' => 'giá của sản phẩm không thể thiếu',
            'price.numeric' => 'giá của sản phẩm phải là số',
            'old_price.required' => 'giá cũ sản phẩm không thể thiếu',
            'old_price.numeric' => 'giá cũ phẩm không thể thiếu'
        ];
    }
}
