@extends('layouts.template')

@section('title', 'Data Pengguna')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Data Pengguna</li>
        </ol>
    </nav>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="page-title">Edit Data Pengguna</h2>
                <p> Edit Data Pengguna Karisma Laundry Kota Malang </p>
                <div class="card-header col-12">
                    <strong class="card-title">Data Pengguna</strong>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <form action="{{ route('datapengguna.update', $user->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Nama</label>
                                        <input type="text" id="simpleinput" name="name" value="{{ $user->name }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Kode</label>
                                        <input type="text" id="simpleinput" name="id" value="{{ $user->id }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Email</label>
                                        <input type="email" id="simpleinput" name="email" value="{{ $user->email }}"
                                            class="form-control">
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="simpleinput">Posisi</label>
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
