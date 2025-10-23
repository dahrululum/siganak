@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="row">
         
                <div class=" text-center h2 text-info">
                  {{ $label }}
                </div>
                 
              </div>
        </div>
    </div>
    <div class="row">
        @foreach($web as $pub)
        <div class="feature-col col-lg-4 col-xs-12  p-4">
          <div class="card card-block border bg-white p-0">
            <div style="height: 160px; overflow: hidden; object-fit: scale-down; object-position: 100% 100%; " class="pt-2 text-center" >
              <img alt="" class="team-img align-center img-fluid " src="{{ asset('downloads/'.$pub->file_foto) }}"  width="150px;" >
            </div>

            <div class="bg-light p-2 overflow-hidden" style="height: 100px;">
              <h5>
               <a href="{{ $pub->urlna }}" target="_blank">{{ $pub->nama}}</a> 
              </h5>
            
              
            </div>
          </div>
        </div>
        @endforeach


         

         
      </div>
</div>  

 
 
@endsection
