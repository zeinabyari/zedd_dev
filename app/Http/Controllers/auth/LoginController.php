<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Client;
use Illuminate\Validation\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    public function index()
    {
        return view('auth.login');

    }

    public function logout()
    {
        auth()->guard('clients')->logout();
        return redirect()->back();
    }


    public function store(LoginRequest $request)
    {
        $client = Client::query()->where('email', $request->email)->firstOrFail();
        if (Hash::check($request->password, $client->password)) {
            auth()->guard('clients')->login($client);
        } else
            throw ValidationException::withMessages(['password' => 'رمزعبور اشتباه است']);

        return redirect()->route('dashboard');
    }

}
