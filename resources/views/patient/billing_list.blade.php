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
                  <th>Patient Name</th>
                  <th>Patient Email</th>
                  <th>Payment Number</th>
                  <th>Transaction Id</th>
                  <th>Payment Date</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach($bills as $bill)
                <tr class="hover-primary">
                  <td>p-{{$bill->patient->id}}</td>
                  <td>{{$bill->patient->first_name}} {{$bill->patient->last_name}}</td> 
                  <td>{{$bill->patient->email}}</td>
                  <td>{{$bill->pay_no}}</td>
                  <td>{{$bill->tn_id}}</td>
                  <td>{{$bill->created_at->format('M-d-Y / h:i A')}}</td>
                  <td><a id="delete" href="{{ route('delete_bill',$bill->id) }}"><button style="background-color: #ff0033;" type="button" name="delete" 
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
