<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Himatif Website - JGU</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href=" {{ asset('assets-landing/assets/img/Logo HIMATIF 1.png') }}" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href=" {{ asset('assets-landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets-landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets-landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets-landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets-landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets-landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href=" {{ asset('assets-landing/assets/vendor/swiper/swiper-bundle.min.css"') }} rel=" stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets-landing/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/assets/css/welcome.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/assets/css/depart.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/assets/css/vm.css') }}" rel="stylesheet">
    <link href="{{ asset('assets-landing/assets/css/jargon.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Bootslander
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex align-items-center justify-content-between">

            <div class="logo">
                <img src="{{ asset('assets-landing/assets/img/Logo HIMATIF 1.png') }}" alt="">
                <h1><a href="index.html"><span>HIMATIF</span></a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#team">Struktur</a></li>
                    <li><a class="nav-link scrollto" href="#pricing">Berita</a></li>
                    <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
                    <li><a class="nav-link scrollto" href="#testimonials">Alumni</a></li>

                    <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">

        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
                    <div data-aos="zoom-out">
                        <div class="roller">
                            <div id="slider">
                                <div class="span">System.out.printIn</div>
                                ("<div class="span" id="sliderValue"></div>");
                            </div>
                            <script src="slider.js"></script>
                        </div>
                        <h1>Welcome To Our Website <span>HIMATIF</span></h1>
                        <h3>Himpunan Mahasiswa Teknik Informatika
                            <br>Jakarta Global University
                        </h3>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
                    <img src="{{ asset('assets-landing/assets/img/Desain tanpa judul (73).png') }}"
                        class="img-fluid animated border-bg" alt="">
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



        <!-- About Section -->
        <section id="about" class="about section">
            {{-- <center>
                <div class="section-title" data-aos="fade-up">
                    <h2>SeJARAH</h2>
                    <p>SEJARAH HIMATIF</p>
                </div>
            </center> --}}
            <br>
            <br>
            <br>
            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        {{-- <p class="who-we-are">Who We Are</p> --}}
                        <h3>SEJARAH HIMATIF JGU</h3>
                        <p class="fst-italic">
                            Proses awal terbentuknya Himpunan Mahasiswa Teknik Informatika (HIMATIF) dimulai saat Kampus
                            masih dikenal sebagai Sekolah Tinggi Teknologi Jakarta (STTJ)
                        </p>
                        <ul>
                            <li><i class="bi bi-check-circle"></i> <span>2013-2018: Forum Musyawarah mahasiswa Teknik
                                    Informatika di STTJ membahas pembentukan HIMATIF, AD/ART, dan logo.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>19 Mei 2019: HIMATIF resmi berpisah dari HME
                                    melalui Musyawarah Mahasiswa.</span></li>
                            <li><i class="bi bi-check-circle"></i> <span>18 Agustus 2019: HIMATIF resmi didirikan di
                                    ITKJ (Institut Teknologi dan Kesehatan Jakarta).</span></li>
                        </ul>
                        <a href="{{ route('sejarah') }}" class="read-more"><span>Read More</span><i
                                class="bi bi-arrow-right"></i></a>
                    </div>

                    <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
                        <div class="row gy-4">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets-landing/assets/img/mubes1.jpg') }}" class="img-fluid" alt="">
                            </div>
                            <div class="col-lg-6">
                                <div class="row gy-4">
                                    <div class="col-lg-12">
                                        <img src="{{ asset('assets-landing/assets/img/mubes.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                    <div class="col-lg-12">
                                        <img src="{{ asset('assets-landing/assets/img/mubes2.jpg') }}" class="img-fluid"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>
        <!-- /About Section -->
