<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>SIGANAK :: DP3ACSKB Provinsi Kepulauan Bangka Belitung</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
     <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('lte/dist/css/adminlte.css') }}">
    <!-- Styles -->
    <link href="{{ asset('css/font-awesome.css') }}" rel="stylesheet">
      <!-- Vendor CSS Files -->
      {{-- <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet"> 
      
      <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.css') }}" rel="stylesheet">
       
      <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
      <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet"> --}}
      <link rel="stylesheet" href="{{url('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
      <!-- Template Main CSS File -->
      
     
{{--       
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
     --}}
    
</head>
<body class="hold-transition layout-top-nav">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand-md navbar-info navbar-dark">
      <div class="container">
        <a href="{{url('/')}}" class="navbar-brand">
          <img src="{{ asset('images/logo_siganak.png') }}" alt="Logo SIGANAK" class="brand-image  "
               style=" ">
           
        </a>
        
        
  
        <div class="collapse navbar-collapse order-3" id="navbarCollapse">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
             
            <li class="nav-item"><a class="nav-link  " href="{{url('/')}}">
              {{-- <i class="bi bi-house-fill" style="font-size: 20px; padding:2px;"></i>  --}}
              Home</a>
            </li>
            <li><a class="nav-link " href="{{url('/')}}">Tentang Kami</a></li>
            <li><a class="nav-link  <?php if(Request::segment(2)=='anak'){echo 'active';} ?>" href="{{url('/datadasar/anak')}}">Data Anak</a></li>
            <li><a class="nav-link  <?php if(Request::segment(2)=='gender'){echo 'active';} ?>" href="{{url('/datadasar/gender')}}">Data Gender</a></li>
            <li><a class="nav-link  <?php if(Request::segment(1)=='indikator'){echo 'active';} ?>" href="{{url('/indikator')}}">Indikator Kinerja  </a></li>
            <li><a class="nav-link  <?php if(Request::segment(1)=='publikasi'){echo 'active';} ?>" href="{{url('/publikasi')}}">Publikasi</a></li>
            <li><a class="nav-link  <?php if(Request::segment(1)=='artikel'){echo 'active';} ?>" href="{{url('/artikel')}}">Artikel</a></li>
            <li><a class="nav-link  <?php if(Request::segment(1)=='weblink'){echo 'active';} ?>" href="{{url('/weblink')}}">Informasi</a></li>
             
          </ul>
  
           
        </div>
  
         
         
      </div>
    </nav>
    <!-- /.navbar -->
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper  ">
      <!-- Content Header (Page header) -->
       
      <!-- /.content-header -->
  
      <!-- Main content -->
       
            @include('layouts.frontend.content')
            
           
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
  
     
  
    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="float-right d-none d-sm-inline">
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
      <!-- Default to the left -->
      &copy; Copyright <strong>DP3ACSKB Provinsi Kepulauan Bangka Belitung</strong>.
    </footer>
  </div>
  <script src="{{ asset('lte/plugins/jquery/jquery.min.js') }}"></script>
  <!-- Bootstrap 4 -->
  <script src="{{ asset('lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ asset('lte/dist/js/adminlte.min.js') }}"></script>
 
<script src="{{url('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#tablena').DataTable({ 
         "pageLength": 50,
         "ordering": false,
       });
    })
</script>
 

{{--      
    
  <header id="header" class="d-flex align-items-center">
    
    <div class="container d-flex align-items-center">

      <div id="logo" class="me-auto">
        <a href="#"><img src="{{ asset('images/logo_siganak.png') }}" alt=""></a>
     
      </div>

      <nav id="navbar" class="navbar order-last order-lg-0">
        @include('layouts.frontend.navdetail')
      </nav> 

      <div class="header-social-links d-flex align-items-center">
       
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        
      </div>
    </div>
  </header> 
  <section class="breadcrumbs">
    <div class="container">

      <div class="d-flex justify-content-between align-items-center">
        <h2>{{ $label }} </h2>
        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          <li>{{ $label }}</li>
        </ol>
      </div>

    </div>
  </section>
  <main id="main">
    @yield('content')
   
  </main>
  

  
  @include('layouts.frontend.footer')  --}}
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
