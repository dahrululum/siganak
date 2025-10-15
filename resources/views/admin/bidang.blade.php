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
                            <h3 class="card-title">Daftar Bidang</h3>
                        </div>    
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                        <a class="btn btn-success" href="{{ URL::to('/admin/addbidang')}}"><i class="fa fa-plus"></i> Tambah Bidang</a>
                        <br><br>

                            <table class="table table-sm table-hover text-nowrap table-bordered" id="tablena">
                                <thead class="bg-info">
                                <tr>
                                    <th> ID</th>
                                    <th> Jenis </th> 
                                    <th> Nama Bidang </th>
                                    <th> Alias </th>
                                    <th> #  </th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($bidang as $bid)
                                    <?php 
                                       
                                    ?>
                                    <tr>
                                        <td>{{ $bid->id }}</td>
                                        <td>{{ $bid->getJenis->namajenis }}</td>
                                        <td>{{ $bid->namabidang }}</td>
                                        <td>{{ $bid->alias }}</td>
                                        
                                        
                                        <td>
                                            <a class="btn btn-success btn-xs" href="{{ URL::to('/admin/editbidang/'.$bid->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger btn-xs" href="{{ URL::to('/admin/delbidang/'.$bid->id) }}"><i class="fa fa-trash"></i> Delete</a>
                                         </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
