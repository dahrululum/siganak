<section class="features" id="informasi">
    
    <div class="container">
      <h2 class="text-center">
        Weblink
      </h2>

      <div class="row">
        @foreach($wl as $wl)
        <div class="col-sm-3 col-xs-6">
          <div class="card card-block">
            <a href="#"><img alt="" class="team-img" src="{{ asset('downloads/'.$wl->file_foto) }}" >
              <div class="card-title-wrap text-center">
                <span class="card-title ">{{ $wl->nama }}</span> 
              </div>

              </a>
              <div class="team-over"> 
              </div>
            
          </div>
        </div>
        @endforeach
         

         

         
      </div>

       

       
    </div>

  </section><!-- End Features Section -->