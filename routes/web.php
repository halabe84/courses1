<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Front\CourseController;
use App\Http\Controllers\Front\FormController;
use App\Http\Controllers\Front\MainController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[MainController::class,'index'])->name('front.main');
Route::get('/category/{id}',[CourseController::class,'category'])->name('front.category');
Route::get('/category/{id}/course/{c_id}',[CourseController::class,'show'])->name('front.show');
Route::post('/form/enroll',[FormController::class,'enroll'])->name('front.forms.enroll');




//admin
Route::get('/dashboard',[HomeController::class,'index'])->name('admin.home');





