@extends('layouts.template')

@section('title', 'Laporan Transaksi')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Laporan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Transaksi</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Laporan Transaksi</h2>
                <p> Laporan Transaksi Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Laporan Transaksi</h5>
                                <p class="card-text">Laporan Transaksi Pelanggan </p>
                                <table class="table table-hover mt-4 text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-dark">No</th>
                                            <th class="text-dark">Pelanggan</th>
                                            <th class="text-dark">Status</th>
                                            <th class="text-dark">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $d)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><span class="text-uppercase">{{ $d->user->name }}</span></td>
                                                <td>
                                                    @if ($d->status_pembayaran == 'Success, transaction is found')
                                                        <span
                                                            class="bg-success px-2 rounded py-1 text-white font-weight-bold">Pembayaran
                                                            berhasil</span>
                                                    @else
                                                        <span
                                                            class="bg-warning px-2 rounded py-1 text-white font-weight-bold">Menunggu
                                                            pembayaran</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a href="{{ route('transaksi.show', $d->id) }}"
                                                        class="btn btn-outline-primary">Lihat</a>
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
