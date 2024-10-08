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
                <div class="card-header"><b>Edit Target Indikator Kinerja</b></div>
                <form action="{{url('admin/post-edittarget')}}" method="POST" id="regForm" class="form-horizontal">
                <div class="card-body">
                   {{ csrf_field() }}
                    
                    <div class="form-group row">
                    <label class="col-sm-2 col-form-label" for="Kode Target">Kode Target </label>
                    <div class="col-sm-2">
                    <input class="form-control form-control-sm " id="kdtarget" type="text" name="kdtarget" value="{{ $tar->kdtarget }}"  />
                        @if ($errors->has('kdtarget'))
                        <span class="error">{{ $errors->first('kdtarget') }}</span>
                        @endif 
                    </div> 
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-2 col-form-label" for="Nama Target">Nama Target</label>
                      <div class="col-sm-10">
                        <textarea name="namatarget" id="namatarget" cols="30" rows="2" class="form-control form-control-sm ket">
                            {!! $tar->namatarget !!}
                        </textarea>
                      
                      </div> 
                    </div>
                                             
                      
                </div>
                <div class="card-footer"> 
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    <input type="hidden" id="idna" name="idna" value="{{ $tar->id }}">
                </div>						
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 