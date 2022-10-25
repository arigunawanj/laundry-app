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
                <h2 class="page-title">Tambah Data Paket</h2>
                <p> Tambah Data Paket Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Paket</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('datapaket.store') }}" method="POST" enctype="multipart/form-data">
                                <div class="form-group mb-3">
                                <label for="simpleinput">Nama Paket</label>
                                <input type="text" id="simpleinput" name class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Alamat</label>
                                <input type="text" id="simpleinput" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Kota</label>
                                <input type="text" id="simpleinput" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                <label for="simpleinput">Tanggal</label>
                                <input type="date" id="simpleinput" class="form-control">
                                </div>
                            </div>
                            <a href="" class="btn btn-primary">Tambah</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection