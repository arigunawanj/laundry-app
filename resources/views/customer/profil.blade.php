@extends('customer.landingpage')
@section('utama')
 <!-- ======= Hero Section ======= -->
 <section id="hero">

    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                <div data-aos="zoom-out">
                    <h1>Pelayanan Laundry Kami adalah yang <span>Terbaik</span></h1>
                    <h2>Namanya Juga Hidup pasti banyak cobaan, kalo banyak cucian bawa saja ke Karisma Laundry aja</h2>
                </div>
            </div>
            <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                <img src="{{ asset('land/img/laundry-2.png') }}" class="img-fluid animated" alt="">
            </div>
        </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
        viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs>
            <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
        </defs>
        <g class="wave1">
            <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
        </g>
        <g class="wave2">
            <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
        </g>
        <g class="wave3">
            <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
        </g>
    </svg>

</section><!-- End Hero -->
<main id="main">

    <!-- ======= Breadcrumbs Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Profil</h2>
          <ol>
            <li><a href="index.html">Beranda</a></li>
            <li>Profil</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="card shadow mb-4">
            <div class="card-header">
                <strong class="card-title h3">Data Profil</strong>
            </div>
            <div class="card-body text-center">
                <a href="#!" class="avatar avatar-lg">
                    @if (!$profil)
                        <img src="{{ asset('land/img/team/team-1.jpg') }}" alt="..."
                            class="avatar-img rounded w-25">
                    @endif
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
                            <span class="p">{{ $p->user_id }}</span>
                        </div>
                    </div>
                    <div class="row align-items-left justify-content-between mb-2">
                        <div class="col-auto">
                            <span class="h6">Nama </span>
                        </div>
                        <div class="col-auto">
                            <span class="p">{{ $p->name }}</span>
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
                            <span class="p">{{ $p->gender }}</span>
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
                            <span class="p">{{ $p->email }}</span>
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
                            <span class="p">{{ $p->telephone }}</span>
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
                            <span class="p">{{ $p->address }}</span>
                        </div>
                    </div>
                    <div class="row align-items-left justify-content-between mb-2">
                        <div class="col-auto">
                            <span class="h6">Kecamatan </span>
                        </div>
                        <div class="col-auto">
                            <small></small>
                        </div>
                        <div class="col-auto">
                            <span class="p">{{ $p->kecamatan }}</span>
                        </div>
                    </div>
                    <div class="row align-items-left justify-content-between mb-2">
                        <div class="col-auto">
                            <span class="h6">Kelurahan </span>
                        </div>
                        <div class="col-auto">
                            <small></small>
                        </div>
                        <div class="col-auto">
                            <span class="p">{{ $p->kelurahan }}</span>
                        </div>
                    </div>
                    
                @endforeach
                <div class="row justify-content-center @if (DB::select('select user_id from detail_profiles where user_id=' . Auth::user()->id)) d-none @endif">
                    <a href="{{ route('profil.create') }}" class="btn btn-primary mx-4 w-25"><i
                            class='bx bxs-folder-plus'></i> Tambah Profil</a>
                </div>

                <div class="row justify-content-center @if (!DB::select('select user_id from detail_profiles where user_id=' . Auth::user()->id)) d-none @endif">
                    <a href="{{ route('profil.edit', Auth::user()->id) }}"
                        class="btn btn-warning text-white w-25"><i class='bx bx-edit-alt'></i> Edit Data</a>
                </div>


            </div> <!-- /.card-footer -->
        </div> <!-- /.card -->
      </div>
    </section>

  </main><!-- End #main -->
@endsection
