@extends('layouts.frontend.main')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-lg-12">
    @if ($message = Session::get('success'))
      <div class="alert alert-success alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button> 
          <strong>{{ $message }}</strong>
      </div>
    @endif
    </div>
    <div class="col-lg-6">
    <div class="small-box bg-warning">
              <div class="inner">
              <a href="{{url('/pendaftaran/register')}}" class="text-info">
                <h3>Formulir Registrasi </h3>

                <p>Halaman Registrasi Calon Tenaga Kontrak</p>
              </a>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="{{url('/pendaftaran/register')}}" class="small-box-footer">Klik disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
             
</div>
<div class="col-lg-6">
<div class="small-box bg-info">
              <div class="inner">
              <a href="{{url('/pendaftaran/login')}}" class="text-warning">
                <h3>Formulir Login</h3>

                <p>Calon Pelamar jika sudah registrasi, silahkan login disini</p>
              </a>
              </div>
              <div class="icon">
                <i class="ion ion-key"></i>
              </div>
              <a href="{{url('/pendaftaran/login')}}" class="small-box-footer">Klik disini <i class="fas fa-arrow-circle-right"></i></a>
            </div>
             
</div>
    
    <div class="col-md-12">
            <div class="card">
               
              <!-- /.card-header -->
              <div class="card-body">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                  <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                     
                  </ol>
                  <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100" src="{{ url ('images/slide1.png') }}" alt=" ">
                    </div>
                    <div class="carousel-item ">
                      <img class="d-block w-100" src="{{ url ('images/slide2.png') }}" alt=" ">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ url ('images/slide3.png') }}" alt=" ">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ url ('images/slide4.png') }}" alt=" ">
                    </div>
                    <div class="carousel-item">
                      <img class="d-block w-100" src="{{ url ('images/slide5.png') }}" alt=" ">
                    </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

         
    </div>
</div>
@endsection
