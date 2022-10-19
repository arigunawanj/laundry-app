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
    return view('layouts.dashboard');
});
// TEMPLATE ADMIN
Route::view('/template', 'layouts.template');

// NAVBAR ADMIN
Route::view('/dataoutlet', 'admin.dataoutlet');
Route::view('/datapaket', 'admin.datapaket');
Route::view('/datapengguna', 'admin.datapengguna');
Route::view('/kelolapelanggan', 'admin.kelolapelanggan');
Route::view('/laporanpegawai', 'admin.laporanpegawai');
Route::view('/laporantransaksi', 'admin.laporantransaksi');
Route::view('/registrasipelanggan', 'admin.registrasipelanggan');
Route::view('/transaksiadmin', 'admin.transaksiadmin');
Route::view('/tambah-dataoutlet', 'admin.dataoutlet-add');
Route::view('/edit-dataoutlet', 'admin.dataoulet-edit');
Route::view('/tambah-datapaket', 'admin.datapaket-add');
Route::view('/edit-datapaket', 'admin.datapaket-edit');
Route::view('/tambah-datapengguna', 'admin.datapengguna-add');
Route::view('/edit-datapengguna', 'admin.datapengguna-edit');

