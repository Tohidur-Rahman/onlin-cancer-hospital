@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xxxl-12 col-xl-12 col-12">
      <div class="mb-20 d-flex justify-content-between align-items-center">
        <h1 class="my-md-0 mb-10">Daily Activities</h1>
                
      </div>
      @if ($patient_activities)
        
      
      <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="box bg-primary">
            <div class="box-body">
              <div class="mb-15 d-flex justify-content-between align-items-center">
                <h4 class="my-0">Heart Rate</h4>
                <i class="fs-18 mdi mdi-heart-outline"></i>
              </div>
              <div>
                <h5 class="fw-400 my-0">{{ $patient_activities->heart_rate }}</h5>
              </div>
            </div>
            <div class="box-body pt-0 ps-0">
              <div id="heartrate"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="box">
            <div class="box-body">
              <div class="mb-15 d-flex justify-content-between align-items-center">
                <h4 class="my-0">Fever</h4>
                <i class="text-primary fs-18 mdi mdi-heart-outline"></i>
              </div>
              <div>
                <h5 class="fw-400 my-0">{{ $patient_activities->fever }}<small>&deg;F</small></h5>
              </div>
            </div>
            <div class="box-body pt-0 ps-0">
              <div id="fever"></div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4">
          <div class="box">
            <div class="box-body">
              <div class="mb-15 d-flex justify-content-between align-items-center">
                <h4 class="my-0">Blood Pre..</h4>
                <i class="text-primary fs-18 mdi mdi-heart-pulse"></i>
              </div>
              <div class="mb-10 d-flex justify-content-between align-items-center">
                <h4 class="fw-400 my-0">{{ $patient_activities->upperblood }}</h4>
                <p class="my-0">Upper</p>
              </div>
              <div class="d-flex justify-content-between align-items-center">
                <h4 class="fw-400 my-0">{{ $patient_activities->lowerblood }}</h4>
                <p class="my-0">Lower</p>
              </div>
            </div>
          </div>

        </div>
      </div>

      <div class="row">
        <div class="col-xl-4">
          <a href="#" class="box">
            <div class="box-body">
              <img src="{{asset('contents/admin')}}/images/glucose-meter.png" class="w-50 h-50 mb-5" alt="" />
              <div class="fs-18 mt-5">Glucose Level</div>
              <div class="fw-400 text-primary fs-22 pb-1">{{ $patient_activities->glucose }}</div>
            </div>
          </a>
        </div>
        <div class="col-xl-4">        
          <a href="#" class="box">
            <div class="box-body">
              <img src="{{asset('contents/admin')}}/images/petri-dish.png" class="w-50 h-50 mb-5" alt="" />
              <div class="fs-18 mt-5">Blood Count</div>
              <div class="fw-400 text-primary fs-22 pb-1">{{ $patient_activities->bloodcount }}/ml</div>
            </div>
          </a>
        </div>
                   	
        <div class="col-xl-4 col-md-4">			
          <div class="box">
          <div class="box-header">
            <h4 class="box-title">Current Vitals</h4>
            <div class="box-controls pull-right">
            </div>
          </div>
          <div class="box-body">
              <div class="row">						
              <div class="col-12">
                <div class="row ">							
                  <div class="col-6">							  
                    <img class="img-fluid float-start w-30 mt-10 me-10" src="{{asset('contents/admin')}}/images/weight.png" alt="">
                    <div>
                      <p class="mb-0"><small>Weight</small></p> 
                      <h5 class="mb-0"><span>{{ $patient_activities->weight }} Kg</span></h5>
                    </div>
                  </div>							
                  <div class="col-6 ">							  
                    <img class="img-fluid float-start w-30 mt-10 me-10" src="{{asset('contents/admin')}}/images/human.png" alt="">
                    <div>
                      <p class="mb-0"><small>Height</small></p> 
                      <h5 class=" mb-0"><span>{{ $patient_activities->height }}</span></h5>
                    </div>
                  </div>
                </div>									
              </div>
              </div>
          </div>
            <div class="box-body bg-primary">
              <img src="{{asset('contents/admin')}}/images/smoking.png" alt="" class="float-start me-10">
              <p>Smoking Status : {{ $patient_activities->smoking }}</p>
            </div>
          </div>	
        </div>
      </div>
        
        
      <div class="row">
        <div class="col-xl-4 col-lg-4  col-md-4">
          <div class="box-body">
            <div class="media-list">
              <div class="media p-0 bar-0 mb-30">
                <a class="align-self-start ms-0" href="#"><img
                    class="avatar avatar-xl bg-white shadow rounded-circle pull-up"
                    src="{{asset('contents/admin')}}/images/svg-icon/medical/lungs.png" alt="..."></a>
                <div class="media-body align-self-center">
                  <p class="mb-0">
                    <a class="hover-success fs-16" href="#">Lungs</a>
                    <span class="float-end text-fade">{{ $patient_activities->lungs }}%</span>
                  </p>
                  <div class="w-p100">
                    <div class="progress progress-sm mb-0 mt-5">
                      <div class="progress-bar bg-lightgreen" role="progressbar" aria-valuenow="{{ $patient_activities->lungs }}"
                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $patient_activities->lungs }}%"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="media p-0 bar-0 mb-30">
                <a class="align-self-start ms-0" href="#"><img
                    class="avatar avatar-xl bg-white shadow rounded-circle pull-up"
                    src="{{asset('contents/admin')}}/images/svg-icon/medical/stomach.png" alt="..."></a>
                <div class="media-body align-self-center">
                  <p class="mb-0">
                    <a class="hover-success fs-16" href="#">Stomach</a>
                    <span class="float-end text-fade">{{ $patient_activities->stomach }}%</span>
                  </p>
                  <div class="w-p100">
                    <div class="progress progress-sm mb-0 mt-5">
                      <div class="progress-bar bg-lightgreen" role="progressbar" aria-valuenow="{{ $patient_activities->stomach }}"
                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $patient_activities->stomach }}%"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="media p-0 bar-0 mb-30">
                <a class="align-self-start ms-0" href="#"><img
                    class="avatar avatar-xl bg-white shadow rounded-circle pull-up"
                    src="{{asset('contents/admin')}}/images/svg-icon/medical/liver.png" alt="..."></a>
                <div class="media-body align-self-center">
                  <p class="mb-0">
                    <a class="hover-success fs-16" href="#">Liver</a>
                    <span class="float-end text-fade">{{ $patient_activities->liver }}%</span>
                  </p>
                  <div class="w-p100">
                    <div class="progress progress-sm mb-0 mt-5">
                      <div class="progress-bar bg-lightgreen" role="progressbar" aria-valuenow="{{ $patient_activities->liver }}"
                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $patient_activities->liver }}%"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="media p-0 bar-0 mb-30">
                <a class="align-self-start ms-0" href="#"><img
                    class="avatar avatar-xl bg-white shadow rounded-circle pull-up p-5"
                    src="{{asset('contents/admin')}}/images/svg-icon/medical/heart.png" alt="..."></a>
                <div class="media-body align-self-center">
                  <p class="mb-0">
                    <a class="hover-success fs-16" href="#">Heart</a>
                    <span class="float-end text-fade">{{ $patient_activities->heart }}%</span>
                  </p>
                  <div class="w-p100">
                    <div class="progress progress-sm mb-0 mt-5">
                      <div class="progress-bar bg-lightgreen" role="progressbar" aria-valuenow="{{ $patient_activities->heart }}"
                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $patient_activities->heart }}%"></div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="media p-0 bar-0 mb-30">
                <a class="align-self-start ms-0" href="#"><img
                    class="avatar avatar-xl bg-white shadow rounded-circle pull-up p-5"
                    src="{{asset('contents/admin')}}/images/svg-icon/medical/brain.png" alt="..."></a>
                <div class="media-body align-self-center">
                  <p class="mb-0">
                    <a class="hover-success fs-16" href="#">Brain</a>
                    <span class="float-end text-fade">{{ $patient_activities->brain }}%</span>
                  </p>
                  <div class="w-p100">
                    <div class="progress progress-sm mb-0 mt-5">
                      <div class="progress-bar bg-lightgreen" role="progressbar" aria-valuenow="{{ $patient_activities->brain }}"
                        aria-valuemin="0" aria-valuemax="100" style="width: {{ $patient_activities->brain }}%"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4  col-md-4">
          <div class="box">
            <div class="box-body d-flex p-0">
              <div class="flex-grow-1 px-30 pt-20 pb-20 flex-grow-1 bg-img min-h-350 back-body">
                <h1 class="fw-400">Body <br>Composition</h1>
                <div class="w-p50">
                  <div id="donut-chart" style="max-height: 180px;"></div>
                </div>
                <div>
                  <div class="row mt-20">
                    <div class="col-xxxl-5 col-xl-6 col-lg-5 col-md-5 col-sm-5">
                      <div class="align-items-start mb-20">
                        <p class="m-0"><span class="badge badge-sm bg-lightgreen p-1 w-{{ $patient_activities->oxygen }}"></span></p>
                        <p class="mb-0">{{ $patient_activities->oxygen }}% <span class="text-fade ms-10"> Oxygen</span></p>
                      </div>
                      <div class="align-items-start mb-20">
                        <p class="m-0"><span class="badge badge-sm bg-lightorange p-1 w-{{ $patient_activities->carbon }}"></span></p>
                        <p class="mb-0">{{ $patient_activities->carbon }}% <span class="text-fade ms-10"> Carbon</span></p>
                      </div>
                      <div class="align-items-start mb-5">
                        <p class="m-0"><span class="badge badge-sm bg-lilac p-1 w-{{ $patient_activities->hydrogen }}"></span></p>
                        <p class="mb-0">{{ $patient_activities->hydrogen }}% <span class="text-fade ms-0 ms-xl-10"> Hydrogen</span></p>
                      </div>
                    </div>
                    <div class="col-xxxl-6 col-xl-6 col-lg-6 col-md-6 col-sm-5">
                      <div class="align-items-start mb-20">
                        <p class="m-0"><span class="badge badge-sm bg-Tacha p-1 w-{{ $patient_activities->nitrogen }}"></span></p>
                        <p class="mb-0">{{ $patient_activities->nitrogen }}% <span class="text-fade ms-10"> Nitrogen</span></p>
                      </div>
                      <div class="align-items-start mb-20">
                        <p class="m-0"><span class="badge badge-sm bg-purple p-1 w-{{ $patient_activities->calcium }}"></span></p>
                        <p class="mb-0">{{ $patient_activities->calcium }}% <span class="text-fade ms-10"> Calcium</span></p>
                      </div>
                      <div class="align-items-start mb-5">
                        <p class="m-0"><span class="badge badge-sm bg-shadow-green p-1 w-{{ $patient_activities->other }}"></span></p>
                        <p class="mb-0">{{ $patient_activities->other }}% <span class="text-fade ms-10"> Other</span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-lg-4  col-md-4">
          <div class="box box-body progress-box">
            <h4 class="box-title mb-0">Monthly Progress</h4>
            <div id="chart-1"></div>
            <p class="text-center text-light m-0">The patient has reached <span
                class="text-info fw-600">85%</span> of the theropeutic target</p>
          </div>
        </div>
      </div>
      @endif    					
    </div>
    
  </div>				
</section>
@endsection
