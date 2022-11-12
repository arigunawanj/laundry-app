<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Models\Checkout_satuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $data = Auth::user()->id;
        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);
        $jmlpegawai = User::where('role_id', 1)->orwhere('role_id', 2)->count();
        $jmlpelanggan = User::where('role_id', 3)->orwhere('role_id', 4)->count();
        $jmlpesanan = Checkout_satuan::count();
        $jmloutlet = Outlet::count();
        if (Auth::user()->role_id == 1) {
            Alert::toast('Halo Admin, Selamat Datang', 'success');
            return view('layouts/dashboard', compact('profil','jmlpegawai','jmlpesanan','jmloutlet','jmlpelanggan'));
        }elseif (Auth::user()->role_id == 2) {
            Alert::toast('Halo Pegawai, Selamat Datang', 'success');
            return view('layouts/dashboard', compact('profil','jmlpegawai','jmlpesanan','jmloutlet', 'jmlpelanggan'));
        }elseif (Auth::user()->role_id == 3 || Auth::user()->role_id == 4 ) {
            $id = Auth::user()->id;
            $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $id);
            $data = Checkout_satuan::all()->where('user_id', $id);
            Alert::toast('Halo Customer, Selamat Datang', 'success');
            return view('customer/customer', compact('profil', 'data'));
        }
    }
}
