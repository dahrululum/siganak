@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="row">
                <div class="card card-primary">
                    <div class="card-header  h4  ">
                        {{ $label }}
                      </div>
                       <div class="card-body">
                          <table class="table table-sm table-hover table-striped table-bordered" id="tablena">
                              <thead class="bg-dark">
                              <tr>
                                  {{-- <th> ID</th> --}}
                                  <th> Nama Elemen </th>
                                  @for ($i = $periode->thnawal; $i <= $periode->thnakhir; $i++)
                                      <th class="text-center"> Tahun {{ $i }}  </th>
                                  @endfor
                                  
              
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
