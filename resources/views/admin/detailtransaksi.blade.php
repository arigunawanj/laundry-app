@extends('layouts.template')

@section('title', 'Detail transaksi')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('transaksi.index') }}">Transaksi Pelanggan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Transaksi</li>
    </ol>
</nav>
<h2 class="page-title">Detail transaksi</h2>
<p> Detail Transaksi Pelanggan Karisma Laundry Kota Malang </p>
<div class="card shadow p-4">
    <div class="card-header">
        <h5 class="card-title">Detail Transaksi <span class="text-primary text-uppercase">{{ $data->user->name }}</span></h5>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <div class="mb-3">
                    Kode Invoice
                </div>
                <div class="mb-3">
                    Customer
                </div>
                <div class="mb-3">
                    Paket
                </div>
                <div class="mb-3">
                    Jumlah barang
                </div>
                <div class="mb-3">
                    Metode pembayaran
                </div>
                <div class="mb-3">
                    Harga total
                </div>
                <div class="mb-3">
                    Status pembayaran
                </div>
            </div>
            <div class="col-7 font-weight-bold">
                <div class="mb-3">
                    {{ $data->kd_invoicesatuan }}
                </div>
                <div class="mb-3">
                    {{ $data->user->name }}
                </div>
                <div class="mb-3">
                    {{ $data->paket_satuan->nama_paketsatuan }}
                </div>
                <div class="mb-3">
                    {{ $data->jumlah_barang }}
                </div>
                <div class="mb-3">
                    {{ $data->pay_satuan }}
                </div>
                <div class="mb-3">
                    {{ $data->harga_totalsatuan }}
                </div>
                <div class="mb-3">
                    @if($data->status_pembayaran == 'Success, transaction is found')
                    <span class="bg-success px-2 rounded py-1 text-white font-weight-bold">Pembayaran berhasil</span>
                    @else
                    <span class="bg-warning px-2 rounded py-1 text-white font-weight-bold">Menunggu pembayaran</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
