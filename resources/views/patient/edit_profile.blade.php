@extends('layouts.patient_app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-11 col-md-11">
      <div class="box">
      <div class="box-header with-border">
        <div class="d-md-flex align-items-center justify-content-between ">
          <h4 class="box-title">Edit Profile</h4>
          
        </div>
      </div>
      
    
        <!-- /.box-header -->
        
      <form class="form" method="POST" action="{{ route('patient.update_profile',$data->id) }}"
          enctype="multipart/form-data">
      
      @csrf
        <div class="box-body">
          <div class=" me-20 text-center text-md-start">
            <img src="{{asset('uploads/patient/'.$data->image)}}" class="bg-success-light rounded10" alt="" />
            <div class="text-center my-10">
              
            </div>
          </div>
          <div class="form-group">
            <label class="form-label">Avatar</label>
            <label class="file">
            <input type="file" name="image" id="file" value="{{asset('uploads/patient/'.$data->image)}}" class="@error('image') is-invalid @enderror">
            @error('image')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            </label>
          </div>
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">First Name</label>
              <input type="text" name="first_name" class="form-control @error('first_name') is-invalid @enderror"  value="{{ $data->first_name }}">
              @error('first_name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">Last Name</label>
              <input type="text" name="last_name" class="form-control @error('last_name') is-invalid @enderror" value="{{ $data->last_name }}">
              @error('last_name')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
          </div>          
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">Contact Number</label>
              <input type="tel" name="number" class="form-control @error('number') is-invalid @enderror" value="{{ $data->number }}">
              @error('number')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Age</label>
                <input type="text" name="age" class="form-control @error('age') is-invalid @enderror" value="{{ $data->age}}"> 
                @error('age')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror               
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control @error('address') is-invalid @enderror" value="{{ $data->address}}"> 
                @error('address')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror               
              </div>
            </div>
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">E-Mail</label>
              <input type="text" name="email" class="form-control @error('email') is-invalid @enderror"  value="{{ $data->email }}">
              @error('email')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>           
          </div>
                    
          <div class="form-group">
            <label class="form-label">Description</label>
            <textarea rows="5" name="description" class="form-control @error('description') is-invalid @enderror">{{ $data->description }}</textarea> 
            @error('description')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror          
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
