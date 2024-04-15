@extends('layouts.app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-11 col-md-11">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Assigned Doctor</h4>
      </div>
      <div class="box-header with-border">
        <p><span class="ps_d">Patient Name :</span> {{ $data->first_name }} {{ $data->last_name }} </p>
        <p><span class="ps_d">Patient Disease :</span> {{$data->cancer->disease}} </p>

      </div>
    
      <!-- /.box-header -->
      <form class="form" method="POST" action="{{ route('admin.assigned_doctor_store',$data->id) }}">
      @csrf
        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
            <div class="form-group">
              <label class="form-label">Add Doctor</label>
              
              <select class="form-select" name="doctor_id">
                @if ($data->doctor)
                <option value="{{ $data->doctor->id }}">{{$data->doctor->first_name}} {{$data->doctor->last_name}} / {{$data->cancer->disease}}</option>
                @else
                <option></option>
                @endif
                
                @foreach ($doctors as $row )
                
                <option value="{{ $row->id }}">{{$row->first_name}} {{$row->last_name}} / {{$row->cancer->disease}}</option>
                @endforeach
                </select>
            </div>
            </div>
          </div>          
          
          
          
          
          
          
        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">
            <i class="ti-save-alt"></i> Save
          </button>
        </div>  
      </form>
      </div>
      <!-- /.box -->			
    </div>
  </div>
			
</section>
@endsection
