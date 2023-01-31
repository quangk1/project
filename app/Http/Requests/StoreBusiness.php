<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBusiness extends FormRequest
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
            'name' => 'required|max:100',
            'bank_information' => 'required|max:10000'
           
            


        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên doanh nghiệp không thể thiếu',
            'name.max' => 'Tên không dài quá 100 ký tự',
            'bank_information.required' => 'thông tin bank không thể thiếu'
           
        ];
    }
}
