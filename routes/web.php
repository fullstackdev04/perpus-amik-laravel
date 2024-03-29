<?php

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
    return view('welcome');
});


Route::get('/login', function() {
    return view('login');
});

Route::get('/home', function() {
    return view('home');
});

Route::get('/biliobigraphy', function() {
    return view('bilio');
});

Route::get('/biliobigraphy/tambah', function() {
    return view('form.bilio-form');
});

Route::get('/anggota', function() {
    return view('anggota');
});

Route::get('/anggota/tambah', function() {
    return view('form.anggota-form');
});

Route::get('/eksemplar', function() {
    return view('eksemplar');
});

Route::get('/eksemplar-keluar', function() {
    return view('eksemplar/eksemplar-keluar');
});

Route::get('/dokumen', function() {
    return view('dokumen');
});


Route::get('/keterlambatan', function() {
    return view('keterlambatan');
});