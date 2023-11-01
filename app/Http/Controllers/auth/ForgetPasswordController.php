<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ForgetPasswordController extends Controller
{

    public function index()
    {
        return view('auth.forget_password');
    }


    public function store(Request $request)
    {
        return view('auth.reset_password');

    }


}
