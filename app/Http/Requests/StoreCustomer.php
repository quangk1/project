<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCustomer extends FormRequest
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
            'fullname' => 'required|max:100',
            'gender'=> 'required',
            'DOB'=> 'required',
            'address'=> 'required|max:100',
            'phone'=> 'max:100'
            
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'Họ và tên bắt buộc',
            'fullname.max' => 'Độ dài không quá 100 ký tự',
            'gender'=> 'Giới tính bắt buộc phải có',
            'DOB'=> 'NT năm sinh bắt buộc phải có',
            'address'=> 'Địa chỉ phải có',
            'phone'=> 'SĐT không dài quá 100 số'
            
        ];
    }
}
