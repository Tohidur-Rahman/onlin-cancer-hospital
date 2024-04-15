@extends('layouts.doctor_app')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">Doctor Details</h4>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor Profile</li>
                    </ol>
                </nav>
            </div>
        </div>

    </div>
</div>

<!-- Main content -->
<section class="content">

  <div class="row">
    <div class="col-xl-4 col-12">
      <div class="box">
        <div class="box-body box-profile">
          <div class="row">
            <div class="col-12">
              <div>
                <p>Name :<span class="text-gray ps-10">{{ Auth::guard('doctor')->user()->first_name }} {{ Auth::guard('doctor')->user()->last_name }}</span> </p>
                <p>Sex :<span class="text-gray ps-10">{{ Auth::guard('doctor')->user()->gender }}</span> </p>
                <p>Birth Date :<span class="text-gray ps-10">{{ Auth::guard('doctor')->user()->birth }} </span> </p>
                <p>Email :<span class="text-gray ps-10">{{ Auth::guard('doctor')->user()->email}}</span> </p>
                <p>Phone :<span class="text-gray ps-10">{{ Auth::guard('doctor')->user()->number}}</span></p>
                <p>Address :<span class="text-gray ps-10">{{ Auth::guard('doctor')->user()->address}}</span></p>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <div class="col-xl-8 col-12">
      <div class="d-md-flex align-items-center justify-content-between mb-20">
        <a href="{{ route('doctor.edit_profile',$data->id) }}" class="btn btn-primary me-5 mb-md-0 mb-5"><i class="fa fa-edit"></i> Edit
          Profile</a>
        <div class="d-flex">

          <a href="{{ route('doctor.edit_password') }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
            Reset Password</a>
        </div>
      </div>
      <div class="box">
        <div class="box-body text-end min-h-150"
          style="background-image:url({{asset('contents/admin')}}/images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
        </div>
        <div class="box-body wed-up position-relative">
          <div class="d-md-flex align-items-center">
            <div class=" me-20 text-center text-md-start">
              <img src="{{asset('uploads/doctor/'. Auth::guard('doctor')->user()->image)}}" class="bg-success-light rounded10" alt="" />
              <div class="text-center my-10">
                <p class="mb-0">Specialist</p>
                <h4>{{ Auth::guard('doctor')->user()->cancer->disease }}</h4>
              </div>
            </div>
            <div class="mt-40">
              <h4 class="fw-600 mb-5">{{ Auth::guard('doctor')->user()->first_name}}</h4>
              
              <p><i class="fa fa-clock-o"></i>Join On: {{ Auth::guard('doctor')->user()->created_at->format('M-d-Y /  h:i A')}}</p>
            </div>
          </div>
        </div>
        <div class="box-body pt-0">
          <h4>Degrees</h4>
          <p>{{ Auth::guard('doctor')->user()->degree }}</p>
          <h4>Specialist</h4>
          <p>{{ Auth::guard('doctor')->user()->specialist }}</p>
          
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
