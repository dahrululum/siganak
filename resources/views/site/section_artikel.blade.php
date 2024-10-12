<section class="features" id="artikel">
    
    <div class="container">
        <div class="row">
            <div class="feature-col col-lg-3 col-xs-12">
              <div class="row">
                <div class="col-lg-2 col-xs-12 feature-icon">
                    <i class="bi bi-envelope"></i>
                </div>
                <div class=" col-lg-8 col-xs-12 text-center h1">
                  Artikel
                </div>
              </div>
             
            </div>
            <div class="col-lg-7 col-xs-12 text-center  ">Semua Artikel </div>
            
          </div>

          <div class="row">
            @foreach($art as $art)
            <div class="feature-col col-lg-4 col-xs-12  p-4">
              <div class="card card-block border bg-light p-0">
                <div style="height: 140px;" >
                  <img src="{{ asset('downloads/'.$art->file_foto) }}" class="img-fluid mx-auto overflow-hidden" alt="Responsive image">
                </div>
    
                <div class="bg-light p-2" style="height: 100px;">
                  <span> {{ $art->tglinput}}</span>
                  <h4>
                   {{ $art->judul}}
                  </h4>
                
                 
                </div>
              </div>
            </div>
            @endforeach
    
    
             
    
             
          </div>

      
    </div>

  </section><!-- End Features Section -->