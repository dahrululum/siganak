<section class="features" id="publikasi">
    
    <div class="container">
      <div class="row">
        <div class="feature-col col-lg-3 col-xs-12">
          <div class="row">
            <div class="col-lg-3 col-xs-12 feature-icon">
              <i class="bi bi-briefcase"></i>
            </div>
            <div class=" col-lg-8 col-xs-12 text-center h1">
              Publikasi
            </div>
          </div>
         
        </div>
        <div class="col-lg-7 col-xs-12 text-center border">Detail Publikasi </div>
        
      </div>
     

      <div class="row">
        @foreach($pub as $pub)
        <div class="feature-col col-lg-4 col-xs-12  p-4">
          <div class="card card-block border bg-light p-0">
            <div style="height: 140px;" >
              <img src="{{ asset('downloads/'.$pub->file_foto) }}" class="img-fluid mx-auto overflow-hidden" alt="Responsive image">
            </div>

            <div class="bg-dark p-2" style="height: 100px;">
              <h3>
               {{ $pub->judul}}
              </h3>
            
              <p>
                {!! Str::limit($pub->deskripsi, 100) !!}
              </p>
            </div>
          </div>
        </div>
        @endforeach


         

         
      </div>

       
    </div>

  </section><!-- End Features Section -->