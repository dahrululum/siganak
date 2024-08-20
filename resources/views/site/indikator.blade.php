@extends('layouts.frontend.detail')

@section('content')
<div class="container">
    <div class="row p-2">
        <div class="col-12">
            <table class="table table-hover table-bordered" id="tablena">
                <thead class="bg-primary">
                <tr class="text-center">
                    <th class="col-2"> Kode</th>
                    <th> Nama Indikator </th>
                    <th> Sumber Data </th>
                    <th> Satuan </th>
                    <th> #  </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($tar as $tar)
                    <?php 
                       
                    ?>
                    <tr>
                        <td colspan="5" class="bg-lightblue  ">
                            <div class="row">
                                <div class="col-2 text-left"><b>Target {{ $tar->kdtarget }}</b></div>
                                <div class="col-9"> <b>{{ $tar->namatarget }}</b> </div>
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
