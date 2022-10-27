<?php

namespace App\Http\Controllers;

use App\Models\Detail_profile;
use App\Models\detail_profiles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class kelolaPelangganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::select('select d.name, d.address, d.kecamatan, d.kelurahan, u.role_id from detail_profiles d join users u on d.user_id = u.id where u.role_id = 3 and 4');
        // $data = DB::select('select * from users where id = 3');

        // dd($data);

        // $data = DB::table('users')->join('detail_profiles', 'user_id', '=', 'users.id')->where('users.role_id', '=', '3')->select('users.*')->get();

        // $data = User::where('role_id', 3)->join('detail_profiles', 'detail_profiles.user_id', '=', 'users.id')->get();

        // $data = User::whereHas('Detail_profile', function($query){
        //     $query->whereUserID(3);
        // });
        $id = Auth::user()->id;
        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $id);
        // $data = Detail_profile::all();

        return view('admin.kelolapelanggan', compact('profil', 'data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
