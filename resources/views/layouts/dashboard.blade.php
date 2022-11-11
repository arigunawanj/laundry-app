@extends('layouts.template')

@section('title', 'Dashboard Admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-12">
        <div class="row">
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow bg-primary text-white border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary-light">
                                    <i class="fe fe-16 fe-shopping-bag text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col pr-0">
                                <p class="small text-muted mb-0">Jumlah Pegawai</p>
                                <span class="h4 mb-0 text-white">{{ $jmlpegawai }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-shopping-cart text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col pr-0">
                                <p class="small text-muted mb-0">Pesanan Selesai</p>
                                <span class="h4 mb-0">{{ $jmlpesanan }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-filter text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Pelanggan</p>
                                <div class="row align-items-center no-gutters">
                                    <div class="col-auto">
                                        <span class="h4 mr-2 mb-0">{{ $jmlpelanggan }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-4">
                <div class="card shadow border-0">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-3 text-center">
                                <span class="circle circle-sm bg-primary">
                                    <i class="fe fe-16 fe-activity text-white mb-0"></i>
                                </span>
                            </div>
                            <div class="col">
                                <p class="small text-muted mb-0">Cabang Outlet</p>
                                <span class="h4 mb-0">{{ $jmloutlet }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end section -->
    </div>
</div> <!-- .row -->

<div class="container text-center mt-5">
    <div class="row align-items-center">
        <div class="col">
            <img src="{{ asset('assets/assets/images/welcome.png') }}" alt="" srcset="">
            <h3 class="container mt-5">Selamat Datang <span class="text-capitalize text-primary">{{ Auth::user()->name }}</span> di Karisma Laundry</h3>
            <p>Silahkan memilih menu di sebelah kiri.</p>
        </div>
    </div>
</div>

@endsection