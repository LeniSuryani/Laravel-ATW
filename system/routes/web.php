<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/t_pertambangan', function () {
    return view("t_pertambangan");
});

////////////////// pengguna ////////////////////////////

Route::get('/template', function () {
    return view('template.base');
});

Route::get('/template.product', function () {
    return view('template.product');
});

Route::get('/template.discount', function () {
    return view('template.discount');
});

Route::get('/template.detail', function () {
    return view('template.detail');
});

//////////Admin
Route::get('/template.admin', function () { ////sebagai halaman utama
    return view('template.admin.beranda');
});

Route::get('/template.admin.kategori', function () {
    return view('template.admin.kategori');
});

Route::get('/template.admin.promo', function () {
    return view('template.admin.promo');
});

Route::get('/template.admin.master', function () {
    return view('template.admin.master');
});

Route::get('/template.admin.produk', function () {
    return view('template.admin.produk');
});
