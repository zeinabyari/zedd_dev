<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email' , 'exists:clients,email'],
            'password' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ایمیل الزامی است',
            'email.exists' => 'ایمیل وجود ندارد',
            'password.required' => 'رمزعبور الزامی است',
            'email.email' => 'ایمیل نامعتبر است',

        ];
    }
}
