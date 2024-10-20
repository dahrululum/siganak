@extends($layout)
@section('styles')
 
  <link rel="stylesheet" href="{{url('lte/plugins/select2/css/select2.min.css') }}">
@endsection
@section('javascripts')
  <script src="{{ url('lte/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('lte/plugins/select2/js/select2.full.js') }}"></script>
  <script src="{{ url('js/jquery.chained.js') }}"></script>
  <script> 
  $ ( function () {
      $('.select2').select2();
     
  })
  $(document).ready(function () {
    $("#id_bidang").chained("#id_jenis");
    });
  </script>

@endsection
@section('content')
<div class="">
    <div class="row justify-content-center">
	
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header"><b>Tambah Elemen Data</b></div>
                <form action="{{url('admin/post-addelemen')}}" method="POST" id="regForm" class="form-horizontal">
                  <div class="card-body">
                   {{ csrf_field() }}
                   <div class="form-group row">
                        <label class="col-sm-3 col-form-label text-danger" for="alias">ID Uniq</label>
                        <div class="col-sm-3">
                            <input class="form-control form-control-sm " id="alias" type="text"  name="alias" value="{{ $alias }}" readonly />
                        </div>
                   </div>
                   <div class="form-group row">
                        <label for="" class="col-sm-3">Pilih Induk Elemen 
                            <p class="small text-primary">*) jika ada/subelemen</p>

                        </label>
                        <div class="col-sm-5">
                            <select class="form-control form-control-sm select2" name="id_induk" id="id_induk"  >
                                <option value="0">Pilih Elemen Induk </option>
                                <?php 
                                $level = 0;
                                $strip = "--"; 
                                ?>
                                @foreach($el as $el)  
                                
                                @include('admin/select-elemen ',[
                                'els'     => $el,
                                'level'   => $level,
                                'strip'   => $strip,
                                ])
                            
                                </option>
                                @endforeach
                            </select>
                        </div>
                                
                                
                    </div>
                    <div class="form-group row">
                        <label class="control-label col-sm-3" for="id_jenis">Jenis Elemen</label>
                        <div class="col-sm-3">
                            <select class="form-control form-control-sm " name="id_jenis" id="id_jenis"  required>
                                <option value="">Pilih Jenis Elemen </option>
                                <?php 
                                  $level = 0;
                                  $strip = "--"; 
                                ?>
                                @foreach ($jenis as $pd)
                                    <option value="{{ $pd->id }}">  {{ $pd->id }}. {{ $pd->namajenis }}</option>
                                @endforeach
                            </select>
                        
                        </div>
                        <div class="col-sm-3">
                            <select class="form-control form-control-sm " name="id_bidang" id="id_bidang"  required>
                                <option value="">Pilih Bidang Elemen </option>
                                <?php 
                                  $level = 0;
                                  $strip = "--"; 
                                ?>
                                @foreach ($bidang as $bid)
                                    <option  class="{{ $bid->id_jenis }}" value="{{ $bid->id }}">  {{ $bid->id }}. {{ $bid->namabidang }}</option>
                                @endforeach
                            </select>
                        
                        </div>
    
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="namaelemen">Nama Elemen Data</label>
                      <div class="col-sm-9">
                      <input class="form-control form-control-sm" id="nama" type="text" name="nama" placeholder="Nama Elemen" required />
                       
                      </div> 
                    </div>
                                             
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="satuan">Satuan</label>
                      <div class="col-sm-4">
                        <input class="form-control form-control-sm" id="satuan" type="text"   name="satuan" placeholder="Masukan satuan " />
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="sumberdata">Sumber</label>
                      <div class="col-sm-4">
                        <input class="form-control form-control-sm" id="sumber" type="text"   name="sumber" placeholder="Masukan Sumber Data" />
                        
                      </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label" for="ket">Keterangan</label>
                        <div class="col-sm-6">
                          <input class="form-control form-control-sm" id="ket" type="text"  name="ket" placeholder="Masukan Keterangan jika ada" />
                          
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
 