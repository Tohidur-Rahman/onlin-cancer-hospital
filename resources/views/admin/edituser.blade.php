@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-12">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Edit User</h4>
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
      <form method="POST" action="{{ route('user.update',$users->id) }}">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label class="form-label">User Name</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ti-user"></i></span>
              <input type="text" class="form-control" name="name" value="{{ $users->name }}">
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Email address</label>
            <div class="input-group mb-3">
              <span class="input-group-text"><i class="ti-email"></i></span>
              <input type="email" class="form-control"  name="email" value="{{ $users->email }}" >
            </div>
          </div>
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">
            <i class="ti-save-alt"></i> Update
          </button>
        </div>  
      </form>
      </div>
      <!-- /.box -->			
  </div>

  </div>			
</section>
@endsection
