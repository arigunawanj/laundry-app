<?php

namespace App\Http\Controllers;

use App\Models\detail_profiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class profilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user()->id;
        // $profil = DB::select('select detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address from detail_profiles join users on detail_profiles.user_id = users.id where user_id = ?', [2]);
        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);
        // dd($profil);
        $id = detail_profiles::all();
        return view('layouts.profile', compact('profil', 'id'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.tambahprofil');
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
        // $id = Auth::user()->id;
        // DB::insert('insert into detail_profiles (name, gender, address, telephone, image) values (?, ?, ?, ?, ?)', [$request->name, $request->gender, $request->address, $request->telephone, $request->image]);

        // $validator = $request->validate([
        //     'name'=>'required|integer',
        //     'gender'=>'required|string',
        //     'address'=>'required|string',
        //     'kecamatan'=>'required|string',
        //     'kelurahan'=>'required|string',
        //     'telephone'=>'required|integer',
        //     'user_id'=>'required|integer',
        //     'image'=>'required|image|max:10000|mimes:jpg'
        // ]);

        $file = $request->file('image')->store('img');

        detail_profiles::create([
            'name' => $request ->name,
            'gender' => $request ->gender,
            'address' => $request ->address,
            'kecamatan' => $request ->kecamatan,
            'kelurahan' => $request ->kelurahan,
            'telephone' => $request ->telephone,
            'user_id' => $request ->user_id,
            'image' => $file
        ]);

        // detail_profiles::create($validator);
        
        return redirect('profile');

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
        $profil = detail_profiles::findOrFail($id);
        return view('layouts.editprofil', compact('profil'));
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
        $validator = $request->validate([
            'name' => 'required',
            'gender' => 'required',
            'telephone' => 'required',
            'address' => 'required',
        ]);

        $email = $request->validate([
            'email' => 'required',
        ]);

        $no = Auth::user()->id;

        $profil = detail_profiles::findOrFail($id);
        $user = User::find($no);
        if($request->hasFile('upload')){
            $request->validate([
                'image' => 'required|image|max:10000|mimes:jpg'
            ]);
            Storage::delete($profil->image);
            $upload = $request->image;
            $extension = $request->file('upload')->getClientOriginalExtension();
            $newName = $request->name.'-'.now()->timestamp.'.'.$extension;
            $data = $request->file('upload')->storeAs('img', $newName);
        }

        $validator['upload'] = $data;
        $profil->update($validator);
        $user->update($email);

        return redirect('profile');
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
