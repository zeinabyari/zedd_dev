<?php

namespace App\Http\Controllers\pages;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Course;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        $courses = Course::query()->orderByDesc('id')->limit(6)->get();
        return view('pages.home', compact('brands' , 'courses'));
    }
}
