@extends('layouts.template')

@section('title', 'Edit Data Outlet')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</a></li>
            <li class="breadcrumb-item"><a href="/dataoutlet">Data Outlet</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data Outlet</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Edit Data Profil</h2>
                <p> Edit Data Profil Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Profil</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('profile.update', $profil1->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama Profil</label>
                                        <input type="text" id="simpleinput" name="name" value="{{ $profil1->name }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Gender</label>
                                        <select name="gender" id="gender" class="form-control" required>
                                            <option value="{{ $profil1->gender }}">{{ $profil1->gender }}</option>
                                            @if ($profil1->gender == 'Laki-Laki')
                                                <option value="Perempuan">Perempuan</option>
                                            @else
                                                <option value="Laki-Laki">Laki-Laki</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Telepon</label>
                                        <input type="number" id="simpleinput" name="telephone" value="{{ $profil1->telephone }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Email</label>
                                        <input type="email" id="simpleinput" name="email" value="{{ $user->email }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Alamat</label>
                                        <input type="text" id="simpleinput" name="address" value="{{ $profil1->address }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kecamatan</label>
                                        <input type="text" id="simpleinput" name="kecamatan" value="{{ $profil1->kecamatan }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kelurahan</label>
                                        <input type="text" id="simpleinput" name="kelurahan" value="{{ $profil1->kelurahan }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Foto</label>
                                        <input class="form-control" type="file"  name="image" id="simpleinput">
                                    </div>
                                    <div class="form-group mb-3"> 
                                        <p>Foto sebelumnya :</p>
                                        <img src="{{ asset('storage/' . $profil1->image) }}" width="150px" alt="" style="border-radius: 0.5rem;">
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