<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
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
            // regex:/^[A-Za-z]{4}\d{4}$/
            'login_id' => 'required|min:3|max:20|unique:users',
            'password' => 'required',
            'phone' => 'required|min:9|max:12|unique:users',
            'full_name' => 'required|min:3|max:100',
            'email' => 'required|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'login_id.required' => 'Vui lòng nhập tên tài khoản',
            'login_id.unique' => 'Tên tài khoản đã tồn tại',
            'login_id.min' => 'Tên tài khoản phải từ 3 đến 20 ký tự',
            'login_id.max' => 'Tên tài khoản phải từ 3 đến 20 ký tự',
            'login_id.regex' => 'Tên tài khoản chỉ chứa số và chữ',
            'password.required' => 'Vui lòng nhập mật khẩu',
            'phone.required' => 'Vui lòng nhập số điện thoại',
            'phone.regex' => 'Số điện thoại phải chứa ký tự số và chứa từ 9 đến 12 ký tự',
            'phone.min' => 'Số điện thoại phải chứa ký tự số và chứa từ 9 đến 12 ký tự',
            'phone.max' => 'Số điện thoại phải chứa ký tự số và chứa từ 9 đến 12 ký tự',
            'phone.unique' => 'Số điện thoại đã tồn tại',
            'full_name.required' => 'Vui lòng nhập đầy đủ họ tên',
            'full_name.min' => 'Tên từ 3 đến 100 ký tự',
            'full_name.max' => 'Tên từ 3 đến 100 ký tự',
            'email.required' => 'Vui lòng nhập email',
            'email.unique' => 'Email đã tồn tại',

        ];
    }
}
