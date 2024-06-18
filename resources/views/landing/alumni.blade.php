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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href=" {{ asset('assets-landing/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href=" {{ asset('assets-landing/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('assets-landing/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href=" {{ asset('assets-landing/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('assets-landing/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href=" {{ asset('assets-landing/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href=" {{ asset('assets-landing/assets/vendor/swiper/swiper-bundle.min.css"') }} rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets-landing/assets/css/style.css') }}" rel="stylesheet">

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
        <h1><a href="{{ route('welcome') }}"><span>Himatif</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto " href="{{ route('welcome') }}">Home</a></li>
          <li><a class="nav-link scrollto" href="{{ route('welcome') }}">About</a></li>
          <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Struktur</a></li>
          <li><a class="nav-link scrollto" href="{{ route('welcome') }}">Berita</a></li>
          <li><a class="nav-link scrollto " href="{{ route('welcome') }}">Gallery</a></li>
          <li><a class="nav-link scrollto active" href="#testimonials">Alumni</a></li>
         
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  {{-- <!-- ======= Hero Section ======= -->
  <section id="hero">

    

   
  </section><!-- End Hero --> --}}

 

  <main id="main">
 <!-- ======= Breadcrumbs Section ======= -->
 <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2></h2>
        <ol>
          <li><a href="{{ route('welcome') }}">Home</a></li>
          <li>Alumni</li>
        </ol>
      </div>

    </div>
  </section><!-- End Breadcrumbs Section -->
  

   <!-- ======= Alumni Section ======= -->
 <section id="testimonials" class="alumni">

    <div class="container" data-aos="fade-up">
  
      <div class="section-title" data-aos="fade-up">
        <h2>Alumni</h2>
        <p>Alumni Himatif</p>
      </div>
  
      <div class="row gy-4">
        @foreach($alumni as $al)
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="member">
            <div class="member-img">
              <img src="{{ asset('storage/'. $al->image) }}" class="img-fluid" alt="" width="400px" height="600px">
            </div>
            <div class="member-info">
              <h4>{{ $al->nama }}</h4>
              <span>Angkatan {{ $al->angkatan }}</span>
            </div>
          </div>
        </div>
        @endforeach
  
        
      
  
        
      </div>
   
    </div>
    
  </section><!-- End Team Section -->

  

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>HIMATIF</h3>
             <img src="{{asset('assets-landing/assets/img/Logo HIMATIF 1.png')}}" alt=""> <br><br>
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

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>




  <!-- Vendor JS Files -->
  <script src="{{asset('assets-landing/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets-landing/assets/vendor/aos/aos.js') }}"></script>
  <script src=" {{ asset('assets-landing/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src=" {{ asset('assets-landing/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src=" {{ asset('assets-landing/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src=" {{ asset('assets-landing/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets-landing/assets/js/main.js') }}"></script>
  <script>
    function redirectToEmail() {
      var emailAddress = "himatif@jgu.ac.id"; // Ubah sesuai dengan alamat email yang dituju
      var message = document.getElementById("messageInput").value;
      var subject = "Saran dan Kritik";
      var mailtoLink = "mailto:" + encodeURIComponent(emailAddress) + "?subject=" + encodeURIComponent(subject) + "&body=" + encodeURIComponent(message);
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