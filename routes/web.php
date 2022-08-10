<?php

use App\Http\Controllers\UserController;
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
// Route::get('/layouts', function ()
// {
// return view('user');
// });

Route::get('/home',[ UserController::class,'home'])->name('users.home')->middleware('CheckLogin');
Route::get('/users',[ UserController::class,'index'])->name('users')->middleware('CheckLogin');;
Route::get('/register',[ UserController::class, 'register' ])->name('register');
Route::post('/store',[ UserController::class, 'store' ])->name('register.store');
Route::get('/login',[ UserController::class, 'login' ])->name('login')->middleware('CheckUser');
Route::get('/logout',[ UserController::class, 'logout' ])->name('logout');
Route::post('/postLogin',[ UserController::class, 'postLogin' ])->name('postLogin');

