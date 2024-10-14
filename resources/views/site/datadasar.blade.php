@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <div class="row">
         
                <div class=" text-center h2 text-info">
                  {{ $label }}
                </div>
                <table class="table table-sm table-hover text-nowrap table-bordered" id="tablena">
                    <thead class="bg-info">
                    <tr>
                        <th> ID</th>
                        <th> Nama Elemen </th>
                        @for ($i = $periode->thnawal; $i <= $periode->thnakhir; $i++)
                            <th> Tahun {{ $i }}  </th>
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

 
 
@endsection
