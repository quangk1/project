<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeedback extends FormRequest
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
            'title' =>'required|max:1000',
            'status' => 'required|max:1000000000000000000000'
        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'tên feedback không thể thiếu',
            'fullname.max' => 'tên feedback không quá dài 100 ký tự',
            'title.required' =>'title không thể thiếu',
            'title.max' =>'title không quá dài 1000 ký tự',
            'status.required' => 'status không thể thiếu',
            'status.max' => 'status không quá dài 1000 ký tự'
        ];
    }
}
