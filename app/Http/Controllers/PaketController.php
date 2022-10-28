<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Models\Paket_kilo;
use App\Models\Paket_satuan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PaketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paketk = Paket_kilo::all();
        $paketsat = Paket_satuan::all();

        $data = Auth::user()->id;

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        // dd($paketk);
        return view('admin.datapaket', compact('paketk','paketsat', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paketk = Paket_kilo::all();
        $outlet = Outlet::all();

        $data = Auth::user()->id;

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        return view('admin.datapaketkilo-add', compact('paketk', 'outlet', 'profil'));

        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatork = $request->validate([
        'kd_paketkilo'=> 'required',
        'nama_paketkilo'=> 'required',
        'harga_paketkilo'=> 'required',
        'hari_paketkilo'=> 'required',
        'min_berat_paket'=> 'required',
        'antar_jemput_paket'=> 'required',
        'outlet_id' => 'required'
            
        ]);
        
        // dd($request);
        
        $paketk = Paket_kilo::create($validatork);
        return redirect('datapaket');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paketk = Paket_kilo::findOrFail($id);

        $data = Auth::user()->id;

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        return view('admin.datapaketkilo-edit', compact('paketk', 'profil'));
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
        $paketk = Paket_kilo::findOrFail($id);
        $validatork = $request->validate([
            'kd_paketkilo'=> 'required',
            'nama_paketkilo'=> 'required',
            'harga_paketkilo'=> 'required',
            'hari_paketkilo'=> 'required',
            'min_berat_paket'=> 'required',
            'antar_jemput_paket'=> 'required',
            'outlet_id' => 'required'
                
        ]);

        $paketk->update($validatork);
        return redirect('datapaket');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paket_kilo $paketk, $id)
    {
        $paketk = Paket_kilo::findOrFail($id);
        $paketk->delete();
        return redirect('datapaket');
    }


    public function createsatuan()
    {
        $pakets = Paket_satuan::all();

        return view('admin.datapaketsatuan-add', compact('pakets'));

        
    }

    public function storesatuan(Request $request)
    {
        $validators = $request->validate([
            'kd_paketsatuan' => 'required',
            'nama_paketsatuan' => 'required',
            'ket_paketsatuan' => 'required',
            'harga_paketsatuan' => 'required',
            'outlet_id' => 'required'
        ]);
        
        // dd($request);
        
        $pakets = Paket_satuan::create($validators);
        return redirect('datapaket');
    }

    public function editsatuan($id)
    {
        $pakets = Paket_satuan::findOrFail($id);
        return view('admin.datapaketsatuan-edit', compact('pakets'));
    }

    public function updatesatuan(Request $request, $id)
    {
        $pakets = Paket_satuan::findOrFail($id);
        $validators = $request->validate([
            'kd_paketsatuan'=> 'required',
            'nama_paketsatuan'=> 'required',
            'ket_paketsatuan'=> 'required',
            'harga_paketsatuan'=> 'required',
            'outlet_id' => 'required'
                
        ]);

        $pakets->update($validators);
        return redirect('datapaket');
    }

    public function destroysatuan(Paket_satuan $pakets, $id)
    {
        $pakets = Paket_satuan::findOrFail($id);
        $pakets->delete();
        return redirect('datapaket');
    }
}
