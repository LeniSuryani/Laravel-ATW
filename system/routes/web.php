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

Route::get('/t_informatika', function () {
    return view("t_informatika");
});

Route::get('/t_sipil', function () {
    return view("t_sipil");
});

Route::get('/t_elektro', function () {
    return view("t_elektro");
});

Route::get('/t_pertambangan', function () {
    return view("t_pertambangan");
});

//////////////////////////////////////////////

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
