@extends('layouts.app')
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
                <p>Name :<span class="text-gray ps-10">{{ $data->first_name }} {{ $data->last_name }} </span> </p>
                <p>Gender :<span class="text-gray ps-10">{{ $data->gender }} </span> </p>
                <p>Birth Date :<span class="text-gray ps-10">{{ $data->birth }} </span> </p>
                <p>Email :<span class="text-gray ps-10">{{ $data->email }}</span> </p>
                <p>Phone :<span class="text-gray ps-10">{{ $data->number }}</span></p>
                <p>Address :<span class="text-gray ps-10">{{ $data->address }}</span></p>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.box-body -->
      </div>

    </div>
    <div class="col-xl-8 col-12">
      @if (Auth::user())
      <div class="d-md-flex align-items-center justify-content-between mb-20">
        <a href="{{ route('edit_profile',$data->id) }}" class="btn btn-primary me-5 mb-md-0 mb-5"><i class="fa fa-edit"></i> Edit
          Profile</a>
      </div>
      @endif
      
      <div class="box">
        <div class="box-body text-end min-h-150"
          style="background-image:url({{asset('contents/admin')}}/images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
        </div>
        <div class="box-body wed-up position-relative">
          <div class="d-md-flex align-items-center">
            <div class=" me-20 text-center text-md-start">
              <img src="{{asset('uploads/doctor/'.$data->image)}}" class="bg-success-light rounded10" alt="" />
              <div class="text-center my-10">
                <p class="mb-0">Specialist</p>
                <h4>{{ $data->cancer->disease }}</h4>
              </div>
            </div>
            <div class="mt-40">
              <h4 class="fw-600 mb-5"></h4>
              
              <p><i class="fa fa-clock-o"></i>Join On: {{ $data->created_at->format('M-d-Y')}}</p>
            </div>
          </div>
        </div>
        <div class="box-body pt-0">
          <h4>Degrees</h4>
          <p>{{ $data->degree }}</p>
          <h4>Specialist</h4>
          <p>{{ $data->specialist }}</p>
          
        </div>
      </div>
    </div>
  </div>

</section>
@endsection
