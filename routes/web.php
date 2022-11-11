<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PaketController;
use App\Http\Controllers\OutletController;
use App\Http\Controllers\profilController;
use App\Http\Controllers\cksatuanController;
use App\Http\Controllers\TemplateController;
use App\Http\Controllers\ckstncustController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\transaksiController;
use App\Http\Controllers\ProfilCustController;
use App\Http\Controllers\user_outletsController;
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
    return view('customer.halutama');
});
// TEMPLATE ADMIN
Route::get('/template', [TemplateController::class, 'index']);
Route::view('/laporantransaksi-add', 'admin.laporantransaksi-add');
Route::view('login', 'auth.login');

Route::middleware(['auth', 'admin'])->group(function () {
    Route::resource('dataoutlet', OutletController::class);
    Route::resource('dashboard', DashboardController::class);
    // Route::resource('kelolapelanggan', kelolaPelangganController::class);
    Route::resource('datapengguna', UserController::class);
    Route::view('/datapaket', 'admin.datapaket');
    Route::get('/datapaketsatuan-add', [PaketController::class, 'createsatuan']);
    Route::post('/datapaketsatuan', [PaketController::class, 'storesatuan']);
    Route::get('/datapaketsatuan-edit/{id}', [PaketController::class, 'editsatuan']);
    Route::put('/datapaketsatuan/{id}', [PaketController::class, 'updatesatuan']);
    Route::get('/datapaketsatuan/{id}', [PaketController::class, 'destroysatuan']);
    Route::resource('datapaket', PaketController::class);
    Route::resource('laporanpegawai', user_outletsController::class);
    Route::view('/laporantransaksi', 'admin.laporantransaksi');
    Route::view('/tambah-datapaket', 'admin.datapaket-add');
    Route::view('/edit-datapaket', 'admin.datapaket-edit');
    
    Route::get('json', function () {
        return view('json');
    });
    
    Route::get('export', [OutletController::class, 'export']);
    Route::get('dataoutlet-add', [OutletController::class, 'wilayah']);
});

// NAVBAR CUSTOMER
Route::middleware(['auth', 'customer'])->group(function () {
    Route::view('dashboard', 'layouts/dashboard');
    Route::resource('customer', ckstncustController::class);
    Route::get('midtrans/{id}',[ckstncustController::class, 'midtrans']);
    Route::view('/pesan', 'customer.pesan');
    Route::view('/datatable', 'customer.datatable');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('kelolapelanggan', kelolaPelangganController::class);
    Route::resource('profile', profilController::class);
    Route::resource('transaksi', transaksiController::class);
    Route::resource('profil', ProfilCustController::class);
    Route::post('profil/success', [ckstncustController::class, 'success']);
    Route::resource('layanan', cksatuanController::class);        
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
