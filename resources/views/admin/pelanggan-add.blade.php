@extends('layouts.template')

@section('title', 'Kelola Pelanggan')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Layanan</a></li>
            <li class="breadcrumb-item"><a href="{{ route('kelolapelanggan.index') }}">Kelola Pelanggan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Pelanggan</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Pelanggan</h2>
                <p> Tambah Pelanggan Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Pengguna</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('kelolapelanggan.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Username</label>
                                        <input type="text" id="simpleinput" name="name" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Password</label>
                                        <input type="password" id="simpleinput" name="password" class="form-control"
                                            minlength="8" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Email</label>
                                        <input type="email" id="simpleinput" name="email" class="form-control" required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Posisi</label>
                                        <select class="form-control @error('role_id') is-invalid @enderror" name="role" required>
                                            <option value="4" selected>Non-member</option>
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
