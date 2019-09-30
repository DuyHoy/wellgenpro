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

Route::get('/tiny', function () {
    return view('testtiny');
});
Route::get('/', function () {
    return view('frontend.home-layout');
});
Route::get('/gioithieu', function () {
    return view('layout.gioithieu_layout');
});
Route::get('/vantayhoc', function () {
    return view('frontend.vantayhoc');
});
Route::get('/khoahoc', function () {
    return view('frontend.khoahoc');
});
Route::get('/khoahoc2', function () {
    return view('layout.content');
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
Route::get('/newsdetail', function () {
    return view('layout.newsdetail_layout');
});
Route::get('/admin/create', function () {
    return view('admin.create');
});
Route::get('/admin/update', function () {
    return view('admin.update');
});
Route::get('/admin/delete', function () {
    return view('admin.delete');
});

Route::resource('posts', 'PostsController');
Route::resource('category', 'CategoriesController');


// Route::get('/create','ContactController@create');
// Route::resource('contact', 'ContactController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
