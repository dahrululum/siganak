@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="">
                <div class="card card-dark">
                    <div class="card-header   ">
                       <span class="font-weight-bold h4">{{ $label }} |</span>    <span class="font-italic h5">{{ $getwil->namawilayah }}</span> 
                            <div class="card-tools">
                                <button type="button" class="bg-primary btn btn-default btn-tool dropdown-toggle mx-4" data-toggle="dropdown" aria-expanded="true">
                                    <i class="fas fa-clock"></i> Pilih Wilayah 
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-right " role="menu" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-123px, 19px, 0px);">
                                        @foreach ($wilayah as $wil)
                                        
                                        <a href="<?= url('/datadasar/'.Request::segment(2).'/'.$wil->id); ?>" class="dropdown-item text-dark">{{ $wil->kdwilayah }} {{$wil->namawilayah}}</a>
                                        <!--
                                        <a href="#" class="dropdown-item text-dark"> {{$wil->id}} <i class="text-info">[{{$wil->namawilayah}}]</i></a>
                                        !-->
                                        @endforeach
                                    </div>

                                <button type="button" class="btn btn-success btn-sm " title="">
                                <i class="fa fa-file-excel-o"></i> Excel
                                </button>
                                <button type="button" class="btn btn-info btn-sm" data-card-widget="collapse" title="Collapse">
                                <i class="fa fa-print"></i> Print
                                </button>
                            </div>
                      </div>
                      <div class="bg-light p-2">  </div>
                       <div class="card-body">
                        
                          <table class="table table-sm table-hover table-striped table-bordered" id="tablena">
                              <thead class="bg-dark small">
                              <tr>
                                  {{-- <th> ID</th> --}}
                                  <th> Nama Elemen </th>
                                  @for ($i = $periode->thnawal; $i <= $periode->thnakhir; $i++)
                                      <th class="text-center"> Tahun {{ $i }}  </th>
                                  @endfor
                                  <th class="text-center"> Satuan </th>
                                  <th class="text-center"> Sumber </th>
              
                              </tr>
                              </thead>
                              <tbody>
                                  <?php $no=0; $level = 0; ?>
                                  @foreach ($el as $el)
                                  
                                  @include('site/subdatadasar',[
                                      'el' =>  $el,
                                      'level' => $level
                                  ])
                                  
                                  @endforeach
                              </tbody>
                          </table>
                       </div>
                </div>
                
                
              </div>
        </div>
    </div>
     
</div>  

 
 
@endsection
