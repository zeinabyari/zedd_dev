<?php

namespace App\Http\Controllers\course;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index(Request $request)
    {
        //desc & acs
        $courses = Course::query()->orderByDesc('id');
        if ($request->has('search')){
            $courses = $courses->where('title' , 'LIKE' , '%' . $request->search .'%')
                ->orWhere('description' , 'LIKE' , '%' . $request->search .'%');
        }

        $courses = $courses->paginate(10);
//                return response()->json($courses);
        return view('course.courses', compact('courses'));
    }


    public function show($slug)
    {
        $course = Course::query()->where('title' ,  str_replace('_' , ' ' , $slug))->firstOrFail();
        return view('course.single_course' , compact('course'));
    }


}
