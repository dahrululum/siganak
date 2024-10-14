@extends('layouts.frontend.detail')

@section('content')
<div class="container p-2 mt-2">
        <h5>{{ $pub->judul }}</h5>
        <h6>{{ $pub->tglinput }}</h6>
        <div><img src="{{ asset('downloads/'.$pub->file_foto) }}" class="img-fluid mx-auto overflow-hidden" alt="Responsive image"></div>
        <p>
         {!! $pub->deskripsi !!}
        </p>
        <div><a href="{{ asset('downloads/'.$pub->file_download) }}" class="btn btn-success btn-sm" download> <i class="fa fa-download"></i> Download File</a></div>
      
     
</div>  
 
 
@endsection