<br>
<br>
        <!-- Features Details Section -->
        <section id="features-details" class="features-details section">
            <center>
                {{-- <div class="container-vm"> --}}
                    {{-- <div class="row p-3"> --}}
                        <div class="card mb-4">
                            <div class="imgBx">
                                <img src="{{ asset('assets-landing/assets/img/misi.jpg') }}">
                            </div>
                            <div class="details-vm">
                                <h2><b>VISI <span>HIMATIF</span></b></h2>
                                <br>
                                <h5>Mewujudkan HIMATIF sebagai himpunan mahasiswa yang kolaboratif, inovatif, interaktif,
                                    dan merangkul antar sesama, serta dapat menciptakan lingkungan yang nyaman, aktif,
                                    solutif,
                                    dan responsif bagi mahasiswa/i Teknik Informatika.</h5>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="imgBx">
                                <img src="{{ asset('assets-landing/assets/img/visi.jpg') }}">
                            </div>
                            <div class="details-vm">
                                <h2><b>MISI <span>HIMATIF</span></b></h2>
                                <ul class="numbered-list">
                                    <li>Mendorong dan mempererat hubungan antara anggota himpunan maupun non-anggota melalui
                                        kegiatan bersama yang inklusif dan kolaboratif.</li>
                                    <li>Menyediakan lingkungan yang mendukung dan bertanggung jawab di mana setiap anggota
                                        dapat berkembang dan berkontribusi secara maksimal.</li>
                                </ul>
                                <div class="btn-wrap">
                                    <button type="button" class="btn-buy" data-toggle="modal" data-target="#misiModal">
                                        Selengkapnya
                                    </button>
                                </div>
                            </div>
                        </div>
                    {{-- </div> --}}

                {{-- </div> --}}
            </center>
        </section>


        <section id="features-details" class="features-details section">
            {{-- <center>
            <div class="section-title" data-aos="fade-up">
                <h2>JARGON HIMATIF</h2>
                <p>JARGON HIMATIF 2024/2025</p>
            </div>
        </center> --}}
            <section class="tutorial">
                <div class="container-jgn">
                    <div class="scroller">
                        <p class="item-jg">SIAPA</p>
                        <p class="item-jg">KITA</p>
                        <p class="item-jg">HIMATIF,</p>
                        <p class="item-jg">SIAPA</p>
                        <p class="item-jg">KITA</p>
                        <p class="item-jg">HIMATIF,</p>
                        <p class="item-jg">SATU</p>
                        <p class="item-jg">VISI,</p>
                        <p class="item-jg">SATU</p>
                        <p class="item-jg">MISI,</p>
                        <p class="item-jg">SIAP</p>
                        <p class="item-jg">BERAKSI!!!</p>
                    </div>
                    <div class="scroller">
                        <p class="item-jg">SIAPA</p>
                        <p class="item-jg">KITA</p>
                        <p class="item-jg">HIMATIF,</p>
                        <p class="item-jg">SIAPA</p>
                        <p class="item-jg">KITA</p>
                        <p class="item-jg">HIMATIF,</p>
                        <p class="item-jg">SATU</p>
                        <p class="item-jg">VISI,</p>
                        <p class="item-jg">SATU</p>
                        <p class="item-jg">MISI,</p>
                        <p class="item-jg">SIAP</p>
                        <p class="item-jg">BERAKSI!!!</p>
                    </div>
                </div>
            </section>
        </section>

        <section id="features" class="features section">
            {{-- <div class="container section-title" data-aos="fade-up">
        <h2>DEPARTEMEN</h2>
        <p>DEPARTEMEN IGNIS ELEVATIO</p>
      </div><!-- End Section Title --> --}}
            <!-- Section Title -->

            {{--
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-6">

            <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

              <div class="tab-pane fade active show" id="features-tab-4">
                <img src="{{ asset('assets-landing/assets/img/kahim.jpg') }}" alt="" class="img-fluid">
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-5">
                <img src="{{ asset('assets-landing/assets/img/sekre.jpg') }}" alt="" class="img-fluid">
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-6">
                <img src="{{ asset('assets-landing/assets/img/bendahara.jpg') }}" alt="" class="img-fluid">
            </div><!-- End Tab Content Item -->
            </div>

            </div>
            <div class="col-lg-5 d-flex align-items-center">

                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-4">
                            <i class="bi bi-binoculars"></i>
                            <div>
                                <h4 class="d-none d-lg-block">KETUA & WAKIL</h4>
                                <p>
                                    Memimpin organisasi dengan menetapkan arah strategis, mengoordinasikan kegiatan,
                                    memastikan tercapainya visi serta misi himpunan, serta membangun komunikasi yang
                                    efektif antara pengurus dan anggota.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-5">
                            <i class="bi bi-box-seam"></i>
                            <div>
                                <h4 class="d-none d-lg-block">SEKERTARIS</h4>
                                <p>
                                    Sekretaris bertanggung jawab untuk mengelola administrasi umum, menyimpan catatan,
                                    serta pemeliharaan arsip dan dokumen organisasi.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-6">
                            <i class="bi bi-brightness-high"></i>
                            <div>
                                <h4 class="d-none d-lg-block">BENDAHARA</h4>
                                <p>

                                    Bendahara bertanggung jawab untuk mengelola dan mengurus keuangan serta aset suatu
                                    organisasi.
                                </p>
                            </div>
                        </a>
                    </li>
                </ul><!-- End Tab Nav -->

            </div>



            </div>

            </div>

        </section><!-- /Features Section -->


        <!-- Features Section -->
        <section id="features" class="features section">

            <!-- Section Title -->


            <div class="container">
                <div class="row justify-content-between">

                    <div class="col-lg-5 d-flex align-items-center">

                        <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-1">
                                    <i class="bi bi-binoculars"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">MEDIA DAN INFORMASI</h4>
                                        <p>
                                            MEDINFO merupakan departemen yang bertanggung
                                            jawab atas pengelolaan, distribusi, dan penyebaran
                                            informasi serta pengembangan media komunikasi
                                            dalam sebuah organisasi.
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-2">
                                    <i class="bi bi-box-seam"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">PEMBERDAYAAN SUMBER DAYA ANGGOTA</h4>
                                        <p>
                                            PSDA merupakan departemen untuk
                                            meningkatkan kapasitas dan potensi setiap
                                            individu dalam organisasi, dengan
                                            program-program inovatif dan berkelanjutan,
                                        </p>
                                    </div>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-3">
                                    <i class="bi bi-brightness-high"></i>
                                    <div>
                                        <h4 class="d-none d-lg-block">RISET DAN TEKNOLOGI </h4>
                                        <p>
                                            RISTEK merupakan departemen yang berfokus
                                            pada pengembangan, penelitian, dan inovasi
                                            dalam bidang teknologi informasi.
                                        </p>
                                    </div>
                                </a>
                            </li>
                        </ul><!-- End Tab Nav -->

                    </div>

                    <div class="col-lg-6">

                        <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                            <div class="tab-pane fade active show" id="features-tab-1">
                                <img src="{{ asset('assets-landing/assets/img/medinfo.jpg') }}" alt=""
                                    class="img-fluid">
                            </div><!-- End Tab Content Item -->

                            <div class="tab-pane fade" id="features-tab-2">
                                <img src="{{ asset('assets-landing/assets/img/ristek.jpg') }}" alt="" class="img-fluid">
                            </div><!-- End Tab Content Item -->

                            <div class="tab-pane fade" id="features-tab-3">
                                <img src="{{ asset('assets-landing/assets/img/psda.jpg') }}" alt="" class="img-fluid">
                            </div><!-- End Tab Content Item -->
                        </div>

                    </div>

                </div>

            </div> --}}

            {{-- </section><!-- /Features Section -->

      <!-- Features Section -->
      <section id="features" class="features section">

        <!-- Section Title -->


        <div class="container">
          <div class="row justify-content-between">
            <div class="col-lg-6">

              <div class="tab-content" data-aos="fade-up" data-aos-delay="200">

                <div class="tab-pane fade active show" id="features-tab-7">
                  <img src="{{ asset('assets-landing/assets/img/humas.jpg') }}" alt="" class="img-fluid">
            </div><!-- End Tab Content Item -->

            <div class="tab-pane fade" id="features-tab-8">
                <img src="{{ asset('assets-landing/assets/img/danus.jpg') }}" alt="" class="img-fluid">
            </div><!-- End Tab Content Item -->


            </div>

            </div>
            <div class="col-lg-5 d-flex align-items-center">

                <ul class="nav nav-tabs" data-aos="fade-up" data-aos-delay="100">
                    <li class="nav-item">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#features-tab-7">
                            <i class="bi bi-binoculars"></i>
                            <div>
                                <h4 class="d-none d-lg-block">HUBUNGAN MASYARAKAT</h4>
                                <p>
                                    HUMAS merupakan departemen yang bertugas
                                    untuk menjaga komunikasi dan hubungan baik
                                    dengan organisasi mahasiswa baik di bidang
                                    internal maupun eksternal.
                                </p>
                            </div>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#features-tab-8">
                            <i class="bi bi-box-seam"></i>
                            <div>
                                <h4 class="d-none d-lg-block">DANA USAHA</h4>
                                <p>
                                    DANUS merupakan departemen yang mengelola
                                    keuangan dan mengembangkan usaha untuk
                                    mendukung kegiatan HIMATIF.
                                </p>
                            </div>
                        </a>
                    </li>

                </ul><!-- End Tab Nav -->

            </div>



            </div>

            </div>

        </section><!-- /Features Section --> --}}


        <!-- ======= Team Section ======= -->
        <section id="team" class="team">
            <div class="container">

                {{-- <div class="section-title" data-aos="fade-up">
          <h2>STRUKTUR ORGANISASI</h2>
          <p>KABINET IGNIS ELEVATIO</p>
        </div> --}}

                <div class="carousel">
                    <div class="list">
                        <div class="item">
                            <img src="assets-landing/assets/img/air/img9.png">
                            <div class="introduce">
                                <div class="title">DEPARTMENT</div>
                                <div class="topic"><b>DANUS</b></div>
                                <div class="des mb-3">
                                    Sarah Ardelia - Devina Muhhamad A.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>DANUS</b></div>
                                <div class="des mb-3">
                                    DANUS merupakan departemen yang mengelola keuangan dan mengembangkan usaha untuk
                                    mendukung kegiatan HIMATIF.
                                </div>
                                <div class="btn-wrap">
                                    <button type="button" class="btn-buy" data-toggle="modal" data-target="#danusModal">
                                        See More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets-landing/assets/img/air/img2.png">
                            <div class="introduce">
                                {{-- <div class="title">DEPARTMENT</div> --}}
                                <div class="topic"><strong>HEAD OF HIMATIF</strong></div>
                                <div class="des mb-3">
                                    Yasmin Helmy - M.Raihan Alfaiz
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>HEAD OF</b> HIMATIF</div>
                                <div class="des mb-3">
                                    <!-- lorem 50 -->
                                    Memimpin organisasi dengan menetapkan arah strategis, mengoordinasikan kegiatan,
                                    memastikan tercapainya visi serta misi himpunan, serta membangun komunikasi yang
                                    efektif antara pengurus dan anggota.
                                </div>
                                {{-- <div class="checkout">
                            <button>ADD TO CART</button>
                            <button>CHECKOUT</button>
                        </div> --}}
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets-landing/assets/img/air/img3.png">
                            <div class="introduce">
                                {{-- <div class="title">DEPARTMENT</div> --}}
                                <div class="topic"><b>TREASURER</b></div>
                                <div class="des mb-3">
                                    <!-- 20 lorem -->
                                    Adam Rinaldi - Della Nur Cahya Putri
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>TREASURER</b></div>
                                <div class="des mb-3">
                                    Bendahara bertanggung jawab untuk mengelola dan mengurus keuangan serta aset
                                    suatu organisasi.
                                </div>
                                {{-- <div class="checkout">
                            <button>ADD TO CART</button>
                            <button>CHECKOUT</button>
                        </div> --}}
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets-landing/assets/img/air/img4.png">
                            <div class="introduce">
                                {{-- <div class="title">DEPARTMENT</div> --}}
                                <div class="topic"><b>SECRETARY</b></div>
                                <div class="des mb-3">
                                    Ananda Dwi Cynta - Nabilah Rasyiqah
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>SECRETARY</b></div>
                                <div class="des mb-3">
                                    Bendahara bertanggung jawab untuk mengelola dan mengurus keuangan serta aset
                                    suatu organisasi.
                                </div>
                                {{-- <div class="checkout">
                            <button>ADD TO CART</button>
                            <button>CHECKOUT</button>
                        </div> --}}
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets-landing/assets/img/air/img5.png">
                            <div class="introduce">
                                <div class="title">DEPARTMENT</div>
                                <div class="topic"><b>MEDINFO</b></div>
                                <div class="des mb-3">
                                    M. Fadli Taptajani - Nakhlah Wafa A.
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>MEDINFO</b></div>
                                <div class="des mb-3">
                                    MEDINFO merupakan departemen yang bertanggung jawab atas pengelolaan,
                                    distribusi, dan penyebaran informasi serta pengembangan media komunikasi dalam
                                    sebuah organisasi.
                                </div>
                                <div class="btn-wrap">
                                    <button type="button" class="btn-buy" data-toggle="modal"
                                        data-target="#medinfoModal">
                                        See More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets-landing/assets/img/air/img6.png">
                            <div class="introduce">
                                <div class="title">DEPARTMENT</div>
                                <div class="topic"><b>RISTEK</b></div>
                                <div class="des mb-3">
                                    Yosua Immanuel H.K - Zidan Azzahra
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>RISTEK</b></div>
                                <div class="des mb-3">
                                    RISTEK merupakan departemen yang berfokus pada pengembangan, penelitian, dan
                                    inovasi dalam bidang teknologi informasi.
                                </div>
                                <div class="btn-wrap">
                                    <button type="button" class="btn-buy" data-toggle="modal"
                                        data-target="#ristekModal">
                                        See More
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <img src="assets-landing/assets/img/air/img7.png">
                            <div class="introduce">
                                <div class="title">DEPARTMENT</div>
                                <div class="topic"><b>PSDA</b></div>
                                <div class="des mb-3">
                                    Alvando Lefrand I.L - Fadly Attoriq
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>PSDA</b></div>
                                <div class="des mb-3">
                                    PSDA merupakan departemen untuk meningkatkan kapasitas dan potensi setiap
                                    individu dalam organisasi, dengan program-program inovatif dan berkelanjutan.
                                </div>
                                <div class="btn-wrap">
                                    <button type="button" class="btn-buy" data-toggle="modal" data-target="#psdaModal">
                                        See More
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="item">
                            <img src="assets-landing/assets/img/air/img8.png">
                            <div class="introduce">
                                <div class="title">DEPARTMENT</div>
                                <div class="topic"><b>HUMAS</b></div>
                                <div class="des mb-3">
                                    Radiva Rizky - Muhammad Afriqi
                                </div>
                                <button class="seeMore">SEE MORE &#8599</button>
                            </div>
                            <div class="detail">
                                <div class="title"><b>PSDA</b></div>
                                <div class="des mb-3">
                                    HUMAS merupakan departemen yang bertugas untuk menjaga komunikasi dan hubungan
                                    baik dengan organisasi mahasiswa baik di bidang internal maupun eksternal.
                                </div>
                                <div class="btn-wrap">
                                    <button type="button" class="btn-buy" data-toggle="modal" data-target="#humasModal">
                                        See More
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="arrows">
                        <button id="prev">
                            <</button> <button id="next">>
                        </button>
                        <button id="back">See All &#8599</button>
                    </div>
                </div>


                {{-- <div class="row" data-aos="fade-left">
          <div class="col-lg-4 col-md-6 mt-5 mt-lg-0">
            <div class="member" data-aos="zoom-in" data-aos-delay="400">
              <div class="pic"><img src="{{ asset('assets-landing/assets/img/team/pemtek.png') }}" class="img-fluid"
                alt=""></div>
            <div class="member-info">
                <h4>DEPT PEMTEK</h4>
                <span>PENGEMBANGAN TEKNOLOGI</span>
                <div class="social">
                    <button type="button" class="btn-buy" data-toggle="modal" data-target="#pemtekModal"><i
                            class="bi bi-arrow-right-circle"></i></button>
                </div>
            </div>
            </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="member" data-aos="zoom-in" data-aos-delay="100">
                    <div class="pic"><img src="{{ asset('assets-landing/assets/img/team/5.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>DEPT HUMAS</h4>
                        <span>HUBUNGAN MASYARAKAT</span>
                        <div class="social">
                            <button type="button" class="btn-buy" data-toggle="modal" data-target="#humasModal"><i
                                    class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mt-5 mt-md-0">
                <div class="member" data-aos="zoom-in" data-aos-delay="200">
                    <div class="pic"><img src="{{ asset('assets-landing/assets/img/team/3.png') }}" class="img-fluid"
                            alt=""></div>
                    <div class="member-info">
                        <h4>DEPT DANUS</h4>
                        <span>DANA USAHA</span>
                        <div class="social">
                            <button type="button" class="btn-buy" data-toggle="modal" data-target="#danusModal"><i
                                    class="bi bi-arrow-right-circle"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            </div> --}}

            </div>
        </section><!-- End Team Section -->

        <!-- ======= Recent Blog Posts Section ======= -->
        <section id="pricing" class="recent-blog-posts">
            <div class="container" data-aos="fade-up">
            <center>
                <div class="section-title" data-aos="fade-up">
                    <h2>BLOG</h2>
                    <p>BERITA HIMATIF</p>
                </div>
            </center>
                <div class="row">
                    @foreach ($posts as $post)
                    <div class="col-lg-4">
                        <div class="post-box">
                            <div class="post-img"><img src="{{ asset('storage/' . $post->image_cover) }}"
                                    class="img-fluid" alt="" width="1080px" height="1352px"></div>
                            <span class="post-date">{{ $post->created_at->diffForHumans() }}</span>
                            <h3 class="post-title">{{ $post->title }}</h3>
                            <a href="{{ route('blog.post', $post->id) }}"
                                class="readmore stretched-link mt-auto"><span>Read More</span><i
                                    class="bi bi-arrow-right"></i></a>
                        </div>
                    </div>
                    @endforeach
                    <div class="btn-wrap">
                        <a href="{{ route('blog') }}" class="btn-buy">Selengkapnya</a>

                    </div>

                </div>

            </div>

        </section><!-- End Recent Blog Posts Section -->



        <!-- ======= Gallery Section ======= -->
        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <center>
                <div class="section-title">
                    <h2>Gallery</h2>
                    <p>Gallery Himatif</p>
                </div>
                </center>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    @foreach ($gallery as $gl)
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-img"><img src="{{ asset('storage/' . $gl->image) }}" class="img-fluid"
                                alt=""></div>
                        <div class="portfolio-info">
                            <h4>{{ $gl->tahun }}</h4>
                            <p>{{ $gl->nama }}</p>
                            <a href="{{ asset('storage/' . $gl->image) }}" data-gallery="portfolioGallery"
                                class="portfolio-lightbox preview-link"><i class="bx bx-plus"></i></a>
                        </div>
                    </div>
                    @endforeach

                    <div class="btn-wrap">
                        <a href="{{ route('gallery-landing') }}" class="btn-buy">Selengkapnya</a>

                    </div>




                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Alumni Section ======= -->
        <section id="testimonials" class="alumni">

            <div class="container" data-aos="fade-up">

                <div class="section-title" data-aos="fade-up">
                    <h2>Alumni</h2>
                    <p>Alumni Himatif</p>
                </div>

                <div class="row gy-4">
                    @foreach ($alumni as $al)
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
                        <div class="member">
                            <div class="member-img">
                                <img src="{{ asset('storage/' . $al->image) }}" class="img-fluid" alt="" width="400px"
                                    height="600px">
                            </div>
                            <div class="member-info">
                                <h4>{{ $al->nama }}</h4>
                                <span>Angkatan {{ $al->angkatan }}</span>
                            </div>
                        </div>
                    </div>
                    @endforeach




                    <div class="btn-wrap">
                        <a href="{{ route('alumni-landing') }}" class="btn-buy">Selengkapnya</a>

                    </div>
                </div>

            </div>

        </section><!-- End Team Section -->




        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title" data-aos="fade-up">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </div>

                <div class="row">

                    <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>Jakarta Global University. Depok, Indonesia</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>himatif@jgu.ac.id</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+62 877-7547-2238</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <form action="mailto:himatif@jgu.ac.id" method="post" role="form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="footer-info">
                            <h3>HIMATIF</h3>
                            <img src="{{ asset('assets-landing/assets/img/Logo HIMATIF 1.png') }}" alt="">
                            <br><br>
                            Jakarta Global University <br>
                            Depok, Indonesia<br><br>
                            <strong>Phone:</strong> +62 12345678<br>
                            <strong>Email:</strong> himatif.19@jgu.ac.id<br>
                            </p>
                            <div class="social-links mt-3">
                                <a href="#" class="twitter"><i class="bx bxl-github"></i></a>
                                <a href="#" class="facebook"><i class="bx bxl-twitter"></i></a>
                                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#hero">Home</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#about">About </a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#team">Struktur</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#pricing">Berita</a></li>

                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a href="#gallery">Gallery</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#testimonials">Alumni</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a href="#contact">Kontak</a></li>
                        </ul>
                    </div>

                    <!-- <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div> -->

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>Saran Dan Kritik</h4>
                        <p>Berikan Kami Saran Dan Kritik melalui email kami secara gratis</p>
                        <form id="emailForm">
                            <input type="text" id="messageInput" placeholder="Masukkan pesan Anda"></input>
                            <button type="submit" onclick="redirectToEmail()">Kirim</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Himatif</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>



    <!-- Modal misi -->
    <div class="modal fade" id="misiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-custom-vm">
                <!-- Tambahkan kelas modal-custom di sini -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">MISI HIMATIF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <ul class="numbered-list">
                        <li>Meningkatkan hubungan erat yang sinergis dan positif antar sesama anggota himpunan Teknik
                            Informatika maupun diluar himpunan Teknik Informatika</li>
                        <li>Menciptakan sistem kerja yang berkualitas, berkuantitas serta tersistematik Laksana
                            Estungkara</li>
                        <li>Memfasilitasi setiap anggota dalam berkarya dan menyalurkan aspirasinya</li>
                        <li>Merekapitulasi pengelolaan yang belum optimal sebelumnya</li>
                        <li>Meningkatkan kesadaran para anggota akan pentingnya berpartisipasi dalam setiap kegiatan
                            yang dilaksanakan, khususnya pada departemen masing- masing</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-center " data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal visi -->
    <div class="modal fade" id="visiModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content modal-custom">
                <!-- Tambahkan kelas modal-custom di sini -->
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">VISI HIMATIF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Merekontruksi nalar kritis Himpunan Mahasiswa Teknik Informatika sebagai upaya membentuk sumber
                        daya yang bergerak secara dinamis, aktif, inovatif dan responsive terhadap tim dan kondisi
                        sosial yang dilandasi iman dan taqwa</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-light btn-center " data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Seketariat-->
    <!-- <div class="modal fade" id="sekreModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-center" id="exampleModalLabel">KESEKRETARIATAN HIMATIF</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/61.png') }}"
                                    alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Mutiara Syafitri</h5>
                                    <p>Ketua Himpunan</p>
                                </div>
                            </div>pngs
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/7.png') }}"
                                    alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>harsya</h5>
                                    <p> Wakil Ketua Himpunan</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/8.png') }}"
                                    alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Nabila Rasyiqah</h5>
                                    <p>Sekretatis 1</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/9.png') }}"
                                    alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Amanda Amalia</h5>
                                    <p>Bendahara 1</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/11.png') }}"
                                    alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Yoga Zahran Mahardika</h5>
                                    <p>Sekretatis 2</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/10.png') }}"
                                    alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Muhammad Rizqi Wafii Fahyari</h5>
                                    <p>Bendahara 2</p>
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div> -->


    <!-- Modal Medinfo-->
    <div class="modal fade" id="medinfoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-center" id="exampleModalLabel">DEPARTEMEN <br> MEDIA DAN
                        INFORMASI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselMedinfo" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselMedinfo" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselMedinfo" data-slide-to="1"></li>
                            <li data-target="#carouselMedinfo" data-slide-to="2"></li>
                            <li data-target="#carouselMedinfo" data-slide-to="3"></li>
                            <li data-target="#carouselMedinfo" data-slide-to="4"></li>
                            <li data-target="#carouselMedinfo" data-slide-to="5"></li>
                            <li data-target="#carouselMedinfo" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-1.jpg') }}"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-2.jpg') }}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-3.jpg') }}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-4.jpg') }}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-5.jpg') }}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-6.jpg') }}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/medinfo/medinfo-7.jpg') }}"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselInfokom" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselInfokom" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Kastrat-->
    <div class="modal fade" id="psdaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-center" id="exampleModalLabel">DEPARTEMEN <br> PENGEMBANGAN
                        SUMBER DAYA ANGGOTA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselPsda" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselPsda" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselPsda" data-slide-to="1"></li>
                            <li data-target="#carouselPsda" data-slide-to="2"></li>
                            <li data-target="#carouselPsda" data-slide-to="3"></li>
                            <li data-target="#carouselPsda" data-slide-to="4"></li>
                            <li data-target="#carouselPsda" data-slide-to="5"></li>
                            <li data-target="#carouselPsda" data-slide-to="6"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-3.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-4.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-5.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-6.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/psda/psda-7.jpg') }}" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselKastrat" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselKastrat" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Pemtek-->
    <div class="modal fade" id="ristekModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-center" id="exampleModalLabel">DEPARTEMEN <br> RISET DAN
                        TEKNOLOGI</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselRistek" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselRistek" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselRistek" data-slide-to="1"></li>
                            <li data-target="#carouselRistek" data-slide-to="2"></li>
                            <li data-target="#carouselRistek" data-slide-to="3"></li>
                            <li data-target="#carouselRistek" data-slide-to="4"></li>
                            <li data-target="#carouselRistek" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/ristek/ristek-1.jpg') }}"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/ristek/ristek-2.jpg') }}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/ristek/ristek-3.jpg') }}"
                                    alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/ristek/ristek-4.jpg') }}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/ristek/ristek-5.jpg') }}"
                                    alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/ristek/ristek-6.jpg') }}"
                                    alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselPemtek" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselPemtek" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Humas-->
    <div class="modal fade" id="humasModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  modal-custom">
                <div class="modal-header">
                    <h5 class="modal-title modal-title-center" id="exampleModalLabel">DEPARTEMEN <br> HUBUNGAN
                        MASYARAKAT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselHumas" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselHumas" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselHumas" data-slide-to="1"></li>
                            <li data-target="#carouselHumas" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/25.png') }}"
                                    alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Muhammad Hasan Ismail</h5>
                                    <p>Ketua Departemen</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/26.png') }}"
                                    alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Mochamad Haikal Alfarizi</h5>
                                    <p>Anggota Departemen</p>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="{{ asset('assets-landing/assets/img/team/27.png') }}"
                                    alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                    <h5>Faisal Jatmiko Setiadji Pohoeya</h5>
                                    <p>Anggota Departemen</p>
                                </div>
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselHumas" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselHumas" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal Danus-->
    <div class="modal fade" id="danusModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content  modal-custom">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="carouselDanus" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselDanus" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselDanus" data-slide-to="1"></li>
                            <li data-target="#carouselDanus" data-slide-to="2"></li>
                            <li data-target="#carouselDanus" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/danus_himatif/danus-1.jpg') }}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/danus_himatif/danus-2.jpg') }}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/danus_himatif/danus-3.jpg') }}" alt="Third slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100"
                                    src="{{ asset('assets-landing/assets/img/danus_himatif/danus-4.jpg') }}" alt="Third slide">
                            </div>

                        </div>
                        <a class="carousel-control-prev" href="#carouselDanus" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselDanus" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </div>


    <!-- Vendor JS Files -->
    <script src="{{ asset('assets-landing/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets-landing/assets/vendor/aos/aos.js') }}"></script>
    <script src=" {{ asset('assets-landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src=" {{ asset('assets-landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src=" {{ asset('assets-landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src=" {{ asset('assets-landing/assets/vendor/php-email-form/validate.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets-landing/assets/js/main.js') }}"></script>
    <script src="{{ asset('assets-landing/assets/js/slider.js') }}"></script>
    <script src="{{ asset('assets-landing/assets/js/depart.js') }}"></script>
    <script>
        function redirectToEmail() {
            var emailAddress = "himatif@jgu.ac.id"; // Ubah sesuai dengan alamat email yang dituju
            var message = document.getElementById("messageInput").value;
            var subject = "Saran dan Kritik";
            var mailtoLink = "mailto:" + encodeURIComponent(emailAddress) + "?subject=" + encodeURIComponent(subject) +
                "&body=" + encodeURIComponent(message);
            window.location.href = mailtoLink;
            return false;
        }

    </script>
    <script>
        function redirectToEmail() {
            var name = document.getElementById("name").value;
            var email = document.getElementById("email").value;
            var subject = document.getElementById("subject").value;
            var message = document.getElementById("message").value;

            // Membuat pesan email dengan informasi yang diberikan
            var mailtoLink = "mailto:himatif@jgu.ac.id" +
                "?subject=" + encodeURI(subject) +
                "&body=" +
                "Name: " + encodeURI(name) + "\n" +
                "Email: " + encodeURI(email) + "\n" +
                "Subject: " + encodeURI(subject) + "\n" +
                "Message: " + encodeURI(message);

            // Mengarahkan pengguna ke aplikasi email default dengan pesan yang sudah dibuat
            window.location.href = mailtoLink;
            return false;
        }

    </script>
</body>

</html>
