@extends('layouts.template')

@section('title', 'Registrasi Pelanggan')

@section('content')
<nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Layanan</a></li>
        <li class="breadcrumb-item active" aria-current="page">Registrasi Pelanggan</li>
    </ol>
</nav>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card my-4">
                <div class="card-header">
                    <strong>Registrasi Pelanggan</strong>
                </div>
                <div class="card-body">
                    <form action="{{ route('layanan.store') }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="simpleinput">Kode Invoice</label>
                            <input type="number" id="simpleinput" name="kd_invoicesatuan" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Paket satuan</label>
                            <select name="paket_satuan_id" id="simpleinput" class="form-control">
                                @foreach ($paket as $item)
                                <option value="{{ $item->id }}">{{ $item->nama_paketsatuan }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Pelanggan</label>
                            <select name="user_id" id="simpleinput" class="form-control">
                                @foreach ($user as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Jumlah barang</label>
                            <input type="number" id="simpleinput" name="jumlah_barang" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Metode pembayaran</label>
                            <select id="simpleinput" name="pay_satuan" class="form-control">
                                <option value="Bank Transfer">Bank Transfer</option>
                                <option value="Tunai">Tunai</option>
                                <option value="E-Wallet">E-Wallet</option>
                            </select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Harga paket satuan</label>
                            <input type="number" id="txt1" name="harga_paketsatuan" onkeyup="sum();" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Harga antar satuan</label>
                            <input type="number" id="txt2" name="harga_antarsatuan" onkeyup="sum();" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="simpleinput">Harga total satuan</label>
                            <input type="number" id="txt3" name="harga_totalsatuan" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div> <!-- .card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
