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
                  <th>Status</th>
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
                  @if ($patient->doctor)
                  <td>{{$patient->doctor->first_name}} {{$patient->doctor->last_name}}</td>
                  <td><span class="badge badge-warning-light">In Treatment</span></td>
                  @else
                  <td style="color: red">Pending</td>
                  <td><span class="badge badge-danger-light">New Patient</span></td>
                  @endif
                  
                  
                  <td>												
                    <div class="btn-group">
                      <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('patient.profile',$patient->id) }}">View Details</a>
                      <a class="dropdown-item" href="{{ route('admin.assigned_doctor_create',$patient->id) }}">Assigned Doctor</a>
                      <a class="dropdown-item" href="{{ route('delete_patient',$patient->id) }}" id="delete">Delete</a>
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
