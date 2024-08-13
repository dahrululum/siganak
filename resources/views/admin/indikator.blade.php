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
 
    <?php if ($message = Session::get('success')) { ?>
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong><?= $message ?></strong>
        </div>
    <?php  } ?>

     
    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Daftar Target & Indikator</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                        <a class="btn btn-success" href="{{ URL::to('/admin/addindikator')}}"><i class="fa fa-plus"></i> Tambah Indikator</a>
                        <br><br>

                            <table class="table table-hover table-bordered" id="tablena">
                                <thead class="bg-primary">
                                <tr>
                                    <th> Kode</th>
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
                                                <div class="col-1 text-center"><b>Target {{ $tar->kdtarget }}</b></div>
                                                <div class="col-10">{{ $tar->namatarget }}</div>
                                            </div>
                                        </td>
                                         
                                         
                                    </tr>
                                    @if(count($tar->hasIndikator))
                                        @include('admin/subindikator ',['tar' => $tar->hasIndikator])
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
