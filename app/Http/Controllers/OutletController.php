<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Exports\OutletExport;
use Maatwebsite\Excel\Facades\Excel;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $outlet = Outlet::all();
        return view('admin.dataoutlet', compact('outlet'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outlet = Outlet::all();
        return view('admin.dataoutlet-add', compact('outlet'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $validator = $request->validate([
            'nama_outlet' => 'required',
            'alamat_outlet' => 'required',
            'telepon_outlet' => 'required',
            'email_outlet' => 'required',
            'upload' => 'required|image|max:10000|mimes:jpg'
        ]);

        $newName = '';

        if($request->file('upload')){
            $extension = $request->file('upload')->getClientOriginalExtension();
            $newName = $request->nama_outlet.'-'.now()->timestamp.'.'.$extension;
            $data = $request->file('upload')->storeAs('img', $newName);
        };

    

        // $file = $request->file('upload')->store('img');
        // $validator['upload'] = $file;
        
        $validator['upload'] = $data;
        $outlet = Outlet::create($validator);

        return redirect('dataoutlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $outlet = Outlet::findOrFail($id);
        return view('admin.dataoutlet-edit', compact('outlet'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet)
    {
        //
    }

    public function export()
    {
        return Excel::download(new OutletExport, 'LaporanOutlet.xlsx');
    }
}
