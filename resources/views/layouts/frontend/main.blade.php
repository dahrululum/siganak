<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIGANAK :: DP3ACSKB Provinsi Kepulauan Bangka Belitung</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
      <!-- Vendor CSS Files -->
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
      <!-- Template Main CSS File -->
      <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> 
{{--       
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
     --}}
    

</head>
<body>
    
    <section id="hero" class="hero">
        <div class="container text-center">
          <div class="row">
            <div class="col-md-12">
              <a class="hero-brand" href="#" title="Home"><img alt="SiGanak" src="{{ asset('images/logobabel.png') }}"></a>
            </div>
          </div>
    
          <div class="col-md-12">
            <h1>
              SI-GANAK
            </h1>
    
            <p class="tagline">
             Sistem Informasi Gender dan Anak
            </p>
            <a class="btn btn-full scrollto" href="#about">Mulai</a>
          </div>
        </div>
    
      </section><!-- End Hero -->
      <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="#"><img src="{{ asset('images/logo_siganak.png') }}" alt=""></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Bell</a></h1>-->
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        @include('layouts.frontend.nav')
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex align-items-center">
        {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        
      </div>
    </div>
  </header><!-- End Header -->
  <main id="main">
    <section class="about" id="about">

        <div class="container text-left">
          <h2>
            Gambaran Umum
          </h2>
    
          <p>
            Kesetaraan Gender (genderequity) lebih dimaknai sebagai kesamaan kondisi bagi laki-laki dan perempuan untuk memperoleh kesempatan serta hak- haknya sebagaimanusia dalam berperan dan berpartisipasi disegala bidang. Jadi kesetaraan gender bukan hanya dimaknai dari segi perbedaan fisik antara laki-laki dan perempuan saja. Sementara itu, keadilan gender (genderequality) merupakan  proses dan perlakuan  adil terhadap  perempuan  dan  laki-laki, sehingga dalam menjalankan kehidupan bernegara danb ermasyarakat, tidakada pembakuan peran, beban ganda, subordinasi, marginalisasi dan kekerasan terhadap perempuan maupun laki-laki.
          </p>
          <p>
            Sesuai dengan instruksi Presiden Nomor 9 Tahun 2000 tentang Pengarusutamaan gender dalam pembangunan Nasional bahwa setiap kementrian/lembaga dan pemerintah daerah harus melaksanakan pengarusutamaan gender guna terselenggaranya perencanaan, penyusunan, pelaksanaan, pemantauan, dan evaluasi atas kebijakan dan program pembangunan nasional yang berperspektif gender sesuai dengan bidang tugas dan fungsi, serta kewenangan masing-masing. </p>
            <p>
                Selain permasalahan dan isu gender permasalahan anak juga menjadi urusan yang sangat penting. Sebagaimana yang diatur dalam Konvensi Hak Anak, bahwa setiap anak mempunyai untuk hidup, tumbuh, berkembang, mendapat perlindungan dan berpartisipasi. Sehingga negara berkewajiban untuk memastikan seluruh anak Indonesia terpenuhi hak-haknya dan mendapatkan perlindungan dari segala bentuk diskriminasi. Orang tua, organisasi dan negara harus selalu menjadikan kepentingan terbaik bagi anak sebagai pertimbangan utama dalam perencanaan, penganggaran, pelaksanaan, serta monitoring dan evaluasi pembangunan perlindungan anak.
            </p>
            <p>
                Perlindungan anak sudah merupakan komitmen bersama semua negara, terutama negara-negara yang meratifikasi konvensi hak anak. Pemenuhan hak anak dan perlindungan khusus bagi anak merupakan salah satu target dalam Tujuan Pembangunan Berkelanjutan (TPB/SDGs) hingga tahun 2030, yaitu:
                <ul>
                    <li>Tujuan 1, Tidak Ada Anak yang Harus Hidup dalam Kemiskinan;</li>
                    <li>Tujuan 2, Tidak Ada Anak yang Kekurangan Gizi; </li>
                    <li>Tujuan 3, Tidak Ada Ibu atau Anak yang Meninggal karena Penyebab yang Dapat Dicegah;</li>
                    <li>Tujuan 4, Setiap Anak Harus Memperoleh Manfaat dari Lingkungan Pembelajaran yang Efektif dan Inklusif;</li>
                    <li>Tujuan 5, Setiap Anak Harus Memiliki Akses yang Sama untuk Mendapat Kesempatan, Terlepas dari Kesenjangan Gender;</li>
                    <li>Tujuan 6, Setiap Anak Berhak untuk Mendapatkan Akses terhadap Air Bersih dan Sanitasi;</li>
                    <li>Tujuan 13, Tidak Ada Anak yang Harus Menderita karena Efek Perubahan Iklim dan Degradasi Lingkungan;</li>
                    <li>Tujuan 16, Tidak Ada Anak yang Hidup dalam Ketakutan</li>
                </ul>
            </p>
            <p>
                Dalam mengatasi permasalahan tersebut perlu kebijakan yang cepat dan tepat sasaran. Dalam hal kebijakan yang tepat perlu di dukung dengan data dan informasi yang tepat dan akurat juga. Sementara kenyataan sekarang dilapangan Pemerintah Daerah minim sekali mendapatkan inputan berupa data dan informasi  karena memang  layananannya yang belum mendukung. Hal inilah yang menginisiasi untuk di adakan suatu aplikasi yang secara langsung dapat membantu stakeholder dalam mengambil kebijakan yang lebih berpihak ke pada perempuan dan anak dalam pembanguanan
    
            </p>
    
            
    
          
    
          
        </div>
    
      </section><!-- End About Section -->
      <!-- ======= Features Section ======= -->
      <section class="features" id="features">
    
        <div class="container">
          <h2 class="text-center">
            Publikasi
          </h2>
    
          <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-briefcase"></i>
                  </div>
                </div>
    
                <div>
                  <h3>
                    Custom Design
                  </h3>
    
                  <p>
                    Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                  </p>
                </div>
              </div>
            </div>
    
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-card-checklist"></i>
                  </div>
                </div>
    
                <div>
                  <h3>
                    Responsive Layout
                  </h3>
    
                  <p>
                    Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                  </p>
                </div>
              </div>
            </div>
    
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-bar-chart"></i>
                  </div>
                </div>
    
                <div>
                  <h3>
                    Innovative Ideas
                  </h3>
    
                  <p>
                    Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                  </p>
                </div>
              </div>
            </div>
          </div>
    
          <div class="row">
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-binoculars"></i>
                  </div>
                </div>
    
                <div>
                  <h3>
                    Good Documentation
                  </h3>
    
                  <p>
                    Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                  </p>
                </div>
              </div>
            </div>
    
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-brightness-high"></i>
                  </div>
                </div>
    
                <div>
                  <h3>
                    Excellent Features
                  </h3>
    
                  <p>
                    Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                  </p>
                </div>
              </div>
            </div>
    
            <div class="feature-col col-lg-4 col-xs-12">
              <div class="card card-block text-center">
                <div>
                  <div class="feature-icon">
                    <i class="bi bi-calendar4-week"></i>
                  </div>
                </div>
    
                <div>
                  <h3>
                    Retina Ready
                  </h3>
                  <p>
                    Eque feugiat contentiones ei has. Id summo mundi explicari his, nec in maiorum scriptorem.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
    
      </section><!-- End Features Section -->
      <section class="welcome text-center">
        <h2>Welcome to a perfect theme</h2>
        <p>
          This is the most powerful theme with thousands of options that you have never seen before.
        </p>
        <img alt="Bell - A perfect theme" class="gadgets-img hidden-md-down" src="assets/img/gadgets.png">
      </section><!-- End Welcome Section -->
      <!-- ======= Contact Section ======= -->
      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-md-12 text-center">
              <h2 class="section-title">Contact Us</h2>
            </div>
          </div>
    
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-4">
              <div class="info">
                <div>
                  <i class="bi bi-geo-alt"></i>
                  <p>A108 Adam Street<br>New York, NY 535022</p>
                </div>
    
                <div>
                  <i class="bi bi-envelope"></i>
                  <p>info@example.com</p>
                </div>
    
                <div>
                  <i class="bi bi-phone"></i>
                  <p>+1 5589 55488 55s</p>
                </div>
    
              </div>
            </div>
    
            <div class="col-lg-5 col-md-8">
              <div class="form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
    
          </div>
        </div>
      </section><!-- End Contact Section -->
  </main>
  

  <!-- ======= Footer ======= -->
  <footer class="site-footer">
    <div class="bottom">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-xs-12 text-lg-start text-center">
            <p class="copyright-text">
              &copy; Copyright <strong>DP3ACSKB Provinsi Kepulauan Bangka Belitung</strong>. 
            </p>
             
          </div>

          <div class="col-lg-6 col-xs-12 text-lg-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">Beranda</a>
              </li>

              <li class="list-inline-item">
                <a href="#about">Tentang SI-GANAK</a>
              </li>
 
              
              <li class="list-inline-item">
                <a href="#contact">Kontak Kami</a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>
{{-- <body class="layout-top-nav">

    <!-- wrapper -->
    <div class="wrapper">

        <!-- Navbar -->
        @include('layouts.frontend.nav')
        <!-- /.navbar -->

       
        <!-- Content Wrapper. Contains page content -->
        @include('layouts.frontend.content')
        <!-- /.content-wrapper -->

       

        <!-- Admin Footer -->
        @include('layouts.frontend.footer')
    </div>
    <!-- ./wrapper -->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    @yield('js_footer')

</body> --}}

</html>
