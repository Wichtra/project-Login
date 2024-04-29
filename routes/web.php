<?php

// use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\loginController;
use App\Http\Controllers\akunController;

Route::get('/',[loginController::class, 'index']);
Route::post('/',[loginController::class, 'signUp']);
Route::post('/login',[loginController::class, 'login']);
Route::get('/logout',[loginController::class, 'logout']);
Route::get('/userlist',[akunController::class, 'getAll']);
Route::get('/update/{id}',[akunController::class, 'findOne']);
Route::put('/update/{id}',[akunController::class, 'update'])->name('akun.update');
Route::get('/userlist/delete/{id}', [AkunController::class, 'delete'])->name('akun.delete');

Route::get('/admin', function () {
    return view('homepage_admin');
});

Route::get('/user', function () {
    return view('homepage_user');
});

