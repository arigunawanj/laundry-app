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
                                <table class="table table-hover text-center mt-4">
                                    <thead class="">
                                        <tr>
                                            <th class="text-dark">No</th>
                                            <th class="text-dark">Nama Pelanggan</th>
                                            <th class="text-dark">Alamat</th>
                                            <th class="text-dark">Kecamatan</th>
                                            <th class="text-dark">Kelurahan</th>
                                            <th class="text-dark">Role</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($data as $d)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td class="text-uppercase">{{ $d->name }}</td>
                                            <td>{{ $d->address }}</td>
                                            <td>{{ $d->kecamatan }}</td>
                                            <td>{{ $d->kelurahan }}</td>
                                            <td class="text-capitalize">
                                                @if($d->role_id == 3)
                                                    <span class="badge badge-pill badge-primary">{{'Member'}}</span>
                                                @elseif($d->role_id == 4)
                                                    <span class="badge badge-pill badge-secondary">{{'Non-member'}}</span>
                                                @endif
                                            </td>
                                            
                                        </tr>                                      
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @endsection
