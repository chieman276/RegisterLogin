<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'login_id' => 'required',
            'password' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'login_id.required' => 'Vui lòng nhập tên tài khoản',
            'password.required' => 'Vui lòng nhập mật khẩu',
        ];
    }
}
