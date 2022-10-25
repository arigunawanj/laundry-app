@extends('layouts.template')

@section('title', 'Profile')

@section('content')
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Profil</a></li>
            <li class="breadcrumb-item"><a href="/dataoutlet">Data Profil</a></li>
        </ol>
    </nav>

                <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                
                <div class="row">
                    <div class="col">
                        <div class="card shadow mb-4">
                            <div class="card-header">
                                <strong class="card-title h3">Data Profil</strong>
                            </div>
                            <div class="card-body text-center">
                                <a href="#!" class="avatar avatar-lg">
                                    @foreach ($profil as $gambar)
                                        <img src="{{ asset('storage/' . $gambar->image) }}" alt="..."
                                            class="avatar-img rounded w-25">
                                    @endforeach
                                </a>
                                <div class="card-text my-0 mt-3">
                                    <strong class="card-title mt-5 my-0 text-capitalize"><span
                                            style="font-size: 1.3em;">{{ Auth::user()->name }}</span></strong>
                                    <p class="small">
                                        @if (Auth::user()->role_id == 1)
                                            <span class="badge badge-danger">
                                                Admin
                                            </span>
                                        @elseif(Auth::user()->role_id == 2)
                                            <span class="badge badge-success text-white">
                                                Pegawai
                                            </span>
                                        @elseif(Auth::user()->role_id == 3)
                                            <span class="badge badge-primary">
                                                Member
                                            </span>
                                        @elseif(Auth::user()->role_id == 4)
                                            <span class="badge badge-secondary">
                                                Non-Member
                                            </span>
                                        @endif
                                    </p>
                                </div>
                            </div> <!-- ./card-text -->
                            <div class="card-footer">
                                @foreach ($profil as $p)
                                    <div class="row align-items-left justify-content-between mb-2">
                                        <div class="col-auto">
                                            @if (Auth::user()->role_id == 1)
                                                <span class="h6">ID</span>
                                            @elseif(Auth::user()->role_id == 2)
                                                <span class="h6">ID Pegawai</span>
                                            @else
                                                <span class="h6">Kode Pelanggan</span>
                                            @endif
                                        </div>
                                        <div class="col-auto">
                                            <span class="h6">{{ $p->user_id }}</span>
                                        </div>
                                    </div>
                                    <div class="row align-items-left justify-content-between mb-2">
                                        <div class="col-auto">
                                            <span class="h6">Nama </span>
                                        </div>
                                        <div class="col-auto">
                                            <span class="h6">{{ $p->name }}</span>
                                        </div>
                                    </div>
                                    <div class="row align-items-left justify-content-between mb-2">
                                        <div class="col-auto">
                                            <span class="h6">Gender </span>
                                        </div>
                                        <div class="col-auto">
                                            <small></small>
                                        </div>
                                        <div class="col-auto">
                                            <span class="h6">{{ $p->gender }}</span>
                                        </div>
                                    </div>
                                    <div class="row align-items-left justify-content-between mb-2">
                                        <div class="col-auto">
                                            <span class="h6">Email </span>
                                        </div>
                                        <div class="col-auto">
                                            <small></small>
                                        </div>
                                        <div class="col-auto">
                                            <span class="h6">{{ $p->email }}</span>
                                        </div>
                                    </div>
                                    <div class="row align-items-left justify-content-between mb-2">
                                        <div class="col-auto">
                                            <span class="h6">No HP </span>
                                        </div>
                                        <div class="col-auto">
                                            <small></small>
                                        </div>
                                        <div class="col-auto">
                                            <span class="h6">{{ $p->telephone }}</span>
                                        </div>
                                    </div>
                                    <div class="row align-items-left justify-content-between mb-2">
                                        <div class="col-auto">
                                            <span class="h6">Alamat </span>
                                        </div>
                                        <div class="col-auto">
                                            <small></small>
                                        </div>
                                        <div class="col-auto">
                                            <span class="h6">{{ $p->address }}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="row justify-content-center @if (DB::select('select user_id from detail_profiles where user_id=' . Auth::user()->id)) d-none @endif">
                                    <a href="{{ route('profile.create') }}" class="btn btn-primary mr-4"><i class='bx bxs-folder-plus' ></i> Tambah Profil</a>
                                </div>
                        
                                <div class="row justify-content-center @if (!DB::select('select user_id from detail_profiles where user_id=' . Auth::user()->id)) d-none @endif">
                                    <a href="{{ route('profile.edit' , Auth::user()->id ) }}" class="btn btn-warning text-white"><i class='bx bx-edit-alt'></i> Edit Data</a>
                                </div>
                                
                                
                            </div> <!-- /.card-footer -->
                        </div> <!-- /.card -->
                    </div>
                </div> <!-- end section -->
            </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
        </div> <!-- .row -->
    </div>
            @endsection
