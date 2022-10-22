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
                <h2 class="page-title">Edit Data Outlet</h2>
                <p> Edit Data Outlet Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Outlet</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('dataoutlet.update', $outlet->id) }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama Outlet</label>
                                        <input type="text" id="simpleinput" name="nama_outlet" value="{{ $outlet->nama_outlet }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Alamat</label>
                                        <input type="text" id="simpleinput" name="alamat_outlet" value="{{ $outlet->alamat_outlet }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Telepon</label>
                                        <input type="number" id="simpleinput" name="telepon_outlet" value="{{ $outlet->telepon_outlet }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Email</label>
                                        <input type="email" id="simpleinput" name="email_outlet" value="{{ $outlet->email_outlet }}" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label" name="upload" id="upload">Foto</label>
                                        <input class="form-control @error('upload') is-invalid @enderror" type="file" name="upload" id="simpleinput">
                                    </div>
                                    <div>
                                        <img src="{{ asset('storage/' . $outlet->upload) }}" width="200px" alt="">
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
