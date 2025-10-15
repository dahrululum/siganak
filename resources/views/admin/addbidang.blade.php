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
                <div class="card-header"><b>Add Bidang</b></div>
                <form action="{{url('admin/post-addbidang')}}" method="POST" id="regForm" class="form-horizontal">
                  <div class="card-body">
                   {{ csrf_field() }}
                   <div class="form-group row">
                    <label for="inputEmail" class="col-sm-3">Jenis</label>
                    <div class="col-sm-5">
                        <select class="form-control form-control-sm select2" name="id_jenis" id="id_jenis"  required>
                            <option value="">Pilih Jenis </option>
                            <?php 
                              $level = 0;
                              $strip = "--"; 
                            ?>
                            @foreach ($jenis as $pd)
                                <option value="{{ $pd->id }}">  {{ $pd->id }}. {{ $pd->namajenis }}</option>
                            @endforeach
                        </select>
                    </div>
                              
                              
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 col-form-label" for="inputFirstName">Alias Bidang</label>
                  <div class="col-sm-2">
                  <input class="form-control form-control-sm " id="alias" type="text" name="alias" value="{{ $alias }}" readonly />
                    @if ($errors->has('alias'))
                      <span class="error">{{ $errors->first('alias') }}</span>
                      @endif 
                  </div> 
                </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="inputFirstName">Nama Bidang</label>
                      <div class="col-sm-6">
                      <input class="form-control form-control-sm @error('namabidang') is-invalid @enderror" id="namabidang" type="text" name="namabidang" placeholder="Nama Bidang" />
                        @if ($errors->has('namabidang'))
                          <span class="error">{{ $errors->first('namabidang') }}</span>
                          @endif 
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
 