<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'auth.login');

// TEMPLATE ADMIN
Route::view('/template', 'layouts.template');

Route::middleware(['admin'])->group(function () {
    Route::view('/dashboard', 'layouts.dashboard');
    Route::view('/dataoutlet', 'admin.dataoutlet');
    Route::view('/datapaket', 'admin.datapaket');
    Route::view('/datapengguna', 'admin.datapengguna');
    Route::view('/kelolapelanggan', 'admin.kelolapelanggan');
    Route::view('/laporanpegawai', 'admin.laporanpegawai');
    Route::view('/laporantransaksi', 'admin.laporantransaksi');
    Route::view('/registrasipelanggan', 'admin.registrasipelanggan');
    Route::view('/transaksiadmin', 'admin.transaksiadmin');
    Route::view('/tambah-dataoutlet', 'admin.dataoutlet-add');
    Route::view('/edit-dataoutlet', 'admin.dataoutlet-edit');
});


Route::middleware(['pegawai'])->group(function () {
    Route::view('/dashboard', 'layouts.dashboard');
    Route::view('/kelolapelanggan', 'pegawai.kelolapelanggan');
    Route::view('/laporantransaksi', 'pegawai.laporantransaksi');
    Route::view('/registrasipelanggan', 'pegawai.registrasipelanggan');
    Route::view('/transaksipelanggan', 'pegawai.transaksipelanggan');
});

Route::middleware(['customer'])->group(function () {
    Route::view('/dashboard', 'layouts.dashboard');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
