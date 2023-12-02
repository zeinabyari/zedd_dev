<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{

    public function index()
    {
        return view('auth.register');

    }

    public function store(RegisterRequest $request)
    {
       $client =  Client::query()->create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
        ]);

       auth()->guard('clients')->login($client);

        return redirect()->route('dashboard' );
    }

}
