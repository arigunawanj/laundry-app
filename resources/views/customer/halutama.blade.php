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
                        <div class="text-center text-lg-start">
                            <a href="#about" class="btn-get-started scrollto">Lihat</a>
                        </div>
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

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch"
                        data-aos="fade-right">
                        
                    </div>

                    <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5"
                        data-aos="fade-left">
                        <h3>Kami adalah Penyedia Layanan Laundry yang Berkualitas di Kota Anda</h3>
                        <p>Pencucian dilakukan dengan deterjen cair khusus yang mengandung surfaktan non-ionik dan
                            anti-redoposisi,
                            serta bahan pembentuk emulsi yang menyebabkan kotoran terlepas dengan sempurna dari serat
                            pakaian.
                            Kemudian pakaian dikeringkan dengan mesin pengering tanpa dijemur sehingga bebas bau matahari
                            dan debu
                            udara.
                            Selanjutnya penyetrikaan dilakukan dengan menggunakan setrika uap boiler sehingga aman untuk
                            pakaian
                            dengan
                            bahan yang sensitif dengan elemen panas.


                        </p>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <div class="icon"><i class='bx bxs-washer'></i></div>
                            <h4 class="title"><a href="">Cuci Kering</a></h4>
                            <p class="description">Cuci Kering Baju dengan Alat yang mampu mencuci dan mengeringkan dengan cepat</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <div class="icon"><i class='bx bx-male-female'></i></i></div>
                            <h4 class="title"><a href="">Pekerja Ahli</a></h4>
                            <p class="description">Pekerja dengan pengalaman lebih dari 10 tahun di bidangnya</p>
                        </div>

                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                            <div class="icon"><i class='bx bx-chart'></i></div>
                            <h4 class="title"><a href="">Pengalaman</a></h4>
                            <p class="description">Pengalaman yang membuat anda merasa nyaman berada di Karisma Laundry</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Features Section ======= -->
        <section id="features" class="features">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Pelayanan</h2>
                    <p>Apa yang Kami Tawarkan ?</p>
                </div>

                <div class="row" data-aos="fade-left">
                    <div class="col-lg-3 col-md-4">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
                            <i class="ri-t-shirt-line"></i>
                            <h3><a href="">Cuci Kering</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                            <i class="ri-ink-bottle-line" style="color: #5578ff;"></i>
                            <h3><a href="">Parfum Premium</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
                            <i class="ri-t-shirt-air-line" style="color: #e80368;"></i>
                            <h3><a href="">Cuci Sepatu</a></h3>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
                        <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                            <i class="ri-shirt-line" style="color: #e361ff;"></i>
                            <h3><a href="">Pembersihan Setelan</a></h3>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Features Section -->

        

        <!-- ======= Details Section ======= -->
        <section id="details" class="details">
            <div class="container">

                <div class="row content">
                    <div class="col-md-4" data-aos="fade-right">
                        <img src="{{ asset('land/img/laundry-1.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-8 pt-4" data-aos="fade-up">
                        <h3>Kenapa pilih Laundry Kami ?</h3>
                        <p class="fst-italic">
                            Pelayanan Laundry Satuan untuk pakaian kesayangan Anda. Dengan Perlakuan
                            sesuai dengan Washing Care label yang tertera pada pakaian agar pakaian Anda
                            tetap terjaga dan awet. Serta dengan penanganan khusus pada Noda yang menempel.
                        </p>
                        <ul>
                            <li><i class="bi bi-check"></i> Layanan Berkualitas</li>
                            <li><i class="bi bi-check"></i> Staff Proffesional</li>
                            <li><i class="bi bi-check"></i> Pengiriman Cepat</li>
                            <li><i class="bi bi-check"></i> Jaminan Kepuasan 100%</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section><!-- End Details Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="gallery" class="gallery">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Gallery</h2>
                    <p>Check our Gallery</p>
                </div>

                <div class="row g-0" data-aos="fade-left">

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
                            <a href="{{ asset('land/img/gallery/laun-1.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-1.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
                            <a href="{{ asset('land/img/gallery/laun-2.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-2.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
                            <a href="{{ asset('land/img/gallery/laun-3.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-3.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
                            <a href="{{ asset('land/img/gallery/laun-4.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-4.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
                            <a href="{{ asset('land/img/gallery/laun-5.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-5.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
                            <a href="{{ asset('land/img/gallery/laun-6.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-6.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
                            <a href="{{ asset('land/img/gallery/laun-7.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-7.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-4">
                        <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
                            <a href="{{ asset('land/img/gallery/laun-8.jpg') }}" class="gallery-lightbox">
                                <img src="{{ asset('land/img/gallery/laun-8.jpg') }}" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials">
            <div class="container">

                <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('land/img/testimonials/tes-2.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Ari Gunawan</h3>
                                <h4>Customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Pelayanan ramah, pengerjaan cepat, dan cucian pun wangi dan segar. Harga terbaik joss
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('land/img/testimonials/tes-1.png') }}" class="testimonial-img"
                                    alt="">
                                <h3>Agung</h3>
                                <h4>Customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Pengerjaan Rapi dan Baju bersih sekali
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('land/img/testimonials/testimonials-3.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Tyan</h3>
                                <h4>Customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Pengerjaan cepat, satu hari langsung jadi
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('land/img/testimonials/testimonials-4.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Zacky</h3>
                                <h4>Customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Pelayanannya ramah sekali, gak nyesel datang kesini
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <img src="{{ asset('land/img/testimonials/testimonials-5.jpg') }}"
                                    class="testimonial-img" alt="">
                                <h3>Zen</h3>
                                <h4>Customer</h4>
                                <p>
                                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                                    Top Markotop
                                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                                </p>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->

        

        <!-- ======= Pricing Section ======= -->
        <section id="pricing" class="pricing">
            <div class="container ">

                <div class="section-title" data-aos="fade-up">
                    <h2>Harga</h2>
                    <p>Cek Harga Kami</p>
                </div>

                <div class="row justify-content-center" data-aos="fade-left">

                    <div class="col-lg-3 col-md-6 ">
                        <div class="box" data-aos="zoom-in" data-aos-delay="100">
                            <h3>Basic</h3>
                            <h4><sup>Rp</sup>30.000<span> / kg</span></h4>
                            <ul>
                                <li>Cuci Kering</li>
                                <li>Setrika</li>
                                <li class="na">Antar Gratis</li>
                                <li class="na">Parfum Premium</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="/login" class="btn-buy">Ambil</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
                        <div class="box featured" data-aos="zoom-in" data-aos-delay="200">
                            <h3>Standard</h3>
                            <h4><sup>Rp</sup>40.000<span> / kg</span></h4>
                            <ul>
                                <li>Cuci Kering</li>
                                <li>Setrika</li>
                                <li>Antar Gratis</li>
                                <li class="na">Parfum Premium</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="/login" class="btn-buy">Ambil</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
                        <div class="box" data-aos="zoom-in" data-aos-delay="300">
                            <h3>Premium</h3>
                            <h4><sup>Rp</sup>50.000<span> / kg</span></h4>
                            <ul>
                                <li>Cuci Kering</li>
                                <li>Setrika</li>
                                <li>Antar Gratis</li>
                                <li>Parfum Premium</li>
                            </ul>
                            <div class="btn-wrap">
                                <a href="/login" class="btn-buy">Ambil</a>
                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </section><!-- End Pricing Section -->

        

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container ">

                <div class="section-title" data-aos="fade-up">
                    <h2>Kontak</h2>
                    <p>Hubungi Kami</p>
                </div>

                    <div class="container-fluid" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jl. Watu Gong No.18, Ketawanggede,
                                    Kec. Lowokwaru, Kota Malang, Jawa Timur 65145</p>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="email">
                                        <i class="bi bi-envelope"></i>
                                        <h4>Email:</h4>
                                        <p>karismaacademy@gmail.com</p>
                                    </div>
                                </div>
                                
                                <div class="col">
                                    <div class="phone">
                                        <i class="bi bi-phone"></i>
                                        <h4>Telepon :</h4>
                                        <p>085-785-196-574</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->
@endsection
