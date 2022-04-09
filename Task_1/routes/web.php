<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\UpdateController;
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
Route::get('/',[HomeController::class,'home'])->name('home');
Route::get('/login',[HomeController::class,'login'])->name('login');
Route::get('/user_signup',[HomeController::class,'user_signup'])->name('user_signup');
Route::post('/signup_users',[SignupController::class,'signupusers'])->name('signup_user');
Route::post('/signup_admin',[SignupController::class,'signupadmin'])->name('signup_admin');
Route::post('/signup_superadmin',[SignupController::class,'signupsuperadmin'])->name('signup_superadmin');
Route::post('/submitlogin',[LoginController::class,'submitlogin'])->name('loginsubmit');
Route::get('/admin_signup',[HomeController::class,'admin_signup'])->name('admin_signup');
Route::get('/superadmin_signup',[HomeController::class,'superadmin_signup'])->name('superadmin_signup');

Route::get('/dashboard',[HomeController::class,'dashboard'])->middleware('loggedinadmin')->name('dashboard');
Route::get('/admininfo',[InformationController::class,'admininfo'])->middleware('loggedinadmin')->name('admininfo');
Route::get('/userinfo',[InformationController::class,'Userinfo'])->middleware('loggedinadmin')->name('userinfo');
Route::resource('admin', BooksController::class);
Route::get('/logout',[LoginController::class,'logout'])->middleware('loggedinadmin')->name('logout');
Route::post('/signup_admin_admin',[SignupController::class,'signupadmin_admin'])->middleware('loggedinadmin')->name('signup_admin_admin');
Route::post('/Update_Admin', [UpdateController::class, 'updateadmin'])->middleware('loggedinadmin')->name('update_admin');

Route::get('/admin/delete/{id}',[UpdateController::class,'admin_delete'])->middleware('loggedinadmin')->name('admin_delete');
Route::get('/permission',[InformationController::class,'permission'])->middleware('loggedinadmin')->name('permission');