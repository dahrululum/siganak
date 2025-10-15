@extends($layout)
@section('styles')
  <!-- DataTables !-->
  <link rel="stylesheet" href="{{url('lte/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection
@section('javascripts')
<!-- DataTables !-->
<script src="{{ url('lte/plugins/jquery/jquery.min.js') }}"></script>

<script src="{{url('lte/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('lte/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<!-- Bootstrap Switch !-->
<script src="{{url('lte/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
<script> 
    $ ( function () {
        $('#tablena').DataTable();
    })
</script>
 
@endsection

 

@section('content')
 
 

     
    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title font-weight-bold">Daftar Profil Forum Anak  </h3>
                        </div>    
                    <div class="card-body">
                        <a class="btn btn-success" href="{{ URL::to('/admin/addprofilfa')}}"><i class="fa fa-plus"></i> Tambah Profil</a>
                        <br><br>
                        <div class="card-body table-responsive p-0">
                          
                            <table class="table table-sm table-hover table-bordered" id="tablena">
                                <thead class="bg-primary">
                                <tr>
                                    <th> ID</th>
                                    <th>Alias</th>
                                    <th> Judul Profil </th>
                                    <th> Deskripsi</th>
                                    
                                    <th>   Foto</th>
                                     
                                    <th> Status </th>
                                    <th> # </th> 

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($fa as $pub)
                                    <?php 
                                       if ($pub->status=="1"){
                                           $namastatus="aktif";
                                        }else{
                                           $namastatus="tidak aktif"; 
                                        }
                                         
                                    ?>
                                    <tr>
                                        <td>{{ $pub->id }}</td>
                                        <td>{{ $pub->alias }}</td>
                                        <td>{{ $pub->judul }}</td>
                                        <td>{!! Str::limit($pub->isi, 200) !!}</td>
                                        
                                        <td class="text-center">
                                            @if(empty($pub->file_foto))
                                                <img src="{{ asset('images/noimage.jpg') }}" alt="" width="140px">
                                            @else
                                            <img src="{{ asset('downloads/'.$pub->file_foto) }}" width="140px" alt="" class="">
                                            @endif
                                        </td>
                                         
                                        <td>{{ $namastatus }}</td>
                                         
                                        <td>
                                            <a class="btn btn-success btn-xs" href="{{ URL::to('/admin/editprofilfa/'.$pub->id) }}"><i class="fa fa-edit"></i> Edit</a>
                                            <a class="btn btn-danger btn-xs" href="{{ URL::to('/admin/delprofilfa/'.$pub->id) }}" onClick="if(!confirm('Anda yakin Akan Hapus Data FA ini !'))return false;"><i class="fa fa-trash"></i> Delete</a>
                                             
                                         </td>
                                         
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

@endsection
