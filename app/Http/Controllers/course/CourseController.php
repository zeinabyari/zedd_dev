<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('course.courses', compact('courses'));
    }


    public function show($slug)
    {
        $course = Course::query()->where('title' ,  str_replace('_' , ' ' , $slug))->firstOrFail();
        return view('course.single_course' , compact('course'));
    }


}
