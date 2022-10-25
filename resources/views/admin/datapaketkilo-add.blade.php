@extends('layouts.template')

@section('title', 'Data Paket')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Paket</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Data Paket</h2>
                <p> Tambah Data Paket Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Paket</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('datapaket.store') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="form-group mb-3">
                                <label for="simpleinput">Kode Paket</label>
                                <input type="text" id="simpleinput" name="kd_paketkilo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Nama Paket</label>
                                <input type="text" id="simpleinput" name="nama_paketkilo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Harga</label>
                                <input type="text" id="simpleinput" name="harga_paketkilo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Hari</label>
                                <input type="text" id="simpleinput" name="hari_paketkilo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Minimal Berat</label>
                                <input type="text" id="simpleinput" name="min_berat_paket" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Antar Jemput Paket</label>
                                <input type="text" id="simpleinput" name="antar_jemput_paket" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Outlet</label>
                                <input type="text" id="simpleinput" name="outlet_id" class="form-control">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection