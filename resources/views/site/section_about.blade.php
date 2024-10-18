



 
<section class="welcome" id="about">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-xs-12">
        <h2>SISTEM INFORMASI</h2>
        <div class="">
          GENDER & ANAK
        </div>  
        <small>Kemudahan dalam akses pencarian data dengan cepat, tepat dan akurat</small>

        <form id="form-search" action="{{url('/search')}}" method="get" autocomplete="off">	
          <div class="input-group mt-4">
            <input type="search" id="key" class="form-control form-control-sm" name="key" placeholder="Masukkan kata kunci pencarian...">		
            <span class="input-group-btn">
              <button class="btn btn-default" type="submit"><i class="fa fa-search fa-lg"></i></button>
            </span>
          </div>
        </form>
      </div>
      <div class="col-lg-6 col-xs-12 text-center">

        <img alt="" class="gadgets-img hidden-md-down " src="{{ asset('assets/img/gadget_icon4.png') }}">
      </div>

    </div>
    
    
    
  </div>
  
</section>
<section class="grafik" id="grafik">
  <div class="container">
    <div class="row  ">
      <h2>GRAFIK</h2> 
      <div class="col-md-6 text-center p-2" >
          <h4>Jumlah Penduduk Berdasarkan Jenis Kelamin Tahun 2024</h4>
          <div class="chart1  bg-light" id="" style="height: 340px;">
            <canvas id="chart1" style="min-height: 320px; height:320px; max-height: 320px; max-width: 100%;"></canvas>
          </div>
      </div>  
      <div class="col-md-6  text-center p-2">
        <h4>Jumlah Korban Kekerasan</h4>
        <div class="chart2 bg-light"  style="height: 300px;"></div>
      </div>  
    </div>
  </div>
</section>

{{-- <section class="about" id="about">

    <div class="container text-left">
      
      <div class="row">
        <h2 class="text-info">
          GAMBARAN UMUM
        </h2>
  
        <p>
          Kesetaraan Gender (genderequity) lebih dimaknai sebagai kesamaan kondisi bagi laki-laki dan perempuan untuk memperoleh kesempatan serta hak- haknya sebagaimanusia dalam berperan dan berpartisipasi disegala bidang. Jadi kesetaraan gender bukan hanya dimaknai dari segi perbedaan fisik antara laki-laki dan perempuan saja. Sementara itu, keadilan gender (genderequality) merupakan  proses dan perlakuan  adil terhadap  perempuan  dan  laki-laki, sehingga dalam menjalankan kehidupan bernegara dan bermasyarakat, tidak ada pembakuan peran, beban ganda, subordinasi, marginalisasi dan kekerasan terhadap perempuan maupun laki-laki.
        </p>
        <p>
          Sesuai dengan instruksi Presiden Nomor 9 Tahun 2000 tentang Pengarusutamaan gender dalam pembangunan Nasional bahwa setiap kementrian/lembaga dan pemerintah daerah harus melaksanakan pengarusutamaan gender guna terselenggaranya perencanaan, penyusunan, pelaksanaan, pemantauan, dan evaluasi atas kebijakan dan program pembangunan nasional yang berperspektif gender sesuai dengan bidang tugas dan fungsi, serta kewenangan masing-masing. <a href="{{url('/tentang')}}" class="btn btn-sm btn-primary my-1 mx-2"> <i class="fa fa-list "></i> Selengkapnya</a></p>
           
      </div>
      
      

      
    </div>

</section> --}}


<!-- End About Section -->