@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="row">
         
                <div class=" text-center h2 text-info">
                  PUBLIKASI
                </div>
                <p class="text-center text-dark">
                  Menampilkan data kajian yang telah di uji dan diperiksa oleh lembaga pemerintahan yang berfungsi sebagai informasi yang di tujukan kepada masyarakat dalam berbagai bidang dan aspek. Sebagai gambaran kinerja Dinas Pemberdayaan Perempuan Perlindungan Anak, Catatan Sipil dan Keluarga Berencana (DP3ACSKB) dalam melayani masyarakat sebagai bukti hasil kinerja dari visi dan misi yang ada.  
                </p>
              </div>
        </div>
    </div>
    <div class="row">
        @foreach($pub as $pub)
        <div class="feature-col col-lg-4 col-xs-12  p-4">
          <div class="card card-block border bg-light p-0">
            <div style="height: 140px;" >
              <img src="{{ asset('downloads/'.$pub->file_foto) }}" class="img-fluid mx-auto overflow-hidden" alt="Responsive image">
            </div>

            <div class="bg-light p-2" style="height: 100px;">
              <h5>
               <a href="{{url('/detail-publikasi/'.$pub->alias)}}">{{ $pub->judul}}</a> 
              </h5>
            
              <p>
                {!! Str::limit($pub->deskripsi, 100) !!}
              </p>
            </div>
          </div>
        </div>
        @endforeach


         

         
      </div>
</div>  

 
 
@endsection
