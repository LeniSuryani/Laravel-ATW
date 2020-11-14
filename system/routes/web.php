<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
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

////////////////// pengguna ////////////////////////////
Route::get('template', [HomeController::class, 'showBeranda']);
Route::get('template.product', [HomeController::class, 'showProduct']);
Route::get('template.discount', [HomeController::class, 'showDiscount']);
Route::get('template.detail', [HomeController::class, 'showDetail']);
Route::get('template.login', [AuthController::class, 'showLogin']);


// Route::get('/template', function () {
//     return view('template.base');
// });

/////////// Produk
// get('produk) ini merupakan link/url nya yg bisa di simpen ke menu
// dan class, 'index' merupakan function yg ada di controller
Route::get('produk', [ProdukController::class, 'index']); //mendefinisikan link, lalu di arahkan ke controller yg menampilkan view.produk.index
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']); //dari view(create)lalu ke routes dan mengarah ke Produk Controller
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);



////////////////  ADMIN  /////////////////////////////////

Route::get('template.admin', [AdminController::class, 'showAdminBeranda']);
Route::get('template.admin.kategori', [AdminController::class, 'showAdminKategori']);
Route::get('template.admin.promo', [AdminController::class, 'showAdminPromo']);
Route::get('template.admin.master', [AdminController::class, 'showAdminMaster']);
// Route::get('template.admin.produk', [AdminController::class, 'showAdminProduk']);
Route::get('template.registrasi', [AdminController::class, 'showAdminRegistrasi']);
Route::get('template.admin.leni', [AdminController::class, 'showAdminLeni']);

// Route::get('/template.admin', function () { ////sebagai halaman utama
//     return view('template.admin.beranda');
// });
