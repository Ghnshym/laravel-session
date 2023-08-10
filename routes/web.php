<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\loginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login_page', function () {
    if(session()->has('username')){
        return redirect('/home');
    }
    return view('welcome');
});

Route::post('/login', [loginController::class, 'login']);

Route::get('/home', [loginController::class, 'home']);
Route::get('/logout', [loginController::class, 'logout']);