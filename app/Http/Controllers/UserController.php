<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Auth::user()->id;
        
        $user = DB::select('select d.image, u.id, u.name, u.email, r.name as role_name from users u, detail_profiles d, roles r where u.role_id = r.id and d.user_id = u.id');

        $profil = DB::select('select detail_profiles.id, detail_profiles.user_id, detail_profiles.name, detail_profiles.gender, users.email, detail_profiles.telephone, detail_profiles.address, detail_profiles.image from detail_profiles join users on detail_profiles.user_id = users.id where user_id=' . $data);

        // $role = Role::all();
        //   $user = DB::select('SELECT u.name, 
        //   u.id, u.email, 
        //   r.name from users as u 
        //   join roles as r on u.role_id = r.id');

        return view('admin.datapengguna', compact('user' ,'profil'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Role::all();
        return view('admin.datapengguna-add', compact('user'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required',
            'image' => 'required|image|max:10000|mimes:jpg'
        ]);

        $newName = '';

        if($request->file('image')){
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->nama_outlet.'-'.now()->timestamp.'.'.$extension;
            $data = $request->file('image')->storeAs('img', $newName);
        };

    

        // $file = $request->file('upload')->store('img');
        // $validator['upload'] = $file;
        
        $validator['image'] = $data;
        $user = User::create($validator);

        return redirect('datapengguna');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('admin.datapengguna-detail', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $user = User::findOrFail($id);
        // return view('admin.datapengguna-edit', compact('user'));

        $user = User::findOrFail($id);
        $role = Role::all();

        return view('admin.datapengguna-edit', compact('user', 'role'));
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
        // $validator = $request->validate([
        //     'name' => 'required',
        //     'id' => 'required',
        //     'email' => 'required',
        //     'role_id' => 'required',
        // ]);

        $user = User::findOrFail($id);
        // $data->update($request->all());

        $validator = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
            'role_id' => 'required'
        ]);

        $user->update($validator);

        return redirect('datapengguna');

        // $user = User::findOrFail($id);

        // $newName = '';
        // $data = '';
        // if ($request->hasFile('upload')) {
        //     $request->validate([
        //         'upload' => 'required|image|max:10000|mimes:jpg'
        //     ]);
        //     Storage::delete($user->upload);
        //     $upload = $request->upload;
        //     $extension = $request->file('upload')->getClientOriginalExtension();
        //     $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
        //     $data = $request->file('upload')->storeAs('img', $newName);
        // }

        // $validator['upload'] = $data;
        // $user->update($validator);

        // return redirect('datapengguna');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user, $id)
    {
        // $user = User::findOrFail($id);
        // if (Storage::delete($user->upload)) {
        //     Storage::delete($user->upload);
        // }
        // $user->delete();
        // return redirect('datapengguna');
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('datapengguna');
    }
}
