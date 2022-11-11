@extends('layouts.template')

@section('title', 'Data Pengguna')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Edit Data Pengguna</h2>
                <p> Edit Data Pengguna Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Pengguna</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('datapengguna.update', $user->id) }}" method="POST">
                                    @csrf
                                    @method('put')
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama</label>
                                        <input type="text" id="simpleinput" name="name" value="{{ $user->name }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Password</label>
                                        <input type="text" id="simpleinput" name="password" value="{{ $user->password }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Email</label>
                                        <input type="email" id="simpleinput" name="email" value="{{ $user->email }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Posisi</label>
                                        <select class="form-control @error('role_id') is-invalid @enderror" name="role_id">
                                            <option value="">Pilih Posisi</option>
                                            @foreach ($role as $item)
                                                <option value="{{ $item->id }}" @selected($user->role_id == $item->id)>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
