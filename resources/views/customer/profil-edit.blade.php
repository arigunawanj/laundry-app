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
        <div class="card shadow mb-4">
            <div class="card-header col-12">
                <strong class="card-title">Data Profil</strong>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <form action="{{ route('profil.update', $profil1->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Nama Profil</label>
                                    <input type="text" id="simpleinput" name="name" value="{{ $profil1->name }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Gender</label>
                                    <select name="gender" id="gender" class="form-control" required>
                                        <option value="{{ $profil1->gender }}">{{ $profil1->gender }}</option>
                                        @if ($profil1->gender == 'Laki-Laki')
                                            <option value="Perempuan">Perempuan</option>
                                        @else
                                            <option value="Laki-Laki">Laki-Laki</option>
                                        @endif
                                    </select>
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Telepon</label>
                                    <input type="number" id="simpleinput" name="telephone" value="{{ $profil1->telephone }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Email</label>
                                    <input type="email" id="simpleinput" name="email" value="{{ $user->email }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Alamat</label>
                                    <input type="text" id="simpleinput" name="address" value="{{ $profil1->address }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kecamatan</label>
                                    <input type="text" id="simpleinput" name="kecamatan" value="{{ $profil1->kecamatan }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Kelurahan</label>
                                    <input type="text" id="simpleinput" name="kelurahan" value="{{ $profil1->kelurahan }}" class="form-control">
                                </div>
                                <div class="form-group mb-3">
                                    <label for="simpleinput">Foto</label>
                                    <input class="form-control" type="file"  name="image" id="simpleinput">
                                </div>
                                <div class="form-group mb-3"> 
                                    <p>Foto sebelumnya :</p>
                                    <img src="{{ asset('storage/' . $profil1->image) }}" width="150px" alt="" style="border-radius: 0.5rem;">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>

  </main><!-- End #main -->
@endsection
