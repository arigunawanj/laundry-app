@extends('layouts.template')

@section('title', 'Outlet User')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">Laporan</a></li>
        <li class="breadcrumb-item"><a href="/laporanpegawai">Laporan Pegawai</a></li>
        <li class="breadcrumb-item active" aria-current="page">Tambah Laporan Pegawai</li>
    </ol>
</nav>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <h2 class="page-title">Tambah laporan Pegawai</h2>
            <p> Silahkan menambahkan pegawai dengan outlet</p>
            <div class="card-header col-12">
                <strong class="card-title">Data Outlet User</strong>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('laporanpegawai.store') }}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama User</label>
                                    <select name="user_id" id="" class="form-control">
                                        @foreach ($user as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama Outlet</label>
                                    <select name="outlet_id" id="" class="form-control">
                                        @foreach ($outlet as $item)
                                        <option value="{{ $item->id }}">{{ $item->nama_outlet }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection