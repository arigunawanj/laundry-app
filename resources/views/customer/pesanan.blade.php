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
                    <h2>Beranda</h2>
                    <ol>
                        <li><a href="index.html">Beranda</a></li>
                        <li>Pesanan</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">
                <div class="card my-4">
                    <div class="card-header">
                        <strong>Pesanan</strong>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('pesanan.store') }}" method="post">
                            @csrf
                                <input type="hidden" id="simpleinput" name="kd_invoicesatuan" class="form-control">
                            <div class="form-group mb-3">
                                <label for="simpleinput">Paket satuan</label>
                                <select name="paket_satuan_id" id="satuan" class="form-control">
                                    @foreach ($paket as $item)
                                    <option value="{{ $item->id }}">{{ $item->nama_paketsatuan }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Pelanggan</label>
                                <input type="hidden" name="user_id" class="form-control" value="{{ Auth::user()->id }}">
                                <input type="text" name="" class="form-control" value="{{ Auth::user()->name }}" disabled>
                                {{-- <select name="user_id" id="simpleinput" class="form-control">
                                    <option value="{{ Auth::user()->role_id }}">{{ Auth::user()->name }}</option>
                                </select> --}}
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
                                <input type="number" id="txt1" name="harga_paketsatuan"  class="form-control">
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
        </section>
    </main><!-- End #main -->
@endsection
