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
                  <th>Date</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Phone</th>
                  <th>View</th>
                </tr>
              </thead>
              <tbody>
                @foreach($contacts as $row)
                <tr class="hover-primary">
                  <td>{{$row->created_at->format('M-d-Y / h:i A')}}</td>
                  <td>{{$row->c_name}}</td>
                  <td>{{$row->c_email}}</td>
                  <td>{{$row->phone}}</td>
                  <td class="text-center">												
                    <div class="btn-group">
                      <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                      <div class="dropdown-menu">
                      <a class="dropdown-item" href="{{ route('contact_view',$row->id) }}">View Details</a>
                      <a href="{{ route('contact_delete',$row->id) }}" class="dropdown-item " id="delete">Delete
                      
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
