@extends($layout)
@section('styles')
 
  <link rel="stylesheet" href="{{url('lte/plugins/select2/css/select2.min.css') }}">
@endsection
@section('javascripts')
  <script src="{{ url('lte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('lte/plugins/select2/js/select2.full.js') }}"></script>
  <script> 
  $ ( function () {
      $('.select2').select2();
  })
  </script>

@endsection
@section('content')
<div class="">
    <div class="row justify-content-center">
	
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header"><b>Tambah Indikator </b></div>
                <form action="{{url('admin/post-addindikator')}}" method="POST" id="regForm" class="form-horizontal">
                  <div class="card-body">
                   {{ csrf_field() }}
                   <div class="form-group row">
                    <label class="control-label col-sm-3" for="id_jenis">Target Indikator</label>
                    <div class="col-sm-9">
                        <select class="form-control form-control-sm select2" name="id_target" id="id_target"  required>
                            <option value="">Pilih Jenis Elemen </option>
                            <?php 
                              $level = 0;
                              $strip = "--"; 
                            ?>
                            @foreach ($tar as $pd)
                                <option value="{{ $pd->id }}"  >  {{ $pd->id }}. {{ $pd->namatarget }}</option>
                            @endforeach
                        </select>
                    
                    </div>

                </div>
                    <div class="form-group row">
                            <label class="col-sm-3 col-form-label text-danger" for="alias">Kode </label>
                            <div class="col-sm-1">
                                <input class="form-control form-control-sm " id="kode" type="text"  name="kode" required   />
                            </div>
                    </div>
                   
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="namaelemen">Nama Indikator</label>
                      <div class="col-sm-9">
                      <input class="form-control form-control-sm" id="nama" type="text" name="nama" placeholder="Nama Indikator"   required />
                       
                      </div> 
                    </div>
                                             
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="sumberdata">Sumber</label>
                      <div class="col-sm-6">
                        <input class="form-control form-control-sm" id="sumber" type="text"   name="sumber" placeholder="Masukan Sumber Data"   />
                        
                    </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="ket">Satuan</label>
                        <div class="col-sm-3">
                          <input class="form-control form-control-sm" id="satuan" type="text"  name="satuan" placeholder="Masukan Satuan"   />
                          
                        </div>
                    </div>
                     
                     
                </div>
                <div class="card-footer">
                   
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                </div>						
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 