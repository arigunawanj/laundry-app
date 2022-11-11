<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Outlet;
use Illuminate\Http\Request;
use App\Exports\OutletExport;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Maatwebsite\Excel\Concerns\Exportable;

class OutletController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user()->id;
        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);
        $outlet = Outlet::all();
        return view('admin.dataoutlet', compact('outlet', 'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $outlet = Outlet::all();
        $user = User::all();
        $data = Auth::user()->id;

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        return view('admin.dataoutlet-add', compact('outlet', 'profil', 'user'));
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
            'kecamatan' => 'required',
            'kelurahan' => 'required',
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

        $kec = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/districts/3573.json');
        $decpro = json_decode($kec, true);  
        // dd($decpro);
        $jml = sizeof($decpro);

        for($i = 0; $i < $jml; $i++){
            if($decpro[$i]['id'] == $request->kecamatan){
                $kec = $decpro[$i]['name'];
            }
        }

        $kel = Http::get('https://www.emsifa.com/api-wilayah-indonesia/api/villages/'.$request->kecamatan.'.json');
        $decpro = json_decode($kel, true);
        $jml = sizeof($decpro);

        for($i = 0; $i < $jml; $i++){
            if($decpro[$i]['id'] == $request->kelurahan){
                $kel = $decpro[$i]['name'];
            }
        }
        
        $outlet = Outlet::create([
            'nama_outlet' => $request->nama_outlet,
            'alamat_outlet' => $request->alamat_outlet,
            'telepon_outlet' => $request->telepon_outlet,
            'email_outlet' => $request->email_outlet,
            'kecamatan' => $kec,
            'kelurahan' => $kel,
            'upload' => $validator['upload']
        ]);

        Alert::success('Data Outlet', 'Data Outlet Berhasil ditambahkan');
        return redirect('dataoutlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function show(Outlet $outlet, $id)
    {
        $outlet = Outlet::findOrFail($id);
        
        $data = Auth::user()->id;
        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);
        
        return view('admin.dataoutlet-detail', compact('outlet', 'profil'));
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
        $data = Auth::user()->id;

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);
        return view('admin.dataoutlet-edit', compact('outlet', 'profil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Outlet $outlet, $id)
    {
        $validator = $request->validate([
            'nama_outlet' => 'required',
            'alamat_outlet' => 'required',
            'telepon_outlet' => 'required',
            'email_outlet' => 'required',
        ]);
        
        $outlet = Outlet::findOrFail($id);
        
        $newName = '';
        $data = '';
        if($request->hasFile('upload')){
            $request->validate([
                'upload' => 'required|image|max:10000|mimes:jpg'
            ]);
            Storage::delete($outlet->upload);
            $upload = $request->upload;
            $extension = $request->file('upload')->getClientOriginalExtension();
            $newName = $request->nama_outlet.'-'.now()->timestamp.'.'.$extension;
            $data = $request->file('upload')->storeAs('img', $newName);
        }

        $validator['upload'] = $data;
        $outlet->update($validator);

        
        return redirect('dataoutlet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Outlet  $outlet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Outlet $outlet, $id)
    {
        $outlet = Outlet::findOrFail($id);
        if(Storage::delete($outlet->upload)){
            Storage::delete($outlet->upload);
        }
        $outlet->delete();
        Alert::warning('Hapus Data Outlet', 'Berhasil Hapus Data');
        return redirect('dataoutlet');
    }

    public function export()
    {
        // return Excel::download(new OutletExport, 'LaporanOutlet.xlsx');

        return (new OutletExport)->download('invoices.pdf', \Maatwebsite\Excel\Excel::MPDF);
        
    }

    public function wilayah()
    {
        $data = Http::get('http://www.emsifa.com/api-wilayah-indonesia/api/provinces.json');
        return $data->json();
        // dd($data->json());
    }
    
}
