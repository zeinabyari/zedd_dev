<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ForgetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'email' => ['required', 'email', 'exists:clients,email'],
        ];
    }

    public function messages()
    {
        return [
            'email.required' => 'ایمیل الزامی است',
            'email.exists' => 'ایمیل وجود ندارد',
            'email.email' => 'ایمیل نامعتبر است',
        ];
    }
}
