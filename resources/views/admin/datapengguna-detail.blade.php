@extends('layouts.template')

@section('title', 'Detail Data Outlet')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Data</a></li>
            <li class="breadcrumb-item"><a href="/dataoutlet">Data Pengguna</a></li>
            <li class="breadcrumb-item active" aria-current="page">Detail Data Pengguna</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Detail Data Pengguna</h2>
                <p> Detail Data Pengguna Karisma Laundry Kota Malang </p>
                <div class="row">
                    <!-- simple table -->
                    <div class="container-fluid">
                        <div class="card shadow">
                            <div class="card-body">
                                <h5 class="card-title">Detail Outlet <span style="color: blue">{{ $user->name }} </span>
                                </h5>
                                <p class="card-text">Anda sedang melihat Data outlet dari <span
                                        style="color: blue">{{ $user->name }} </span></p>
                                <div class="mt-3">
                                    <table class="table table-hover mt-4">
                                        <thead>
                                            <tr>
                                                <th>Detail</th>
                                                <th>Isi Data</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Profile</td>
                                                <img src="{{ asset('storage/' . $user->upload) }}" width="100px"
                                                    alt="" srcset=""></td>
                                            </tr>
                                            <tr>
                                                <td>Nama</td>
                                                <td>{{ $user->name }}</td>
                                            </tr>
                                            <tr>
                                                <td>Password</td>
                                                <td>{{ $user->password }}</td>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <td>{{ $user->email }}</td>
                                            </tr>
                                            <tr>
                                                <td>Posisi</td>
                                                <td>{{ $user->role->name }}</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                    <a href="/datapengguna" class="btn btn-success">Kembali</a>
                                </div>
                            </div>
                        </div>
                    </div>


                @endsection
