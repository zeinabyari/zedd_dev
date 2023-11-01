<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'phone' => [],
            'password' => ['min:8'],
            'retryPassword' => ['same:password'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
            'password.min' => 'رمز عبور باید حداقل ۸ رقم باشد',
            'retryPassword.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندار',
        ];
    }
}
