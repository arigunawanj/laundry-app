<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Paket_satuan;
use Illuminate\Http\Request;
use App\Models\Checkout_satuan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;

class cksatuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Auth::user()->id;
        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        $paket = Paket_satuan::all();
        $user = User::all()->whereIn('role_id', [3,4]);

        return view('admin.registrasipelanggan', compact('profil', 'paket', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Checkout_satuan::create([
            'kd_invoicesatuan' => 'KS'.rand(),
            'paket_satuan_id' => $request -> paket_satuan_id,
            'user_id' => $request -> user_id,
            'jumlah_barang' => $request -> jumlah_barang,
            'pay_satuan' => $request -> pay_satuan,
            'harga_paketsatuan' => $request -> harga_paketsatuan, 
            'harga_totalsatuan' => $request -> harga_totalsatuan
        ]);
        Alert::toast('Berhasil Tambah Data', 'success');
        return redirect('kelolapelanggan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
