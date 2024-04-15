@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="box">
        <div class="box-body">
          <div class="table-responsive rounded card-table">
            <table class="table border-no" id="example1">
              <thead>
                <tr>
                  <th>Patient ID</th>
                  <th>Admit Date</th>
                  <th>Patient Name</th>
                  <th>Disease</th>
                  <th>Assigned Doctor</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
              @foreach($patients as $patient)
                <tr class="hover-primary">
                  
                  <td>p-{{$patient->id}}</td>
                  <td>{{$patient->created_at->format('M-d-Y /  h:i A')}}</td>
                  <td>{{$patient->first_name}} {{$patient->last_name}}</td>
                  <td>{{$patient->cancer->disease}}</td>
                 
                  <td>{{$patient->doctor->first_name}}</td>
                  <td>												
                    <div class="btn-group">
                      <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('doctor.patient.profile',$patient->id) }}">Profile</a>
                      <a class="dropdown-item" href="{{ route('doctor.patient.reports',$patient->id) }}">Test Reports</a>
                      <a class="dropdown-item" href="{{ route('doctor.patient.activities',$patient->id) }}">Activities</a>
                      <a class="dropdown-item" href="{{ route('doctor.patient.create_prescription',$patient->id) }}">Prescription</a>
                      
                      </div>
                      </div>
                  </td>
                </tr>									
                									
                @endforeach	  
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>			
</section>
@endsection
