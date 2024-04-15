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
                  <th>Doctor Name</th>
                  <th>Email</th>
                  <th>Gender</th>
                  <th>Specialist</th>
                  <th>Phone</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach($doctors as $row)
                <tr class="hover-primary">
                  <td>{{$row->first_name}} {{$row->last_name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->gender}}</td>
                  <td>{{$row->cancer->disease}}</td>
                  <td>{{$row->number}}</td>
                  <td class="text-center">												
                    <div class="btn-group">
                      <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('doctor.view_profile',$row->id) }}">View Details</a>
                      <a href="{{ route('delete_doctor',$row->id) }}" class="dropdown-item " id="delete">Delete
                      
                      </a>
                      
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
