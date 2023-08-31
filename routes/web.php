<?php

//use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactController;
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

Route::get('/accueil', function () {
    return view('home.user');
})->name('home');

Route::get('/a_propos_de_nous', function () {
    return view('home.aboutus');
})->name('aboutus');

Route::get('/contact', function () {
    return view('home.contact');
})->name('contact');

Route::get('/formations', function () {
    return view('home.formation');
})->name('formation');

Route::get('/conditions_generales_ventes', function () {
    return view('home.conditionGenrale');
})->name('conditionGenrale');

Route::get('/mentions_legales', function () {
    return view('home.mentionLegale');
})->name('mentionLegale');

Route::get('/politique_confidentialite', function () {
    return view('home.politiqueConfidentialité');
})->name('politiqueConfidentialité');

Route::get('/reglement_interieur', function () {
    return view('home.reglementInterieur');
})->name('reglementInterieur');

Route::get('/cgu', function () {
    return view('home.cgu');
})->name('cgu');

Auth::routes();

Route::get('/administrateur',[AdminController::class, 'index'])->middleware('auth')->name('administrateur');
Route::resource('admin/categories', CategoryController::class)->except(['show'])->middleware('auth');
Route::resource('admin/courses', CourseController::class)->middleware('auth');

Route::get('/afficher_categorie',[CategoryController::class , 'showCategory'])->name('show_category');
Route::get('/courses/by-category/{categoryId}', [CourseController::class, 'coursesByCategory'])->name('courses_by_category');
Route::get('/courses/{id}', [CourseController::class, 'show'])->name('course.show');
route::get('contact/create',[ContactController::class,'create'])->name('contact.create');
route::post('contact/store',[ContactController::class,'store'])->name('contact.store');
route::get('contact',[ContactController::class,'index'])->name('contact.index')->middleware('auth');
route::delete('contact/{contact}',[ContactController::class,'destroy'])->name('contact.destroy')->middleware('auth');



//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
