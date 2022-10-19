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
// TEMPLATE ADMIN
Route::view('/template', 'layouts.template');
Route::view('/dashboard', 'layouts.dashboard');

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
Route::view('/edit-dataoutlet', 'admin.dataoutlet-edit');

// NAVBAR CUSTOMER
Route::view('/pesan', 'customer.pesan');
Route::view('/pesanan', 'customer.pesanan');
Route::view('/datatable', 'customer.datatable');
