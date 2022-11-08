@extends('layouts.template')

@section('title', ' Tambah Data Outlet')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</a></li>
            <li class="breadcrumb-item"><a href="/dataoutlet">Data Outlet</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Data Outlet</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Data Outlet</h2>
                <p> Tambah Data Outlet Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Outlet</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('dataoutlet.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama Outlet</label>
                                        <input type="text" id="simpleinput" name="nama_outlet" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Alamat</label>
                                        <input type="text" id="simpleinput" name="alamat_outlet" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Telepon</label>
                                        <input type="number" id="simpleinput" name="telepon_outlet" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Email</label>
                                        <input type="email" id="simpleinput" name="email_outlet" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Provinsi</label>
                                        <select class="form-control" onchange="daerah(id,value)" id="provinces"></select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kabupaten</label>
                                        <select class="form-control" onchange="daerah(id,value)" id="regencies"></select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kecamatan</label>
                                        <select name="kecamatan" class="form-control" onchange="daerah(id,value)" id="districts"></select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kelurahan</label>
                                        <select name="kelurahan" class="form-control" onchange="daerah(id,value)" id="villages"></select>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput" class="form-label">Foto</label>
                                        <input class="form-control" type="file" name="upload" id="simpleinput">
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
