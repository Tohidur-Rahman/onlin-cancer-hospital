@extends('layouts.doctor_app')
@section('content')
<div class="content-header">
    <div class="d-flex align-items-center">
        <div class="me-auto">
            <h4 class="page-title">Doctor</h4>
            <div class="d-inline-block align-items-center">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Doctor Dashboard</li>
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
                <div class="box-header">
                    <h4 class="box-title">Assigned Patients</h4>
                </div>
                <div class="box-body">
                    <div id="paginator1"></div>
                </div>
                <div class="box-body">
                    <div class="inner-user-div4">
                        @foreach ($patients as $patient )
                        <div>
                            <div class="d-flex align-items-center mb-10">
                                <div class="me-15">
                                    <img src="{{asset('uploads/patient')}}/{{ $patient->image }}"
                                        class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
                                </div>
                                <div class="d-flex flex-column flex-grow-1 fw-500">
                                    <p class="hover-primary text-fade mb-1 fs-14">{{$patient->first_name}} {{$patient->last_name}}</p>
                                    <span class="text-dark fs-16">{{$patient->cancer->disease}}</span>
                                </div>
                                <div>
                                    <a href="tel:{{$patient->number}}"
                                        class="waves-effect waves-circle btn btn-circle btn-primary-light btn-sm"><i
                                            class="fa fa-phone"></i></a>
                                </div>
                            </div>
                            <div
                                class="d-flex justify-content-between align-items-end mb-15 py-10 bb-dashed border-bottom">
                                <div>
                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o me-5"></i> {{$patient->created_at->format('M-d-Y')}} </p>
                                </div>
                                <div>
                                    <div class="dropdown">
                                        <a data-bs-toggle="dropdown" href="#" class="base-font mx-10"><i
                                                class="ti-more-alt text-muted"></i></a>
                                        <div class="dropdown-menu dropdown-menu-end">
                                            <a class="dropdown-item" href="{{ route('doctor.patient.profile',$patient->id) }}"><i class="ti-user"></i> Profile</a>
                                            <a class="dropdown-item" href="{{ route('doctor.patient.reports',$patient->id) }}"><i class="ti-files"></i> Test Reports</a>
                                            <a class="dropdown-item" href="{{ route('doctor.patient.create_prescription',$patient->id) }}"><i class="ti-file"></i> Prescription</a>
                                            <a class="dropdown-item" href="{{ route('doctor.patient.activities',$patient->id) }}"><i class="ti-pencil-alt "></i>
                                                Activities</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            
        </div>
        <div class="col-xl-8 col-12">
            <div class="box">
                <div class="box-body text-end min-h-150"
                    style="background-image:url({{asset('contents/admin')}}/images/gallery/landscape14.jpg); background-repeat: no-repeat; background-position: center;background-size: cover;">
                    <div class="bg-success rounded10 p-15 fs-18 d-inline"><i class="fa fa-stethoscope"></i> Cancer
                        Specialist</div>
                </div>
                <div class="box-body wed-up position-relative">
                    <div class="d-md-flex align-items-end">
                        <div class=" me-20 text-center text-md-start">
                            <img src="{{asset('uploads/doctor/'. Auth::guard('doctor')->user()->image)}}" class="bg-success-light rounded10" alt="" />
                            <div class="text-center my-10">
                              <p class="mb-0">Cancer Specialist</p>
                              <h4>{{ Auth::guard('doctor')->user()->cancer->disease }}</h4>
                            </div>
                          </div>
                          <div class="mt-40">
                            <h4 class="fw-600 mb-5">{{ Auth::guard('doctor')->user()->first_name}}</h4>
                            <p><i class="fa fa-clock-o"></i> Join On: {{ Auth::guard('doctor')->user()->created_at->format('M-d-Y /  h:i A')}}</p>
                          </div>
                    </div>
                </div>
                <div class="box-body">
                    <h4>Degree:</h4>
                    <p>
                        {{ Auth::guard('doctor')->user()->degree}}
                    </p>

                </div>
                <div class="box-body">
                    <h4>Specialist:</h4>
                    <p>      
                        {{ Auth::guard('doctor')->user()->specialist}}
                    </p>

                </div>
            </div>

            

        </div>
    </div>
</section>
@endsection
