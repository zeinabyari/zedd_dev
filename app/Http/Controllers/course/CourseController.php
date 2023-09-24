<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        return view('course.courses');
    }


    public function store(Request $request)
    {
        //
    }


    public function show($slug)
    {
        return view('course.single_course');
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
