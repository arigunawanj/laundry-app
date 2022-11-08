<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
        
        if (Auth::user()->role_id == 1) {
            return view('layouts/dashboard', compact('profil'));
        }elseif (Auth::user()->role_id == 2) {
            return view('layouts/dashboard', compact('profil'));
        }elseif (Auth::user()->role_id == 3 || Auth::user()->role_id == 4 ) {
            return view('layouts/dashboard', compact('profil'));
        }
    }
}
