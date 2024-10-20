@extends('layouts.frontend.detail')

@section('content')
@php
    
    $tglna=Carbon::parse($pub->tglinput)->isoFormat('DD MMMM YYYY');  
@endphp
<div class="container p-2 mt-2 border">
        <h5>{{ $pub->judul }}</h5>
        <h6>{{ $tglna }}</h6>
        <div><img src="{{ asset('downloads/'.$pub->file_foto) }}" class="img-fluid w-100 overflow-hidden" alt="Responsive image"></div>
        <p>
         {!! $pub->deskripsi !!}
        </p>
        <div><a href="{{ asset('downloads/'.$pub->file_download) }}" class="btn btn-success btn-sm" download> <i class="fa fa-download"></i> Download File</a></div>
      
     
</div>  
 
 
@endsection
