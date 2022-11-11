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
                        <li>Histori</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs Section -->

        <section class="inner-page">
            <div class="container">
                <div class="card shadow">
                    <div class="card-body">
                        <h5 class="card-title">Daftar Pesanan</h5>
                        <p class="card-text">Daftar Pesanan Karisma Laundry </p>
                        <table class="table table-hover text-center mt-4">
                            <thead>
                                <tr>
                                    <th class="text-dark">No</th>
                                    <th class="text-dark">Kode invoice</th>
                                    <th class="text-dark">Paket satuan</th>
                                    <th class="text-dark">Jumlah barang</th>
                                    <th class="text-dark">Metode pembayaran</th>
                                    <th class="text-dark">Total harga</th>
                                    <th class="text-dark">Status pembayaran</th>
                                    <th class="text-dark">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $d)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td id="invoice">{{ $d->kd_invoicesatuan }}</td>
                                    <td>{{ $d->paket_satuan->nama_paketsatuan }}</td>
                                    <td>{{ $d->jumlah_barang }}</td>
                                    <td>{{ $d->pay_satuan }}</td>
                                    <td>{{ $d->harga_totalsatuan }}</td>
                                    @if($d->status_pembayaran == 'Success, transaction is found')
                                    <td><span class="text-success fw-bold">Pembayaran selesai</span></td>
                                    @else                                        
                                    <td><span class="text-warning fw-bold">Menunggu pembayaran</span></td>
                                    @endif
                                    <td>
                                        <button class="btn btn-primary @if ($d->status_pembayaran == 'Success, transaction is found')d-none @endif" onclick="bayar({{ $d->id }})">Bayar</button>                                        
                                    </td>
                                </tr>                                            
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <form action="profil/success" id="submit_form" method="POST">
            @csrf
            <input type="hidden" name="json" id="call_json">
        </form>
    </main><!-- End #main -->
@endsection
