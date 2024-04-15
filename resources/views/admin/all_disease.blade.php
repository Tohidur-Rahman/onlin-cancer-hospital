@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="box">
        <div class="box-body">
          <div class="table-responsive rounded card-table">
            <table class="table border-no" id="example1">
              <thead>
                <tr>
                  <th>Disease Name</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($disease as $row)
                <tr class="hover-primary">
                  
                  <td>{{$row->disease}}</td>
                  
                  <td><a id="delete" href="{{ route('admin.delete_disease',$row->id) }}"><button style="background-color: #ff0033;" type="button" name="delete" 
                    class="btn btn-outline-primary">Delet</button></a></td>
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
