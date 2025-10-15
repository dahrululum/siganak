@extends($layout)
@section('styles')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{url('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection
@section('javascripts')
<!-- DataTables -->
<script src="{{ url('lte/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{url('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#tablena').DataTable();
    })
</script>

@endsection

 

@section('content')
 
    

     
    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Nilai Indikator</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                        {{-- <a class="btn btn-success" href="{{ URL::to('/admin/addindikator')}}"><i class="fa fa-plus"></i> Tambah Indikator</a>
                        <br><br> --}}

                            <table class="table table-hover table-bordered" id="tablena">
                                <thead class="bg-dark text-center">
                                <tr>
                                    <th rowspan="2"> Kode</th>
                                    <th rowspan="2"> Nama Indikator </th>
                                    <th rowspan="2"> Sumber Data </th>
                                    <th rowspan="2"> Satuan </th>
                                    <th colspan="5"> Realisasi </th>
                                    
                                    <th rowspan="2" class="border-left"> #  </th>

                                </tr>
                                <tr>
                                    <th>2021</th>
                                    <th>2022</th>
                                    <th>2023</th>
                                    <th>2024</th>
                                    <th>2025</th>
                                    
                                    
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tar as $tar)
                                    <?php 
                                       
                                    ?>
                                    <tr>
                                        <td colspan="10" class="bg-lightblue  ">
                                            <div class="row">
                                                <div class="col-1 text-center"><b>Target {{ $tar->kdtarget }}</b></div>
                                                <div class="col-10">{{ $tar->namatarget }}</div>
                                            </div>
                                        </td>
                                         
                                         
                                    </tr>
                                    @if(count($tar->hasIndikator))
                                        @include('admin/nilai_subindikator ',['tar' => $tar->hasIndikator])
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
