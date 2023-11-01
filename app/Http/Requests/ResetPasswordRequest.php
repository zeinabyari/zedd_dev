<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResetPasswordRequest extends FormRequest
{
    public function rules()
    {
        return [
            'link' => ['required', 'exists:clients,reset_link'],
            'password' => ['min:8'],
            'retryPassword' => ['same:password'],
        ];
    }

    public function messages()
    {
        return [

            'password.min' => 'رمز عبور باید حداقل ۸ رقم باشد',
            'retryPassword.same' => 'تکرار رمز عبور با رمز عبور مطابقت ندار',
            'link.required' => 'لینک اجباری است',
            'link.exists' => 'لینک اشتباه است',
        ];
    }
}
