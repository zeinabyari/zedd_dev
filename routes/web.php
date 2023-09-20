<?php

use App\Http\Controllers\course\CourseController;
use App\Http\Controllers\pages\AboutController;
use App\Http\Controllers\pages\ContactController;
use App\Http\Controllers\pages\HomeController;
use Illuminate\Support\Facades\Route;

/*
 * get ->read
 * post -> store in database
 * put/patch ->update rows in database
 * delete -> destroy
*/

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/about', AboutController::class)->name('about');

Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact_post');


Route::get('/course', [CourseController::class, 'index']);
Route::get('/single_course/{$slug}', [CourseController::class, 'show'])->name('single_course');


Route::prefix('auth')->group(function () {
    Route::get('/forget_password', function () {
        return view('auth.forget_password');
    });
    Route::get('/login', function () {
        return view('auth.login');
    });
    Route::get('/register', function () {
        return view('auth.register');
    })->name('register');
});


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
