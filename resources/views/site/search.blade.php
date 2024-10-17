@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-sm-12">
            <div class=" text-center h3 text-info ">
                 <b class="border-bottom"> Menu Pencarian  </b>
            </div>
            <p class="text-center text-dark">
                 Key/ kata kunci : <b>{{ @$params['key'] }}</b>
            </p>
              
        </div>
        <div class="col-sm-12">
            <div class="card card-info">
                <div class="card-header"> <h4 class="card-title">Form Pencarian</h4> </div>
                <div class="card-body p-4 mx-5">
                    <form id="form-search" action="{{url('/search')}}" method="get" autocomplete="off">	
                        <div class="input-group mt-2">
                          <input type="search" id="key" class="form-control" name="key" value="{{ @$params['key'] }}">		
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="submit"><i class="fa fa-search fa-lg"></i></button>
                          </span>
                        </div>
                      </form>
                </div>
            </div>
            
        </div>
        <div class="col-sm-12">
            <div class="card card-info">
                <div class="card-header"> <h4 class="card-title">Hasil Pencarian</h4> </div>
                <div class="card-body p-4">
                    <div class="border-bottom mb-4">Jumlah Data : {{ $jmlkey }} <em>record</em> </div>
                     
                     @foreach($model as $el)
                       <?php 
                        if($el->id_induk != 0){
                          $namainduk=$el->getInduk->nama;
                          
                            
                        }else{
                          $namainduk="";
                         
                        }
                       ?>
                        <div class="row border-bottom">
                            <div class="col-sm-2 bg-dark">Jenis Elemen Data</div>
                            <div class="col-sm-8 bg-white"> {{ $el->getJenis->namajenis }}</div>    
                        </div>
                        <div class="row border-bottom">
                          <div class="col-sm-2 bg-dark">Bidang Elemen Data</div>
                          <div class="col-sm-8 bg-white"> {{ $el->getBidang->namabidang }}</div>    
                        </div>
                        <div class="row border-bottom">
                          <div class="col-sm-2 bg-dark">Nama Elemen Data</div>
                          <div class="col-sm-8 bg-white"> <b>{{ $namainduk }} </b> {{ $el->nama }} </div>    
                        </div>
                        <div class="row border-bottom ">
                          <div class="col-sm-2 bg-dark">Sumber Data</div>
                          <div class="col-sm-8 bg-white"> {{ $el->sumber }}</div>    
                        </div>
                        <div class="row border-bottom">
                          <div class="col-sm-2 bg-dark">Satuan </div>
                          <div class="col-sm-8 bg-white"> {{ $el->satuan }}</div>    
                        </div>
                        <div class="row my-2">
                          {{ $el->nama }}
                          <table class="table table-sm table-bordered">
                            <thead class="bg-light">
                              <tr>
                                <th class="text-center small font-weight-bold">Tahun</th>
                                @foreach($wilayah as $wil)
                                <th class="text-center small font-weight-bold">{{ $wil->namawilayah }}</th>
                                @endforeach
                              </tr>
                            </thead>
                            <tbody>
                              @for ($i = $periode->thnawal; $i <= $periode->thnakhir; $i++)
                              <tr>
                                <td class="small font-weight-bold">{{ $i }}</td>
                                @foreach($wilayah as $wil)
                                <?php
                                  $cekn=App\Models\Nilai::where(
                                      [
                                          ['id_jenis','=',$el->id_jenis],
                                          ['id_wilayah','=',$wil->id],
                                          ['id_elemen','=',$el->id],
                                          ['tahun','=',$i],
                                      ]
                                      )->count(); 
                                      //dd($cekn);
                                      
                                  if($cekn != 0 ){
                                      $nilaina=App\Models\Nilai::where(
                                      [
                                          ['id_jenis','=',$el->id_jenis],
                                          ['id_wilayah','=',$wil->id],
                                          ['id_elemen','=',$el->id],
                                          ['tahun','=',$i],
                                      ]
                                      )->first(); 
                                      
                                      


                                      $nilaielement=$nilaina->nilai;
                                  }else{
                                      $nilaielement=0;
                                  }
                                ?>
                                <td class="text-center small ">{{ $nilaielement }}</td>
                                @endforeach
                              </tr>
                              @endfor
                            </tbody>
                          </table>
                        </div>
                     @endforeach
                </div>
            </div>
            
        </div>
    </div>
    <div class="row">
        {{-- @foreach($pub as $pub)
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
        @endforeach --}}


         

         
      </div>
</div>  

 
 
@endsection
