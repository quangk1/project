<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAdvertisment extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'quantity' => 'required|max:100',
            'datesetup'=> 'required|max:100',
            'fullname'=> 'required|max:100',
            'phone'=> 'required|numeric|max:100',
            'address'=> 'required|max:100'

        ];
    }
    public function messages()
    {
        return [
            'quantity.required' => 'Số lượng Không thể thiếu',
            'datesetup.required'=> 'Ngày đặt phải đúng thời gian hiện tại',
            'fullname.required'=> 'Họ tên phải có',
            'fullname.max'=> 'Họ tên không quá dài 100 ký tự',
            'phone.required'=> 'SĐT không thể thiếu',
            'address.required'=> 'Địa chỉ Không thể thiếu'
        ];
    }
}
