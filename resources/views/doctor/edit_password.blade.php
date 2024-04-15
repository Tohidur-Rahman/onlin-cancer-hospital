@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-md-8">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Change Password</h4>
        <x-auth-session-status class="mb-4" :status="session('status')" />
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
      </div>
    
      
      <form class="form" method="POST" action="{{ route('doctor.update_password') }}"
      >
      @csrf
        <div class="box-body">
          <div class="row">
            <div class="form-group">
              <label class="form-label">Current Password</label>
              <input type="password" name="current_password" class="form-control" required>
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <label class="form-label">New Password</label>
              <input type="password" name="password" class="form-control" required autocomplete="new-password">
            </div>
          </div>
          <div class="row">
            <div class="form-group">
              <label class="form-label">Confirm Password</label>
              <input type="password" name="password_confirmation" class="form-control" required>
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
