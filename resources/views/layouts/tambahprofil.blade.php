@extends('layouts.template')

@section('title', 'Data Pengguna')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Profil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Profil</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Data Profil</h2>
                <p>Silahkan lengkapi data profil anda.</p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Profil</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('profile.store') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <div class="d-none mb-3">
                                        <label for="simpleinput">ID</label>
                                        <input type="number" readonly name="id" value="{{ Auth::user()->id }}"
                                            id="" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama</label>
                                        <input type="text" name="name" id="simpleinput" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Gender</label>
                                        <select name="gender" id="simpleinput" class="form-control">
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Address</label>
                                        <input type="text" name="address" id="simpleinput" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kecamatan</label>
                                        <input type="text" name="kecamatan" id="simpleinput" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kelurahan</label>
                                        <input type="text" name="kelurahan" id="simpleinput" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="simpleinput">No. telepon</label>
                                        <input type="number" min="0" name="telephone" id="simpleinput"
                                            class="form-control">
                                    </div>

                                    <div class="d-none mb-3">
                                        <label for="simpleinput">ID User</label>
                                        <input type="number" readonly name="user_id" value="{{ Auth::user()->id }}"
                                            id="" class="form-control">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Foto</label>
                                        <input type="file" min="0" name="image" required id="simpleinput"
                                            class="form-control">
                                    </div>

                                    <input type="submit" id="" class="btn btn-primary">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endsection
