@extends('layouts.template')

@section('title', 'Data Paket')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Data</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Data Paket Kilo</li>
    </ol>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Tambah Data Paket Kilo</h2>
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
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Rp</div>
                                        </div>
                                        <input type="number" min="1" class="form-control" id="simpleinput" name="harga_paketkilo" placeholder="Harga paket">
                                    </div>
                                    {{-- <input type="text" id="simpleinput" name="harga_paketkilo" class="form-control"> --}}
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Hari</label>
                                    <input type="text" id="simpleinput" name="hari_paketkilo" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Minimal Berat</label>
                                    {{-- <input type="text" id="simpleinput" name="min_berat_paket" class="form-control"> --}}
                                    <div class="input-group mb-2 mr-sm-2">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">Kg</div>
                                        </div>
                                        <input type="number" min="1" class="form-control" id="simpleinput" name="min_berat_paket">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Antar Jemput Paket</label>
                                    <input type="text" id="simpleinput" name="antar_jemput_paket" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Outlet</label>
                                    <select name="outlet_id" id="" class="form-control">
                                        @foreach ($outlet as $item)
                                        <option value="{{ $item->id }}" class="form-control">{{ $item->nama_outlet }}</option>
                                        @endforeach
                                    </select>
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
