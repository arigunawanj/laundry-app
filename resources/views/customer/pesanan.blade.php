@extends('layouts.template')

@section('title', 'Pesanan')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pesanan</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Data Pesanan</h2>
                <p> Data Pesanan Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Pesanan</h5>
                                <p class="card-text">Daftar Pesanan Karisma Laundry </p>
                                <table class="table table-hover text-center mt-4">
                                    <thead>
                                        <tr>
                                            <th class="text-dark">No</th>
                                            <th class="text-dark">Kode invoice</th>
                                            <th class="text-dark">Paket satuan</th>
                                            <th class="text-dark">Jumlah barang</th>
                                            <th class="text-dark">Metode pembayaran</th>
                                            <th class="text-dark">Total harga</th>
                                            <th class="text-dark">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $d->kd_invoicesatuan }}</td>
                                            <td>{{ $d->paket_satuan->nama_paketsatuan }}</td>
                                            <td>{{ $d->jumlah_barang }}</td>
                                            <td>{{ $d->pay_satuan }}</td>
                                            <td><span id="harga">{{ $d->harga_totalsatuan }}</span></td>
                                            <td><button class="btn btn-primary" id="bayar">Bayar</button></td>
                                        </tr>                                            
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                @endsection