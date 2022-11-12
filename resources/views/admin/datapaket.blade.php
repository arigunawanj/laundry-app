@extends('layouts.template')

@section('title', 'Data Paket')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/datapaket">Data</a></li>
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
                                            <thead class="text-dark">
                                                <tr>
                                                    <th class="text-dark">No</th>
                                                    <th class="text-dark">Kode Paket</th>
                                                    <th class="text-dark">Nama Paket</th>
                                                    <th class="text-dark">Harga Paket</th>
                                                    <th class="text-dark">Hari Paket</th>
                                                    <th class="text-dark">Minimal Berat Paket</th>
                                                    <th class="text-dark">Antar Jemput Paket</th>
                                                    <th class="text-dark">Outlet</th>
                                                    <th class="text-dark">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($paketk as $item)
                                                <tr>
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $item->kd_paketkilo }}</td>
                                                    <td>{{ $item->nama_paketkilo }}</td>
                                                    <td>{{ $item->harga_paketkilo }}</td>
                                                    <td>{{ $item->hari_paketkilo }}</td>
                                                    <td>{{ $item->min_berat_paket }}</td>
                                                    <td>{{ $item->antar_jemput_paket }}</td>
                                                    <td>{{ $item->outlet->nama_outlet }}</td>
                                                    <td>
                                                        <div class="file-action">
                                                            <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu m-2">
                                                                <a class="dropdown-item" href="{{ route('datapaket.edit', $item->id) }}"><i class="fe fe-edit fe-12 mr-4"></i>Edit</a>
                                                                <form action="{{ route('datapaket.destroy', $item->id) }}" method="POST" id="myForm">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a class="dropdown-item" href="#" id="submitdel" onclick="return confirm('Yakin hapus Data ?')"><i class="fe fe-trash fe-12 mr-4"></i>Delete</a>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach   
                                            </tbody>
                                        </table>
                                    
                                    </div>
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                        aria-labelledby="pills-profile-tab">
                                        <a href="/datapaketsatuan-add" class="btn btn-primary">Tambah Paket Satuan</a>
                                        <table class="table table-hover mt-4">
                                            <thead>
                                                <tr>
                                                    <th class="text-dark">No</th>
                                                    <th class="text-dark">Kode Paket</th>
                                                    <th class="text-dark">Nama Paket</th>
                                                    <th class="text-dark">Keterangan Paket</th>
                                                    <th class="text-dark">Harga</th>
                                                    <th class="text-dark">Outlet</th>
                                                    <th class="text-dark">Action</th>
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
                                                    <td>{{ $item->outlet->nama_outlet }}</td>
                                                    <td>
                                                        <div class="file-action">
                                                            <button type="button" class="btn btn-link dropdown-toggle more-vertical p-0 text-muted mx-auto" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                <span class="text-muted sr-only">Action</span>
                                                            </button>
                                                            <div class="dropdown-menu m-2">
                                                                <a class="dropdown-item" href="/datapaketsatuan-edit/{{ $item->id }}"><i class="fe fe-edit fe-12 mr-4"></i>Edit</a>
                                                                <form action="/datapaketsatuan/ {{ $item->id }}" method="POST" id="myForm">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <a class="dropdown-item" href="/datapaketsatuan/ {{ $item->id }}" id="submitdel" onclick="return confirm('Yakin hapus Data ?')"><i class="fe fe-trash fe-12 mr-4"></i>Delete</a>
                                                                </form>
                                                            </div>
                                                        </div>
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
                @endsection
