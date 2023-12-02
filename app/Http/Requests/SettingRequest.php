<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
{
    public function rules()
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email' ],
            'phone' => ['required' ,  'unique:clients,phone'
//                , Rule::unique('clients')->ignore($user->id),
            ],
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'نام الزامی است',
            'email.required' => 'ایمیل الزامی است',
            'phone.required' => 'شماره موبایل الزامی است',
            'phone.unique' => 'این شماره قابل استفاده نمی باشد',
            'email.email' => 'ایمیل نامعتبر است',
        ];
    }
}
