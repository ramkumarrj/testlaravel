<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login');
});

Route::post('login', [LoginController::class,'login'])->name('login');

// routes/web.php
Route::post('signup', [SignUpController::class,'signup'])->name('signup');

// Route::group([],function(){
//     Route::post('login',[LoginController::class,'login']);
// });


Route::get('/home', function () {
    return view('Home');
});

Route::get('signup', function () {
    return view('Signup');
});