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
                                        <a href="" class="btn btn-primary">Tambah Paket Kilo</a>
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
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <a href="" class="btn btn-primary">Tambah Paket Satuan</a>
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
                        </div>
                    </div>
                @endsection
