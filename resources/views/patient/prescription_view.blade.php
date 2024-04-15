@extends('layouts.patient_app')
@section('content')
<section class="invoice printableArea">
  <div class="row">
    <div class="col-12">
      <div class="page-header">
        <h2 class="d-inline"><span class="fs-30">Patient Prescription</span></h2>
        <div class="pull-right text-end">
          <h3>{{ $date->format('M-d-Y / h:i A') }}</h3>
        </div>
      </div>
    </div>
    <!-- /.col -->
  </div>
  <div class="row invoice-info">
    <div class="col-md-6 invoice-col">
      <strong>Patient</strong>
      <address>
        <strong class="text-blue fs-24">{{ Auth::guard('patient')->user()->first_name}} {{ Auth::guard('patient')->user()->last_name}}</strong><br>
        <strong class="d-inline">Address: {{ Auth::guard('patient')->user()->address}}</strong><br>
        <strong>Phone: {{ Auth::guard('patient')->user()->number}} &nbsp;&nbsp;&nbsp;&nbsp; Email: {{ Auth::guard('patient')->user()->email}}</strong>
      </address>
    </div>
    <!-- /.col -->
    @if ($patients->doctor)
    <div class="col-md-6 invoice-col text-end">
      <strong>Doctor</strong>
      <address>
        <strong class="text-blue fs-24">{{ $patients->doctor->first_name}} {{ $patients->doctor->last_name}}</strong><br>
        
        <strong>Email: {{ $patients->doctor->email}}</strong>
      </address>
    </div>
    @endif
    
    <!-- /.col -->
    <div class="col-sm-12 invoice-col mb-15">
      <div class="invoice-details row no-margin">
        <div class="col-md-4 col-lg-4"><b>P-ID: </b>#{{ Auth::guard('patient')->user()->id}}</div>
        <div class="col-md-4 col-lg-4"><b>Disease:</b>  {{$patients->cancer->disease}}</div>
        <div class="col-md-4 col-lg-4 float-md-right float-lg-right"><b>Admit On:</b> {{$patients->created_at->format('M-d-Y / h:i A')}}</div>
        
      </div>
    </div>
    <!-- /.col -->
  </div>
  <div class="row">
    <div class="col-12 table-responsive">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th class="text-center">Sl.No</th>
            <th class="text-center">Date</th>
            <th class="text-center">Medicine Name</th>
            <th class="text-center">Strength</th>
            <th class="text-center">Dose</th>
            <th class="text-center">Advice Meal</th>
            <th class="text-center">Duration</th>
            
            
          </tr>
        </thead>
          
        <tbody>
          @foreach ($patients->prescription as $row)
          <tr class="tbclass">
            <td class="text-center"></td>
            <td class="text-center">{{ $row->created_at->format('M-d-Y') }}</td>
            <td class="text-center">{{ $row->medicine }}</td>
            <td class="text-center">{{ $row->strength }}</td>
            <td class="text-center">{{ $row->dose }}</td>
            <td class="text-center">{{ $row->advice }}</td>
            <td class="text-center">{{ $row->duration }}</td>
            
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.col -->
  </div>


</section>     
@endsection
