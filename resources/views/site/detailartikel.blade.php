@extends('layouts.frontend.detail')

@section('content')
@php
    
    $tglna=Carbon::parse($pub->tglinput)->isoFormat('DD MMMM YYYY');  
@endphp
<div class="container p-2 mt-2 border bg-white">
        <h3>{{ $pub->judul }}</h3>
        <h6>{{ $tglna }} | Upload By : <em>{{ $pub->inputby }}</em> </h6>
        <div class="text-center"><img src="{{ asset('downloads/'.$pub->file_foto) }}" class="img-fluid w-100 overflow-hidden" alt="Responsive image"></div>
        <p>
         {!! $pub->isi !!}
        </p>
        
        <div class="mt-4 border-top p-2">
            <h5>Artikel Lainnya</h5>
            <ul>
                @foreach($opub as $opub)
                <li> <a href="{{url('/detail-artikel/'.$opub->alias)}}"> {{$opub->judul}} </a></li>
                @endforeach
                
            </ul>
        </div> 
</div>  

 
@endsection
