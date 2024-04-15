@extends('layouts.app')
@section('content')
<section class="content">

  <div class="row">

    <div class="col-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          
          <div class="d-md-flex align-items-center justify-content-between mb-10">  
            <h4 class="box-title">Zoom-Reports</h4>
            @if (Auth::guard('doctor')->user())
            <div class="d-flex">
              <a href="{{ route('doctor.patient.create_prescription',$patient->id)}}" class="btn btn-success"><i class="fa fa-edit"></i>Prescription</a>
            </div>
            @endif
            
          </div>
        </div>
        
        
        <div class="box-body">
          <div class="zoom-gallery m-t-30">
            

            @foreach ($patient_report as $item)
              <a href="{{asset('uploads/patient/report')}}/{{ $item->r_image }}" >
                <img src="{{asset('uploads/patient/report')}}/{{ $item->r_image }}" width="32.5%" alt="" />
              </a>
            @endforeach


          </div>
        </div>
        <!-- /.box-body -->
      </div>

      

    </div>
  </div>
</section>
@endsection
