@extends('layouts.template')

@section('title', 'Tambah laporan Transaksi')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Laporan</li>
            <li class="breadcrumb-item active" aria-current="page"><a href="/laporantransaksi">Laporan Transaksi</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah Laporan Transaksi</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Tambah Laporan Transaksi</h2>
                <p> Tambah Data Laporan Transaksi </p>
                <div class="card-header col-12">
                    <strong class="card-title">Laporan Transaksi</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama Outlet</label>
                                        <input type="text" id="simpleinput" name="kd_paketsatuan" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kode Invoice</label>
                                        <input type="text" id="simpleinput" name="nama_paketsatuan" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Pelanggan</label>
                                        <input type="text" id="simpleinput" name="ket_paketsatuan" class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Tanggal Bayar</label>
                                        <input type="date" id="simpleinput" name="harga_paketsatuan"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Total Bayar</label>
                                        <input type="number" id="simpleinput" name="outlet_id" class="form-control">
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
