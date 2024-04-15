@extends('layouts.app')
@section('content')
<section class="content">
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
            <strong class="text-blue fs-24">{{  $data->first_name}} {{  $data->last_name}}</strong><br>
            <strong class="d-inline">Address: {{  $data->address}}</strong><br>
            <strong>Phone: {{ $data->number}} &nbsp;&nbsp;&nbsp;&nbsp; Email: {{  $data->email}}</strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-md-6 invoice-col text-end">
          <strong>Doctor</strong>
          <address>
            <strong class="text-blue fs-24">{{ $data->doctor->first_name}} {{ $data->doctor->last_name}}</strong><br>
            
            <strong>Email: {{ $data->doctor->email}}</strong>
          </address>
        </div>
        <!-- /.col -->
        <div class="col-sm-12 invoice-col mb-15">
          <div class="invoice-details row no-margin">
            <div class="col-md-4 col-lg-4"><b>P-ID: </b>#{{ $data->id}}</div>
            <div class="col-md-4 col-lg-4"><b>Disease:</b>  {{$data->cancer->disease}}</div>
            <div class="col-md-4 col-lg-4 float-md-right float-lg-right"><b>Admit On:</b> {{$data->created_at->format('M-d-Y / h:i A')}}</div>
            
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
                <th class="text-center">Medicine Name</th>
                <th class="text-center">Strength</th>
                <th class="text-center">Dose</th>
                <th class="text-center">Advice Meal</th>
                <th class="text-center">Duration</th>
                <th class="text-center">Action</th>
              </tr>
              @foreach ($data->prescription as $row)
              <tr class="tbclass">
                <td class="text-center"></td>
                <td class="text-center">{{ $row->medicine }}</td>
                <td class="text-center">{{ $row->strength }}</td>
                <td class="text-center">{{ $row->dose }}</td>
                <td class="text-center">{{ $row->advice }}</td>
                <td class="text-center">{{ $row->duration }}</td>
                <td class="text-center">												
                  <div class="btn-group">
                    <a class="hover-primary dropdown-toggle no-caret" data-bs-toggle="dropdown"><i class="fa fa-ellipsis-h"></i></a>
                    <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{ route('doctor.patient.edit_prescription',$row->id) }}">Edit</a>
                    <a class="dropdown-item" href="{{ route('doctor.patient.delete_prescription',$row->id) }}" id="delete">Delete</a>
                    </div>
                    </div>
                </td>
              </tr>
              @endforeach
            </thead>
              
            
            <tbody>
              
            </tbody>
          </table>
          <div class="box-footer">
            <a href="{{ route('doctor.patient.create_prescription',$data->id) }}">
              <button type="submit" class="btn btn-primary">
                +Add Prescription
              </button>
            </a>
            
        </div>
        </div>
        <!-- /.col -->
      </div>

   
</section>
@endsection
