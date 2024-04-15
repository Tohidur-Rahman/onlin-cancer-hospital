@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-8 col-12">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Add Disease</h4>
      </div>
      <!-- /.box-header -->
      <form method="POST" action="{{ route('admin.store_disease') }}">
        @csrf
        <div class="box-body">
          <div class="form-group">
            <label class="form-label">Disease Name</label>
            <div class="input-group mb-3">
              <input type="text" class="form-control @error('first_name') is-invalid @enderror" placeholder="disease" name="disease" :value="old('disease')" required autofocus>
              
            </div>
            @error('disease')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
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
