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
                  <th>User Name</th>
                  <th>Email</th>
                  <th>Join On</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $row)
                <tr class="hover-primary">
                  
                  <td>{{$row->name}}</td>
                  <td>{{$row->email}}</td>
                  <td>{{$row->created_at->format('M-d-Y /  h:i A')}}</td>
                  
                  <td>												
                    <div class="btn-group">
                      <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('user_view',$row->id) }}">View Details</a>
                      <a class="dropdown-item" href="{{ route('user.edit',$row->id) }}">Edit</a>
                      <a class="dropdown-item" href="{{ route('user.delete',$row->id) }}" id="delete">Delete</a>
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
