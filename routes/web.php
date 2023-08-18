<?php

//use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home.user');
})->name('home');

Route::get('/aboutUs', function () {
    return view('home.aboutus');
})->name('aboutus');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/formations', function () {
    return view('home.formation');
})->name('formation');

Auth::routes();

Route::get('/administrateur',[AdminController::class, 'index'])->middleware('auth')->name('administrateur');
Route::resource('admin/categories', CategoryController::class)->except(['show'])->middleware('auth');
Route::resource('admin/courses', CourseController::class)->middleware('auth');

Route::get('/afficher_categorie',[CategoryController::class , 'showCategory'])->name('show_category');
Route::get('/courses/by-category/{categoryId}', [CourseController::class, 'coursesByCategory'])->name('courses_by_category');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.show');


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
