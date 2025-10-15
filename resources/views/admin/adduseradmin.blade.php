@extends($layout)

@section('content')
<div class="container">
    <div class="row justify-content-center">
	
        <div class="col-md-12">
            <div class="card card-primary">
                <div class="card-header"> <h5> Add User Administrator</h5></div>
                <form action="{{url('admin/post-adduseradmin')}}" method="POST" id="regForm" class="form-horizontal">
                  <div class="card-body">
                
										{{ csrf_field() }}
                    <div class="form-group row">
                      <label class="control-label col-sm-3 text-danger" for="level">Level </label>
                      <div class="col-sm-2">
                          <select class="form-control form-control-sm select2" name="level" id="level"  required>
                              <option value="">Pilih Level User </option>
                              <option value="1" >  Super User</option>
                              <option value="3" > Kontributor </option>
                          </select>
                      </div>
                    </div> 
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="inputFirstName">Nama Lengkap</label>
                      <div class="col-sm-6">
                      <input class="form-control form-control-sm @error('name') is-invalid @enderror" id="name" type="text" name="name"   />
                        
                      </div> 
                    </div>
                                             
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-danger" for="inputEmailAddress">Email</label>
                      <div class="col-sm-6">
                        <input class="form-control form-control-sm " id="email" type="email" aria-describedby="emailHelp" name="email"   />
                        
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label text-danger" for="inputusername">Username</label>
                      <div class="col-sm-4">
                        <input class="form-control form-control-sm @error('username') is-invalid @enderror" id="username" type="text" name="username"   />
                       
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="control-label col-sm-3" for="inputPassword">Password</label>
                      <div class="col-sm-5">
                        <input class="form-control form-control-sm @error('password') is-invalid @enderror" id="inputPassword" type="password" name="password" placeholder="Enter password" />
                      </div>
                    </div>
                    
                     
                </div>
                <div class="card-footer">
                    {{-- <input class="form-control" id="level" type="hidden" name="level" value="1" /> --}}
                    <button class="btn btn-primary" type="submit">Simpan</button>
                    
                </div>						
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
 