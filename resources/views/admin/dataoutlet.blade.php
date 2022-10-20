@extends('layouts.template')

@section('title', 'Data Outlet')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Data</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data Outlet</li>
    </ol>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Data Outlet</h2>
            <p> Data Outlet Karisma Laundry Kota Malang </p>
            <div class="row">
                <!-- simple table -->
                <div class="container-fluid">
                    <div class="card shadow">
                        <div class="card-body">
                            <h5 class="card-title">Daftar Outlet</h5>
                            <p class="card-text">Daftar Outlet Karisma Laundry </p>
                            <a href="{{ route('dataoutlet.create') }}" class="btn btn-primary">Tambah Data</a>
                            <div class="mt-3">
                                <table class="table table-hover mt-4" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Outlet</th>
                                            <th>Alamat</th>
                                            <th>Telepon</th>
                                            <th>Email</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($outlet as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama_outlet }}</td>
                                            <td>{{ $item->alamat_outlet }}</td>
                                            <td>{{ $item->telepon_outlet }}</td>
                                            <td>{{ $item->email_outlet }}</td>
                                            <td><img src="{{ asset('storage/'.$item->upload) }}" width="100px" alt="" srcset=""></td>
                                            <td class="d-flex ">
                                                <a href="{{ route('dataoutlet.edit', $item->id) }}" class="btn btn-primary"><i class='bx bx-edit-alt'></i></a>
                                                <a href="" class="btn btn-danger"><i class='bx bx-trash'></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                @endsection
