@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="row">
         
                <div class=" text-center h2 text-info">
                  ARTIKEL
                </div>
                
              </div>
        </div>
    </div>
    <div class="row  bg-white p-2">
        @foreach($pub as $art)
        @php
            $tglna=Carbon::parse($art->created_at)->isoFormat('DD MMMM YYYY');  
        @endphp

        <div class="row mx-2  p-2">
            <div class="col-2 overflow-hidden" style="height: 130px;">
                <img src="{{ asset('downloads/'.$art->file_foto) }}" class="img-fluid mx-auto  overflow-hidden" alt="Responsive image">
            </div>
            <div class="col-10">
                <h5> <a href="{{url('/detail-artikel/'.$art->alias)}}">{{ $art->judul}}</a> </h5>
                <small>{{$tglna}}  | <em>{{$art->inputby}}</em> </small>
                <p>{!! Str::limit($art->isi, 250) !!} <a class="btn btn-xs btn-info text-white" href="{{url('/detail-artikel/'.$art->alias)}}"> <i class="fa fa-list"></i> Selengkapnya</a></p>
            </div>
            
        </div>
       
        @endforeach


         

         
     </div>
</div>  

 
 
@endsection
