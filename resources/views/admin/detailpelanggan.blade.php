@extends('layouts.template')

@section('title', 'Detail transaksi')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
        <li class="breadcrumb-item"><a href="{{ route('kelolapelanggan.index') }}">Kelola Pelanggan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Detail Pelanggan</li>
    </ol>
</nav>
<h2 class="page-title">Detail pelanggan</h2>
<p> Detail Pelanggan Karisma Laundry Kota Malang </p>
<div class="card shadow p-4">
    <div class="card-header">
        <h5 class="card-title">Detail Pelanggan <span class="text-primary text-uppercase">{{ $d->name }}</span></h5>
        <div class="">
            <img src="{{ asset('storage/'.$d->image) }}" width="90px" class="rounded-circle" alt="">
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-5">
                <div class="mb-3">
                    Nama
                </div>
                <div class="mb-3">
                    Jenis kelamin
                </div>
                <div class="mb-3">
                    Alamat
                </div>
                <div class="mb-3">
                    Kecamatan
                </div>
                <div class="mb-3">
                    Kelurahan
                </div>
                <div class="mb-3">
                    No. telepon
                </div>
                <div class="mb-3">
                    Role
                </div>
            </div>
            <div class="col-7 font-weight-bold">
                <div class="mb-3 text-uppercase">
                    {{ $d->name }}
                </div>
                <div class="mb-3">
                    {{ $d->gender }}
                </div>
                <div class="mb-3">
                    {{ $d->address }}
                </div>
                <div class="mb-3">
                    {{ $d->kecamatan }}
                </div>
                <div class="mb-3">
                    {{ $d->kelurahan }}
                </div>
                <div class="mb-3">
                    {{ $d->telephone }}
                </div>
                <div class="mb-3 text-capitalize">
                    @if($d->user->role_id == 3)
                    <span class="badge badge-pill badge-primary">{{'Member'}}</span>
                    @elseif($d->user->role_id == 4)
                    <span class="badge badge-pill badge-secondary">{{'Non-member'}}</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <form action="{{ route('kelolapelanggan.destroy', $d->id) }}" method="POST" id="myForm">
                @csrf
                @method('delete')
                <button type="submit" class="btn btn-danger text-white" onclick="return confirm('Yakin hapus Data ?')"><i class="fe fe-trash fe-12 mr-1"></i>Hapus pelanggan</button>
            </form>
        </div>
    </div>
</div>
@endsection
