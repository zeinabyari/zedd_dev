<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'description' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'description.required' => 'متن درخواست الزامی است',
            'email.email' => 'ایمیل نامعتبر است',
        ];
    }
}
