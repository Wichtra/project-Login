<?php

// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;

Route::get('/',[loginController::class, 'index']);
Route::post('/login',[loginController::class, 'login']);
Route::get('/logout',[loginController::class, 'logout']);

Route::get('/admin', function () {
    return view('homepage_admin');
});

Route::get('/user', function () {
    return view('homepage_user');
});

Route::get('/userlist', function () {
    return view('userList_admin');
});

Route::get('/update', function () {
    return view('user_update');
});