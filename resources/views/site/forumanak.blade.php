@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="row">
         
                <div class=" text-center h2 text-info">
                  FORUM ANAK
                </div>
                 
              </div>
        </div>
    </div>
    <div class="row p-2">
        <div class="col-3  ">
            <div class=" text-center bg-dark p-2">
                  Profil Forum Anak
            </div>
            <div class="border bg-white p-2">
                <ul>
                    @foreach($fa as $fa)
                    <li> <a href="{{url('/forumanak/'.$fa->id)}}">{{$fa->judul}}</a> </li>
                    @endforeach
                </ul>
               
            </div>
            <hr>
            <div class=" text-center bg-dark p-2">
                Artikel Forum Anak
          </div>
          <div class="border bg-white p-2">
            <ul>
                @foreach($art as $lart)
                <li class="small"> <a href="{{url('/detail-artikel/'.$lart->alias)}}">{{$lart->judul}}</a> </li>
                @endforeach
            </ul>
             
          </div>
             
        </div>
        <div class="col-9">
            @if(empty($faid))
            <div class=" text-center bg-dark p-2">
                Artikel  Forum Anak
            </div>
            <div class="bg-light">
                @foreach($art as $art)
                @php
                    $tglna=Carbon::parse($art->created_at)->isoFormat('DD MMMM YYYY');  
                @endphp

                <div class="row mx-1 border-bottom p-1">
                    <div class="col-2">
                        <img src="{{ asset('downloads/'.$art->file_foto) }}" class="img-fluid mx-auto overflow-hidden" alt="Responsive image">
                    </div>
                    <div class="col-10">
                        <h5><a href="{{url('/detail-artikel/'.$art->alias)}}">{{$art->judul}}</a> </h5>
                        <h6>{{$tglna}}  | <em>{{$art->inputby}}</em> </h6>
                    </div>
                    
                </div>
                @endforeach
            </div>
            
                

            @else
                {{-- {{$detfa}} --}}
                <div class="row bg-white border">
                    <div class="col-12">
                        <div>
                            <h4>{{$detfa->judul}}</h4>
                        </div>
                        <div>
                            {!! $detfa->isi !!}
                        </div>
                        @if(!empty($detfa->file_foto))
                        <div>
                            <img src="{{ asset('downloads/'.$detfa->file_foto) }}" class="img-fluid w-100 overflow-hidden" alt="Responsive image">
                        </div>
                        @endif
                    </div>
                    
                </div>
                

            @endif
        </div>
    </div>

    <div class="row">
        


         

         
      </div>
</div>  

 
 
@endsection
