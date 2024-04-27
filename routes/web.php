<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});

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