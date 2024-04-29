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
Route::get('/homepage_user',[akunController::class, 'getAll']);
// Route::match(['get', 'post'], '/update/{id}', function () {});
Route::match(['get','post'],'/update/{id}',[AkunController::class,'update']);
Route::get('/userlist/delete/{id}', [AkunController::class, 'delete'])->name('akun.delete');

