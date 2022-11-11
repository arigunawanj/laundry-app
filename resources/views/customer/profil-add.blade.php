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
          <h2>Inner Page</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Inner Page</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs Section -->

    <section class="inner-page">
      <div class="container">
        <div class="card-header col-12">
            <strong class="card-title">Data Profil</strong>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <form action="{{ route('profil.store') }}" enctype="multipart/form-data" method="POST">
                            @csrf
                            <div class="d-none mb-3">
                                <label for="simpleinput">ID</label>
                                <input type="number" readonly name="id" value="{{ Auth::user()->id }}"
                                    id="" class="form-control">
                            </div>
                            <div class="form-group mb-3">
                                <label for="simpleinput">Nama</label>
                                <input type="text" name="name" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Gender</label>
                                <select name="gender" id="simpleinput" class="form-control">
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Address</label>
                                <input type="text" name="address" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Kecamatan</label>
                                <input type="text" name="kecamatan" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Kelurahan</label>
                                <input type="text" name="kelurahan" id="simpleinput" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">No. telepon</label>
                                <input type="number" min="0" name="telephone" id="simpleinput"
                                    class="form-control">
                            </div>

                            <div class="d-none mb-3">
                                <label for="simpleinput">ID User</label>
                                <input type="number" readonly name="user_id" value="{{ Auth::user()->id }}"
                                    id="" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="simpleinput">Foto</label>
                                <input type="file" min="0" name="image" required id="simpleinput"
                                    class="form-control">
                            </div>

                            <input type="submit" id="" class="btn btn-primary">
                        </form>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
