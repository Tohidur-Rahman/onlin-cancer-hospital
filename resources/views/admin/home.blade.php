@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row">
    <div class="col-xxxl-9 col-xl-8 col-12">
      
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="box">
            <div class="box-body">
              <div class="d-flex align-items-center">
                <div>
                  <h4 class="mb-0">Total Patients</h4>
                  <h3 class="mb-0">{{ $patient }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box">
            <div class="box-body">
              <div class="d-flex align-items-center">
                <div>
                  <h4 class="mb-0">Total Doctors</h4>
                  <h3 class="mb-0">{{ $doctor }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="box">
            <div class="box-body">
              <div class="d-flex align-items-center">
                <div>
                  <h4 class="mb-0">Total Admin</h4>
                  <h3 class="mb-0">{{ $admin }}</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-12">						
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Situations Over Time</h4>
            </div>
            <div class="box-body">							
              <div id="patient_statistics"></div>							
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-12">						
          <div class="box">
            <div class="box-header">
              <h4 class="box-title">Situations Over Medicine</h4>
            </div>
            <div class="box-body">
              <div id="recovery_statistics"></div>						
            </div>
          </div>	
        </div>
        <div class="col-12">
          <div class="box">
          <div class="box-header with-border">
            <h4 class="box-title">Admitted Patient</h4>
            <div class="pull-right">
              <div class=" lookup-right">
                <a href="{{ route('patient.list') }}" type="button" class="align-items-center justify-content-between waves-effect waves-light btn btn-primary">View All</a>
              </div>
              </div>
              
            
          </div>
          <div class="box-body">
            <div class="table-responsive rounded card-table">
                <table class="table border-no" id="example1" mb-0">                
                  <thead>
                  <tr class="bg-info-light">
                    <th>No</th>
                    <th>Date</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Settings</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($patients as $row)
                  <tr class="tbclass">
                    <td></td>
                    <td>{{ $row->created_at->format('M-d-Y') }}</td>
                    <td>P-{{ $row->id }}</td>
                    <td><strong>{{ $row->first_name }} {{ $row->last_name }}</strong></td>
                    <td>{{ $row->age }}</td>
                    <td>{{ $row->gender }}</td>
                    <td>
                      <div class="d-flex">
                          <a href="{{ route('patient.profile',$row->id) }}" class="waves-effect waves-circle btn btn-circle btn-success btn-xs me-5"><i class="fa fa-pencil"></i></a>
                        <a href="{{ route('delete_patient',$row->id) }}" id="delete" class="waves-effect waves-circle btn btn-circle btn-danger btn-xs"><i class="fa fa-trash"></i></a>
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
    </div>
    <div class="col-xxxl-3 col-xl-4 col-12">
      <div class="box">
        <div class="box-header">
          <h4 class="box-title">Recovery Situations</h4>
        </div>
        <div class="box-body">							
          <div id="total_patient"></div>							
        </div>
      </div>
      
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Doctor List</h4>
          <p class="mb-0 pull-right">Today</p>
        </div>
        <div class="box-body">
          <div class="inner-user-div3">
            @foreach ($doctors as $row)
            <div class="d-flex align-items-center mb-30">
              <div class="me-15">
                <img src="{{asset('uploads/doctor/'.$row->image)}}" class="avatar avatar-lg rounded10 bg-primary-light" alt="" />
              </div>
              <div class="d-flex flex-column flex-grow-1 fw-500">
                <a href="#" class="text-dark hover-primary mb-1 fs-16">{{ $row->first_name }} {{ $row->last_name }}</a>
                <span class="text-fade">{{ $row->cancer->disease }}</span>
              </div>
              <div class="dropdown">
                <a class="px-10 pt-5" href="#" data-bs-toggle="dropdown"><i class="ti-more-alt"></i></a>
                <div class="dropdown-menu dropdown-menu-end">
                  <a class="dropdown-item flexbox" href="{{ route('doctor.view_profile',$row->id) }}">
                  <span>View Profile</span>
                  </a>
                </div>
              </div>
            </div> 
            @endforeach
            

          </div>
        </div>
      </div>
    </div>

        <div class="col-xxxl-3 col-xl-12 col-12">
          <div class="box mb-20 calendar-box">
            <div class="box-body">
              <div id="calendar" class="fc fc-unthemed fc-ltr"></div>
            </div>
          </div>
        </div>


  </div>			
</section>
@endsection
