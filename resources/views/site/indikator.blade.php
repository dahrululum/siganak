@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <table class="table  table-hover table-bordered fs-7" id="tablena">
                <thead class="bg-info " >
                <tr class="text-center text-white">
                    <th rowspan="2" class="col-1"> Kode</th>
                    <th rowspan="2"> Nama Indikator </th>
                    <th rowspan="2"> Sumber Data </th>
                    <th rowspan="2"> Satuan </th>
                    <th colspan="5" class=""> Realisasi Pencapaian </th>
                </tr>
                <tr class="text-center text-light ">
                    @for ($i = $periode->thnawal; $i <= $periode->thnakhir; $i++)
                        <th> Tahun {{ $i }}  </th>
                    @endfor
                    
                </tr>
                </thead>
                <tbody>
                    @foreach ($tar as $tar)
                    <?php 
                       
                    ?>
                    <tr>
                        <td colspan="10" class="bg-lightblue  ">
                            <div class="row">
                                <div class="text-left fw-bold" style="width: 103px;"> Target {{ $tar->kdtarget }} </div>
                                <div class="col-sm-11 fw-semibold"> {{ $tar->namatarget }}  </div>
                            </div>
                        </td>
                    </tr>
                    @if(count($tar->hasIndikator))
                        @include('site/subindikator ',['tar' => $tar->hasIndikator])
                    @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>  

 
 
@endsection
