<?php

use function Termwind\style;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OutletController;

use App\Http\Controllers\profilController;
use App\Http\Controllers\kelolaPelangganController;

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
    return view('auth.login');
});
// TEMPLATE ADMIN
Route::view('/template', 'layouts.template');

// NAVBAR ADMIN
// Route::view('/dataoutlet', 'admin.dataoutlet');
// Route::view('/tambah-dataoutlet', 'admin.dataoutlet-add');
// Route::view('/edit-dataoutlet', 'admin.dataoulet-edit');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::view('/dashboard', 'layouts/dashboard');
    Route::resource('dataoutlet', OutletController::class);
    Route::resource('kelolapelanggan', kelolaPelangganController::class);
    Route::resource('datapengguna', UserController::class);
    Route::view('/datapaket', 'admin.datapaket');
    Route::view('/datapengguna', 'admin.datapengguna');
    Route::view('/kelolapelanggan', 'admin.kelolapelanggan');
    Route::view('/laporanpegawai', 'admin.laporanpegawai');
    Route::view('/laporantransaksi', 'admin.laporantransaksi');
    Route::view('/registrasipelanggan', 'admin.registrasipelanggan');
    Route::view('/transaksiadmin', 'admin.transaksiadmin');
    Route::view('/tambah-datapaket', 'admin.datapaket-add');
    Route::view('/edit-datapaket', 'admin.datapaket-edit');

    Route::get('export', [OutletController::class, 'export']);
});

// NAVBAR CUSTOMER
Route::middleware(['auth', 'customer'])->group(function () {
    Route::view('dashboard', 'layouts/dashboard');
    Route::view('/pesan', 'customer.pesan');
    Route::view('/pesanan', 'customer.pesanan');
    Route::view('/datatable', 'customer.datatable');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('profile', profilController::class);
});
// Route::view('profile', 'customer.profile');



// Route::view('dashboard', 'layouts/dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
