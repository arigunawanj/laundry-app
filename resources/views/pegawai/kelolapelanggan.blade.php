@extends('layouts.template')

@section('title', 'Kelola Pelanggan')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Layanan</a></li>
            <li class="breadcrumb-item active" aria-current="page">Kelola Pelanggan</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Kelola Pelanggan</h2>
                <p> Kelola Pelanggan Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Kelola Pelanggan</h5>
                                <p class="card-text">Kelola Pelanggan Karisma Laundry </p>
                                <a href="" class="btn btn-primary">Tambah Data</a>
                                <table class="table table-hover mt-4">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Outlet</th>
                                            <th>Alamat</th>
                                            <th>Kota</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Karisma Klojen</td>
                                            <td>Enim Limited</td>
                                            <td>Malang</td>
                                            <td>Apr 24, 2019</td>
                                            <td><span class="badge badge-pill badge-warning">Hold</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Karisma Lowokwaru</td>
                                            <td>Nunc Lectus Incorporated</td>
                                            <td>Malang</td>
                                            <td>May 23, 2020</td>
                                            <td><span class="badge badge-pill badge-success">Success</span></td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Karisma Sukun</td>
                                            <td>Nisi Aenean Eget Limited</td>
                                            <td>Malang</td>
                                            <td>Nov 4, 2019</td>
                                            <td><span class="badge badge-pill badge-warning">Hold</span></td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Karisma Kedungkandang</td>
                                            <td>Pellentesque Associates</td>
                                            <td>Malang</td>
                                            <td>Mar 27, 2020</td>
                                            <td><span class="badge badge-pill badge-danger">Danger</span></td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Karisma Dau</td>
                                            <td>Augue Incorporated</td>
                                            <td>Malang</td>
                                            <td>Jan 13, 2020</td>
                                            <td><span class="badge badge-pill badge-success">Success</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
