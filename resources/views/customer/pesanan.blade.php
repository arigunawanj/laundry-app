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
                                <table class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Outlet</th>
                                            <th>Kode Invoice</th>
                                            <th>Tanggal Pemberian</th>
                                            <th>Pegawai</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Karisma Klojen</td>
                                            <td>001</td>
                                            <td>Apr 24, 2019</td>
                                            <td>Budi</td>
                                            <td><a href="" class="btn btn-primary">Lihat</a></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Karisma Lowokwaru</td>
                                            <td>002</td>
                                            <td>May 23, 2020</td>
                                            <td>Bayu</td>
                                            <td><a href="" class="btn btn-primary">Lihat</a></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                @endsection