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
                <h2 class="page-title">Data Paket</h2>
                <p> Data Paket Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Daftar Paket</h5>
                                <p class="card-text">Daftar Paket Karisma Laundry </p>
                                
                                <ul class="nav nav-pills nav-fill mb-3 mt-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                            role="tab" aria-controls="pills-home" aria-selected="true">Paket Kilo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile"
                                            role="tab" aria-controls="pills-profile" aria-selected="false">Paket Satuan</a>
                                    </li>
                                </ul>
                                <div class="tab-content mb-1" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                        aria-labelledby="pills-home-tab">
                                        <a href="{{ route('datapaket.create') }}" class="btn btn-primary">Tambah Paket Kilo</a>
                                        <table class="table table-hover mt-4">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Paket</th>
                                                    <th>Nama Paket</th>
                                                    <th>Harga Paket</th>
                                                    <th>Hari Paket</th>
                                                    <th>Minimal Berat Paket</th>
                                                    <th>Antar Jemput Paket</th>
                                                    <th>Outlet</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($paketk as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->kd_paketkilo }}</td>
                                                    <td>{{ $item->nama_paketkilo }}</td>
                                                    <td>{{ $item->harga_paketkilo }}</td>
                                                    <td>{{ $item->min_berat_paket }}</td>
                                                    <td>{{ $item->antar_jemput_paket }}</td>
                                                    <td>{{ $item->outlet_id }}</td>
                                                </tr>
                                                @endforeach   
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <a href="{{ route('datapaket.create') }}" class="btn btn-primary">Tambah Paket Satuan</a>
                                        <table class="table table-hover mt-4">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Kode Paket</th>
                                                    <th>Nama Paket</th>
                                                    <th>Keterangan Paket</th>
                                                    <th>Harga</th>
                                                    <th>Outlet</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                @foreach($paketsat as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->kd_paketsatuan }}</td>
                                                    <td>{{ $item->nama_paketsatuan }}</td>
                                                    <td>{{ $item->ket_paketsatuan }}</td>
                                                    <td>{{ $item->harga_paketsatuan }}</td>
                                                    <td>{{ $item->outlet_id }}</td>
                                                </tr>
                                                @endforeach                                               
                                            </tbody>
                                        </table>    
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endsection
