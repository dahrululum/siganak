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
                <div class="card-header"><b>Edit User Admin</b></div>
                <form action="{{url('admin/post-edituseradmin')}}" method="POST" id="regForm" class="form-horizontal">
                  <div class="card-body">
                   {{ csrf_field() }}
                   <div class="form-group row">
                    <label class="control-label col-sm-3 text-danger" for="level">Level </label>
                    <div class="col-sm-2">
                        <select class="form-control form-control-sm " name="level" id="level"  required>
                            <option value="">Pilih Level User </option>
                            <option value="1" @if($user->level==1) selected @endif>  Super User</option>
                            <option value="3" @if($user->level==3) selected @endif> Kontributor </option>
                        </select>
                    </div>
                </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="inputFirstName">Nama Lengkap</label>
                      <div class="col-sm-6">
                      <input class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" type="text" name="name" value="{{ $user->name }}" />
                        
                      </div> 
                    </div>
                                             
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-danger" for="inputEmailAddress">Email</label>
                      <div class="col-sm-6">
                        <input class="form-control form-control-sm " id="email" type="email" aria-describedby="emailHelp" name="email" value="{{ $user->email }}" />
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-danger" for="inputusername">Username</label>
                      <div class="col-sm-4">
                        <input class="form-control form-control-sm @error('username') is-invalid @enderror" id="username" type="text" name="username" value="{{ $user->username }}" />
                       
                      </div>
                    </div>
                    
                   
                     
                </div>
                <div class="card-footer">
                     
                    <input class="form-control" id="idna" type="hidden" name="idna" value="{{ $user->id }}" />
                    
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                </div>						
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 