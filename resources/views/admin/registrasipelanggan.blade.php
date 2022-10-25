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
                    <form id="example-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div>
                            <h3>Data diri</h3>
                            <section>                                
                                    <div class="form-group">
                                        <label for="userName">Username *</label>
                                        <input id="userName" name="name" type="text" value="{{ old('name') }}" class="form-control required">
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email *</label>
                                        <input id="email" name="email" type="email" value="{{ old('email') }}" class="form-control required email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password *</label>
                                        <input id="password" name="password" type="text" class="form-control required">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm">Confirm Password *</label>
                                        <input id="confirm" name="password_confirmation" type="text" class="form-control required">
                                    </div>
                                
                                <div class="help-text text-muted">(*) Mandatory</div>
                            </section>
                            <h3>Layanan</h3>
                            <section>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="name">First name *</label>
                                        <input id="name" name="name" type="text" class="form-control required">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="surname">Last name *</label>
                                        <input id="surname" name="surname" type="text" class="form-control required">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input id="email" name="email" type="text" class="form-control required email">
                                </div>
                                <div class="form-group">
                                    <label for="address">Address</label>
                                    <input id="address" name="address" class="form-control" type="text">
                                </div>
                                <div class="help-text text-muted">(*) Mandatory</div>
                            </section>
                            <h3>Buat akun</h3>
                            <section>
                                <ul class="ml-5">
                                    <li>Foo</li>
                                    <li>Bar</li>
                                    <li>Foobar</li>
                                </ul>
                            </section>
                        </div>
                    </form>
                </div> <!-- .card-body -->
            </div>
        </div>
    </div>
</div>
@endsection
