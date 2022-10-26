<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
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
        // $user = User::with('Detail_profile');
        $user = DB::select('select d.image, u.name, u.email, r.name as role_name from users u, detail_profiles d, roles r where u.role_id = r.id and d.user_id = u.id');
        // dd($user-);

        // $role = Role::all();
        //   $user = DB::select('SELECT u.name, 
        //   u.id, u.email, 
        //   r.name from users as u 
        //   join roles as r on u.role_id = r.id');

        return view('admin.datapengguna', compact('user'));
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
        // $validator = $request->validate([
        //     'upload' => 'required|image|max:10000|mimes:jpg',
        //     'name' => 'required',
        //     'id' => 'required',
        //     'email' => 'required',
        //     'role_id' => 'required',
        // ]);

        $validator = $request->validate([
            'name' => 'required',
            'id' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role_id' => 'required'
        ]);

        User::create($validator);

        return redirect('datapengguna');

        // $newName = '';

        // if ($request->file('upload')) {
        //     $extension = $request->file('upload')->getClientOriginalExtension();
        //     $newName = $request->name . '-' . now()->timestamp . '.' . $extension;
        //     $data = $request->file('upload')->storeAs('img', $newName);
        // };



        // // $file = $request->file('upload')->store('img');
        // // $validator['upload'] = $file;

        // $validator['upload'] = $data;
        // $data = User::create($validator);

        // return redirect('datapengguna');
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
            'name' => 'required',
            'id' => 'required',
            'email' => 'required',
            'password' => 'required',
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
    public function destroy($id)
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
