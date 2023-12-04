<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\SettingRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SettingController extends Controller
{
    public function index()
    {
        $client = auth()->guard('clients')->user();
        return view('dashboard.setting' , compact('client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }




    public function update(SettingRequest $request)
    {
        $client = auth()->guard('clients')->user();
        $client->phone = $request->phone;
        $client->name = $request->name;

        if ($request->has('avatarPicture')) {

            $request->validate([
                'avatarPicture' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            ]);

            $file = $request->file('avatarPicture');
            $extension = $file->getClientOriginalExtension();


            if (!in_array($extension, ['png', 'jpg', 'jpeg'])) {
                return response('Invalid file extension');
            }

            $fileName = time() . '-' . rand() . '.' . $extension;
            Storage::disk("public")->put('files/' . $fileName, file_get_contents($file));

            if($client->avatar)
                Storage::disk("public")->delete($client->avatar);
            // Delete old avatar if needed
            // Storage::delete($client->avatar);

            $client->avatar = 'files/' . $fileName;
        }

        $client->save();

        // Redirect or return a response as needed
        return redirect()->back()->with('success', 'تغییرات شما با موفقیت اعمال شد');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
