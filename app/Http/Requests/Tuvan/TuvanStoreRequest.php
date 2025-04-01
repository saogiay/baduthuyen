<?php

namespace App\Http\Requests\Tuvan;

use Illuminate\Foundation\Http\FormRequest;

class TuvanStoreRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'message' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'firstName' => 'Tên',
            'lastName' => 'Họ',
            'email' => 'Email',
            'phone' => 'Số điện thoại',
            'message' => 'Nội dung',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute không được để trống',
            'email' => ':attribute không đúng định dạng',
            'numeric' => ':attribute không đúng định dạng',
        ];
    }
}
