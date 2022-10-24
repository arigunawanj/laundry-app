@extends('layouts.template')

@section('title', 'Profile')

@section('content')

<div class="row justify-content-center">
    <div class="col-12">
        <h2 class="page-title">Profile</h2>
        <div class="row">
            <div class="col-md-4">
                {{-- <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-4 col-md-2 text-center">
                                    <a href="profile-posts.html" class="avatar avatar-md">
                                        <img src="./assets/avatars/face-2.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </a>
                                </div>
                                <div class="col">
                                    <strong class="mb-1">Leblanc Yoshio</strong><span
                                        class="dot dot-lg bg-success ml-1"></span>
                                    <p class="small text-muted mb-1">Fringilla Ornare Placerat Consulting</p>
                                </div>
                                <div class="col-4 col-md-auto offset-4 offset-md-0 my-2">
                                    <a href="#!" class="btn btn-sm btn-secondary">Contact</a>
                                </div>
                            </div>
                        </div> <!-- / .card-body -->
                    </div> <!-- / .card --> --}}
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">My Profile </strong>
                    </div>
                    <div class="card-body text-center">
                        <a href="#!" class="avatar avatar-lg">
                            <img src="{{ asset('assets/assets/avatars/face-4.jpg') }}" alt="..." class="avatar-img rounded-circle">
                        </a>
                        <div class="card-text my-0">
                            <strong class="card-title my-0 text-capitalize"><span style="font-size: 1.3em;">{{ Auth::user()->name }}</span></strong>
                            <p class="small">
                                @if(Auth::user()->role_id == 1)
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
                        @foreach($profil as $p)
                        <div class="row align-items-left justify-content-between mb-2">
                            <div class="col-auto">
                                @if(Auth::user()->role_id == 1)
                                <small>ID</small>
                                @elseif(Auth::user()->role_id == 2)
                                <small>ID Pegawai</small>
                                @else
                                <small>Kode Pelanggan</small>
                                @endif
                            </div>
                            <div class="col-auto">
                                <small></small>
                            </div>
                            <div class="col-auto">
                                <small>{{ $p->user_id }}</small>
                            </div>
                        </div>
                        <div class="row align-items-left justify-content-between mb-2">
                            <div class="col-auto">
                                <small>Nama </small>
                            </div>
                            <div class="col-auto">
                                <small></small>
                            </div>
                            <div class="col-auto">
                                <small>{{ $p->name }}</small>
                            </div>
                        </div>
                        <div class="row align-items-left justify-content-between mb-2">
                            <div class="col-auto">
                                <small>Gender </small>
                            </div>
                            <div class="col-auto">
                                <small></small>
                            </div>
                            <div class="col-auto">
                                <small>{{ $p->gender }}</small>
                            </div>
                        </div>
                        <div class="row align-items-left justify-content-between mb-2">
                            <div class="col-auto">
                                <small>Email </small>
                            </div>
                            <div class="col-auto">
                                <small></small>
                            </div>
                            <div class="col-auto">
                                <small>{{ $p->email }}</small>
                            </div>
                        </div>
                        <div class="row align-items-left justify-content-between mb-2">
                            <div class="col-auto">
                                <small>No HP </small>
                            </div>
                            <div class="col-auto">
                                <small></small>
                            </div>
                            <div class="col-auto">
                                <small>{{ $p->telephone }}</small>
                            </div>
                        </div>
                        <div class="row align-items-left justify-content-between mb-2">
                            <div class="col-auto">
                                <small>Alamat </small>
                            </div>
                            <div class="col-auto">
                                <small></small>
                            </div>
                            <div class="col-auto">
                                <small>{{ $p->address }}</small>
                            </div>
                        </div>
                        @endforeach
                    </div> <!-- /.card-footer -->
                </div> <!-- /.card -->
            </div>
            <div class="col-md-8">
                <div class="card shadow mb-4">
                    <div class="card-header">
                        <strong class="card-title">Edit Profile </strong>
                    </div>
                    <div class="card-body">
                        @foreach($profil as $p)
                        <form action="{{ route('profile.update', $p->id) }}" method="post" enctype="multipart/form-data">                            
                        @endforeach
                            @csrf
                            @method('put')
                            <div class="form-group mb-3">
                                <label for="simpleinput" class="form-label" name="upload" id="upload">Foto</label>
                                <input class="form-control" type="file" name="upload" id="simpleinput">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Nama</label>
                                <input type="text" name="name" id="simpleinput" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Gender</label>
                                <input type="text" name="gender" id="simpleinput" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Email</label>
                                <input type="email" name="email" id="simpleinput" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">No HP</label>
                                <input type="text" name="telephone" id="simpleinput" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Alamat</label>
                                <input type="text" name="address" id="simpleinput" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary w-25">Edit</button>
                            </div>
                        </form>
                    </div> <!-- /.card-body -->
                </div> <!-- /.card -->
            </div> <!-- /.col -->
        </div> <!-- end section -->
    </div> <!-- /.col-12 col-lg-10 col-xl-10 -->
</div> <!-- .row -->
@endsection
