<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paket_kilo;
use App\Models\Paket_satuan;

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
        // dd($paketk);
        return view('admin.datapaket', compact('paketk','paketsat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paketk = Paket_kilo::all();
        $paketsat = Paket_satuan::all();
        // dd($paketk);
        return view('admin.datapaketkilo-add', compact('paketk'));
        return view('admin.datapaketsatuan-add', compact('paketsat'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validators = $request->validate([
            'kd_paketsatuan' => 'required',
            'nama_paketsatuan' => 'required',
            'ket_paketsatuan' => 'required',
            'harga_paketsatuan' => 'required',
            'outlet_id' => 'required'
            
        ]);
        
        dd($request);
        
        $paket = Paket_satuan::create($validators);
        return redirect('datapaket');

        $validatork = $request->validate([
        'kd_paketkilo'=> 'required',
        'nama_paketkilo'=> 'required',
        'harga_paketkilo'=> 'required',
        'hari_paketkilo'=> 'required',
        'min_berat_paket'=> 'required',
        'antar_jemput_paket'=> 'required',
        'outlet_id' => 'required'
            
        ]);
        
        dd($request);
        
        $paket = Paket_kilo::create($validatork);
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
