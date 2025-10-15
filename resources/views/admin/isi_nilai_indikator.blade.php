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
                <div class="card-header"><b>Isi Nilai Indikator </b></div>
                <form action="{{url('admin/post-isinindi')}}" method="POST" id="regForm" class="form-horizontal">
                  <div class="card-body">
                   {{ csrf_field() }}
                   <div class="form-group row border-bottom">
                      <label class="  col-sm-2" for="id_jenis">Target Indikator</label>
                      <div class="col-sm-9"> {{ $ind->getTarget->namatarget }}
                        {{-- <input class="form-control form-control-sm " id="nama_target" type="text"  name="nama_target" value="{{ $ind->getTarget->namatarget }}"  readonly /> --}}
                        
                          {{-- <select class="form-control form-control-sm select2" name="id_target" id="id_target" readonly required>
                              <option value="">Pilih Target </option>
                              <?php 
                                $level = 0;
                                $strip = "--"; 
                              ?>
                              @foreach ($tar as $pd)
                                  <option value="{{ $pd->id }}" @if($pd->id == $ind->id_target) selected @endif>  {{ $pd->id }}. {{ $pd->namatarget }}</option>
                              @endforeach
                          </select> --}}
                      
                      </div>

                    </div>
                    <div class="form-group row border-bottom">
                            <label class="col-sm-2  " for="alias">Kode </label>
                            <div class="col-sm-1">
                                {{ $ind->kode }}
                                {{-- <input class="form-control form-control-sm " id="kode" type="text"  name="kode" value="{{ $ind->kode }}"  readonly /> --}}
                            </div>
                    </div>
                   
                    
                    <div class="form-group row border-bottom">
                      <label class="col-sm-2 " for="namaelemen">Nama Indikator</label>
                      <div class="col-sm-9">
                        {{ $ind->nama }}
                      {{-- <input class="form-control form-control-sm" id="nama" type="text" name="nama" placeholder="Nama Indikator" value="{{ $ind->nama }}" readonly /> --}}
                       
                      </div> 
                    </div>
                                             
                    
                    <div class="form-group row border-bottom">
                      <label class="col-sm-2  " for="sumberdata">Sumber</label>
                      <div class="col-sm-6">
                        {{ $ind->sumber }}
                        {{-- <input class="form-control form-control-sm" id="sumber" type="text"   name="sumber" placeholder="Masukan Sumber Data" value="{{ $ind->sumber }}"  readonly/> --}}
                        
                    </div>
                    </div>
                    <div class="form-group row border-bottom">
                        <label class="col-sm-2  " for="ket">Satuan</label>
                        <div class="col-sm-3">
                            {{ $ind->satuan }}

                          {{-- <input class="form-control form-control-sm" id="satuan" type="text"  name="satuan" placeholder="Masukan Satuan" value="{{ $ind->satuan }}" readonly /> --}}
                          
                        </div>
                    </div>
                    <div class="form-group row border-bottom">
                        <label class="col-sm-2  text-primary" for="ket">Nilai Capaian</label>
                        <div class="col-sm-10">
                            <table class="table table-bordered">
                                <tr class="bg-dark">
                                    @for ($i = $per->thnawal; $i <= $per->thnakhir; $i++)
                                        <td class="text-center"> Tahun {{ $i }} </td>   
                                    @endfor
                                </tr>
                                <tr>
                                   
                                    @for ($j = 1; $j <= 5; $j++)
                                        <?php 
                                            $lthn="tahun".$j;
                                            $tahunj=$lthn;
                                            

                                        ?>
                                        <td class="text-center"> <input class="form-control form-control-sm" id="tahun{{ $j }}" type="text"  name="tahun{{ $j }}" placeholder="Nilai Capaian" value="{{ $$tahunj }}"  required />  </td>   
                                    
                                    @endfor
                                </tr>
                            </table>
                            

                          {{-- <input class="form-control form-control-sm" id="satuan" type="text"  name="satuan" placeholder="Masukan Satuan" value="{{ $ind->satuan }}" readonly /> --}}
                          
                        </div>
                    </div>
                     
                     
                </div>
                <div class="card-footer">
                    <input type="hidden" id="idna" name="idna" value="{{ $ind->id }}">
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                </div>						
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 