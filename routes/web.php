<?php

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
    return redirect()->to("/login");
});
Route::get('/login', function () {
    return view('sessions.login');
});
Route::get('/register', function () {
    return view('sessions.register');
});
Route::get('/recover', function () {
    return view('sessions.recoverpassword');
});
