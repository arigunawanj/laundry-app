<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Detail_profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilCustController extends Controller
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
        // $id = Detail_profile::all();
        return view('customer.profil', compact('profil'));
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

        return view('customer.profil-add', compact('profil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file = $request->file('image')->store('img');

        Detail_profile::create([
            'id' => $request->id,
            'name' => $request->name,
            'gender' => $request->gender,
            'address' => $request->address,
            'kecamatan' => $request->kecamatan,
            'kelurahan' => $request->kelurahan,
            'telephone' => $request->telephone,
            'user_id' => $request->user_id,
            'image' => $file
        ]);

        // detail_profiles::create($validator);

        return redirect('profil');
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
        $data = Auth::user()->id;

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        $profil1 = Detail_profile::findOrFail($id);
        $user = User::findOrFail($id);
        return view('customer.profil-edit', compact('profil1', 'user', 'profil'));
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
            'kecamatan' => 'required',
            'kelurahan' => 'required'
        ]);

        $email = $request->validate([
            'email' => 'required',
        ]);

        $no = Auth::user()->id;
        
        $profil = Detail_profile::findOrFail($id);

        $user = User::find($no);

        $profil->update($validator);

        $user->update($email);

        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|image|max:10000|mimes:jpg'
            ]);
            Storage::delete($profil->image);
            // $upload = $request->image;
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
            $data = $request->file('image')->storeAs('img', $newName);
            $profil->update([
                'image'=>$data
            ]);
        } else {
            $profil->update([
                'image'=>$profil->image
            ]);
        }


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