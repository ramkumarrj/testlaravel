<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\employeesController;


Route::get('/', function () {
    return view('Login');
});

Route::post('login', [LoginController::class,'login'])->name('login');

// routes/web.php
Route::post('signup', [SignUpController::class,'signup'])->name('signup');

// Route::group([],function(){
//     Route::post('login',[LoginController::class,'login']);
// });


Route::get('home', function () {
    return view('Home');
});

Route::get('signup', function () {
    return view('Signup');
});

Route::get('addemplooye', function () {
    return view('Addemp');
});
Route::get('calendar', function(){
    return view('calendar');
});

Route::get('emplist', [employeesController::class, 'index']);

// Route to display the employee list
Route::get('employees', [EmployeesController::class, 'index'])->name('employees.index');

// Route to handle the addition of a new employee
Route::post('employees', [EmployeesController::class, 'store'])->name('employees.store');
