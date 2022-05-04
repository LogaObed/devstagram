<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use Illuminate\Auth\Events\Login;

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
    return view('inicio');
});
Route::get('/registar',[RegisterController::class,'index'])->name('registar');
Route::post('/registar',[RegisterController::class,'store']);
// Route::get('/auth','RegisterController@index')->name('auth.index');
// Login
// Route::get('/login', 'LoginController@index')->name('login');
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'store']);
// post controller
Route::get('/muro',[PostController::class, 'index'])->name('post.index');


