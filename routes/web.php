<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('profil');
});
Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/tugas', function () {
    return view('tugas', ['nama'=>'haytra']);
});
Route::get('/contac', function () {
    return view('/contac');
});