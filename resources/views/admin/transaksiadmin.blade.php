@extends('layouts.template')

@section('title', 'Transaksi')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
    </ol>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Transaksi</h2>
            <p> Transaksi Karisma Laundry Kota Malang </p>
            <div class="row">
                <!-- simple table -->
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Transaksi</h5>
                            <p class="card-text">Daftar Transaksi Pelanggan </p>
                            <table class="table table-hover mt-4 text-center">
                                <thead>
                                    <tr>
                                        <th class="text-dark">No</th>
                                        <th class="text-dark">Pelanggan</th>
                                        <th class="text-dark">Paket</th>
                                        <th class="text-dark">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($data as $d)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td><span class="text-uppercase">{{ $d->user->name }}</span></td>
                                        <td>{{ $d->paket_satuan->nama_paketsatuan }}</td>
                                        <td>
                                            <a href="{{ route('transaksi.show', $d->id) }}" class="btn btn-outline-primary">Lihat</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
