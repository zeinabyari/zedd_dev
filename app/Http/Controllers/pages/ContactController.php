<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('pages.contact');
    }


    public function store(ContactRequest $request)
    {
        Contact::query()->create([
            'name' => $request->name ,
            'email' => $request->email ,
            'description' => $request->description ,
        ]);

//        return redirect()->route('contact');
        return redirect()->back()->with('success' , 'درخواست شما با موفقیت ذخیره شد');
    }


    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
