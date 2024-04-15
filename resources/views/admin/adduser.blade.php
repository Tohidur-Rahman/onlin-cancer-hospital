@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-12">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Add User</h4>
      </div>
      <!-- /.box-header --> 
      @if ($errors->any())
        <div class="alert alert-danger">
          <ul>
              <div class="row">
              @foreach ($errors->all() as $error)
              
                  <div class="col-lg-3 col-md-3">
                      <li>{{ $error }}</li>
                  </div>

              @endforeach
          </div>
          </ul>
      </div>
      @endif
      <form method="POST" action="{{ route('user.store') }}">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label class="form-label">User Name</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ti-user"></i></span>
              <input type="text" class="form-control" placeholder="Username" name="name" :value="old('name')" required autofocus>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Email address</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ti-email"></i></span>
              <input type="email" class="form-control" placeholder="Email" name="email" :value="old('email')" required>
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ti-lock"></i></span>
              <input type="password" class="form-control" placeholder="Password" name="password" required autocomplete="new-password">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Confirm Password</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ti-lock"></i></span>
              <input type="password" class="form-control" placeholder="Confirm Password"  name="password_confirmation" required >
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">
            <i class="ti-save-alt"></i> Save
          </button>
        </div>  
      </form>
      </div>
      <!-- /.box -->			
  </div>

  </div>			
</section>
@endsection
