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
    return view('frontend.home-layout');
});
Route::get('/gioithieu', function () {
    return view('frontend.gioithiet');
});
Route::get('/vantayhoc', function () {
    return view('frontend.vantayhoc');
});
Route::get('/khoahoc', function () {
    return view('frontend.khoahoc');
});
Route::get('/sukien', function () {
    return view('frontend.sukien');
});
Route::get('/tintuc', function () {
    return view('frontend.tintuc');
});
Route::get('/lienhe', function () {
    return view('frontend.lienhe');
});
Route::get('/doitac', function () {
    return view('frontend.doitac');
});