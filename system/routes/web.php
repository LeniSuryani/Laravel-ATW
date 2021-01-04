<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\PromoController;
use App\Http\Controllers\UserKategoriController;
use App\Http\Controllers\UserProdukController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UploadController;

Route::get('/', function () {
    return view('welcome');
});


////////      ADMIN
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::resource('produk', ProdukController::class);
    Route::post('produk/filter', [ProdukController::class, 'filter']);
    Route::resource('kategori', KategoriController::class);
    Route::resource('user', UserController::class);
    Route::resource('promo', PromoController::class);
});


///////      USER
Route::get('template', [UserKategoriController::class, 'showBeranda']);
// menampilkan promo
Route::get('userpromo', [UserProdukController::class, 'promo']);
// menampilkan produk
Route::get('userproduk', [UserProdukController::class, 'index']);
// Route::post('userproduk/filter', [UserProdukController::class, 'filter']);
Route::get('userproduk/{userproduk}', [UserProdukController::class, 'show']);
// login
Route::get('login', [AuthController::class, 'showLogin'])->name('login');
Route::post('login', [AuthController::class, 'loginProcess']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('register', [AuthController::class, 'showRegister']);
Route::post('register', [AuthController::class, 'storeRegister']);

// filter
Route::post('userproduk/filterNama', [UserProdukController::class, 'filterNama']);
Route::post('userproduk/filterHarga', [UserProdukController::class, 'filterHarga']);
Route::post('userproduk/filterSize', [UserProdukController::class, 'filterSize']);
Route::post('userproduk/filterColor', [UserProdukController::class, 'filterColor']);
// akhir filter


// ////////////////  ADMIN dan pengguna  /////////////////////////////////
Route::get('/template.discount', [HomeController::class, 'showDiscount']);
Route::get('template.admin', [AdminController::class, 'showAdminBeranda']);
Route::get('/template.admin', function () { ////sebagai halaman utama
    return view('template.admin.beranda');
});

Route::get('test-ajax', [HomeController::class, 'testAjax']);




/*
contoh crud yg baru"
Route::resource('produk', ProdukController::class);


contoh crud yg lama:
Route::get('produk', [ProdukController::class, 'index']); //mendefinisikan link, lalu di arahkan ke controller yg menampilkan view.produk.index
Route::get('produk/create', [ProdukController::class, 'create']);
Route::post('produk', [ProdukController::class, 'store']); //dari view(create)lalu ke routes dan mengarah ke Produk Controller
Route::get('produk/{produk}', [ProdukController::class, 'show']);
Route::get('produk/{produk}/edit', [ProdukController::class, 'edit']);
Route::put('produk/{produk}', [ProdukController::class, 'update']);
Route::delete('produk/{produk}', [ProdukController::class, 'destroy']);

*/