@extends('layouts.patient_app')
@section('content')
<div class="content-header">
  <div class="d-flex align-items-center">
    <div class="me-auto">
      <h4 class="page-title">Patient Details</h4>
      <div class="d-inline-block align-items-center">
        <nav>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
            <li class="breadcrumb-item active" aria-current="page">Patient Profile</li>
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
                <p>Name :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->first_name }} {{ Auth::guard('patient')->user()->last_name }}</span> </p>
                <p>Sex :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->gender }}</span> </p>
                <p>Age :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->age }} Year</span> </p>
                <p>Blood Group :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->blood}}</span> </p>
                <p>Email :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->email}}</span> </p>
                <p>Phone :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->number}}</span></p>
                <p>Address :<span class="text-gray ps-10">{{ Auth::guard('patient')->user()->address}}</span></p>
              </div>
            </div>
            
          </div>
        </div>
        <!-- /.box-body -->
      </div>
      @if (Auth::guard('patient')->user()->patient_activities)
      <div class="box">
        <div class="box-header">
          <h4 class="box-title">Current Vitals</h4>
        </div>
        <div class="box-body">
          <div class="flexbox bb-1 mb-15">
            <div>
              <p><span class="text-mute">Patient Name:</span> <strong>{{ Auth::guard('patient')->user()->first_name}}</strong></p>
            </div>
            <div>
              <p><span class="text-mute">Patient Id:</span> <strong>{{ Auth::guard('patient')->user()->id}}</strong></p>
            </div>
          </div>
          
          <div class="row">
            <div class="col-12">
              <div class="row bb-1 pb-10">
                <div class="col-6">
                  <img class="img-fluid float-start w-30 mt-10 me-10" src="{{asset('contents/admin')}}/images/weight.png" alt="">
                  <div>
                    <p class="mb-0"><small>Weight</small></p>
                    <h5 class="mb-0"><strong>{{ Auth::guard('patient')->user()->patient_activities->weight }}</strong></h5>
                  </div>
                </div>
                <div class="col-6 bs-1 be-1">
                  <img class="img-fluid float-start w-30 mt-10 me-10" src="{{asset('contents/admin')}}/images/human.png" alt="">
                  <div>
                    <p class="mb-0"><small>Height</small></p>
                    <h5 class=" mb-0"><strong>{{ Auth::guard('patient')->user()->patient_activities->height }}</strong></h5>
                  </div>
                </div>
                
              </div>
              <div class="row pt-5">
                <div class="col-12">
                  <span class="text-danger">Blood Pressure</span>
                </div>
                <div class="col-6">
                  <div class="progress progress-xs mb-0 mt-5 w-40">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: {{ Auth::guard('patient')->user()->patient_activities->upperblood }}">
                    </div>
                  </div>
                  <h2 class="float-start mt-0 mr-10"><strong>{{ Auth::guard('patient')->user()->patient_activities->upperblood }}</strong></h2>
                  <div>
                    <p class="mb-0"><small>Systolic</small></p>
                    <p class="mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>
                  </div>
                </div>
                <div class="col-6 bl-1">
                  <div class="progress progress-xs mb-0 mt-5 w-40">
                    <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar"
                      aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                    </div>
                  </div>
                  <h2 class="float-start mt-0 mr-10"><strong>{{ Auth::guard('patient')->user()->patient_activities->lowerblood }}</strong></h2>
                  <div>
                    <p class="mb-0"><small>Diastolic</small></p>
                    <p class="mb-0 mt-0"><small class="vertical-align-super">mmHg</small></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          
        </div>
        <div class="box-body pt-0">
          <p><small>Recorded on: {{ Auth::guard('patient')->user()->patient_activities->updated_at->format('M-d-Y /  h:i A') }}</small></p>
        </div>
        <div class="box-body bg-primary">
          <img src="{{asset('contents/admin')}}/images/smoking.png" alt="" class="float-start me-10">
          <p>Smoking Status : {{ Auth::guard('patient')->user()->patient_activities->smoking }}</p>
        </div>
      </div>
      @endif
    </div>
    <div class="col-xl-8 col-12">
      <div class="d-md-flex align-items-center justify-content-between mb-20">
        <a href="{{ route('patient.edit_profile',Auth::guard('patient')->user()->id) }}" class="btn btn-primary me-5 mb-md-0 mb-5"><i class="fa fa-edit"></i> Edit Profile</a>
        <div class="d-flex">

          <a href="{{ route('patient.prescription_view') }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
            Prescription</a>
        </div>
      </div>
      <div class="box">
        <div class="box-body text-end min-h-150"
          style="background-image:url({{asset('contents/admin')}}/images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
        </div>
        <div class="box-body wed-up position-relative">
          <div class="d-md-flex align-items-center">
            <div class=" me-20 text-center text-md-start">
              <img src="{{asset('uploads/patient/'. Auth::guard('patient')->user()->image)}}" class="bg-success-light rounded10" alt="" />
              <div class="text-center my-10">
                <p class="mb-0">Disease</p>
                <h4>{{ Auth::guard('patient')->user()->cancer->disease }}</h4>
              </div>
            </div>
            <div class="mt-40">
              <h4 class="fw-600 mb-5">{{ Auth::guard('patient')->user()->first_name}}</h4>
              <h5 class="fw-500 mb-5">P-Id: {{ Auth::guard('patient')->user()->id}}</h5>
              <p><i class="fa fa-clock-o"></i> Admit On: {{ Auth::guard('patient')->user()->created_at->format('M-d-Y /  h:i A')}}</p>
            </div>
          </div>
        </div>
        <div class="box-body pt-0">
          <h4>Story About Disease</h4>
          <p>{{ Auth::guard('patient')->user()->description }}</p>
          
        </div>
      </div>
      @if (Auth::guard('patient')->user()->doctor)
      <div class="row">
        <div class="col-xl-6 col-12">
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Assigned Doctor</h4>
            </div>
            <div class="box-body">
              <div class="d-flex align-items-center">
                <img src="{{asset('uploads/doctor/'. Auth::guard('patient')->user()->doctor->image)}}" class="w-100 bg-primary-light rounded10 me-15"
                  alt="" />
                <div>
                  <h4 class="mb-0">Dr. {{ Auth::guard('patient')->user()->doctor->first_name }} </h4>
                  <p class="text-muted">Cancer Specialist</p>
                </div>
              </div>
              <div class="d-flex justify-content-between mt-15">
                <a href="{{ route('view_profile',Auth::guard('patient')->user()->doctor->id) }}" class="btn btn-danger-light me-4">Profile</a>
                <a href="tel:{{ Auth::guard('patient')->user()->doctor->number }}" class="btn btn-success-light ">Contact</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      @else
      <script type="text/javascript">
          window.onload = function(){ 
            alert("Complete your billing system then you are assigned a doctor!");
          }
      </script>
      @endif
    </div>
  </div>

</section>
@endsection
