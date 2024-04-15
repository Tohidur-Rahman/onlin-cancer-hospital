@extends('layouts.patient_app')
@section('content')
<section class="content">

  <div class="row">

    <div class="col-12">
      <!-- Default box -->
      <div class="box">
        <div class="box-header with-border">
          <h4 class="box-title">Zoom-Reports</h4>
        </div>
        <div class="box-body">
          <div class="zoom-gallery m-t-30">
            

            @foreach ($patient_report as $item)

            
              <a href="{{asset('uploads/patient/report')}}/{{ $item->r_image }}" >
                <img src="{{asset('uploads/patient/report')}}/{{ $item->r_image }}" width="32.5%" alt="" />
              </a>
            @endforeach


          </div>
        </div>
        <!-- /.box-body -->
      </div>

      <div class="box-header">
        <h4 class="box-title">Add Reports</h4>
      </div>
      <div class="box-body">
        <div class="mb-3">
          <form class="form" method="POST" action="{{ route('patient.reportstore') }}"
          enctype="multipart/form-data">
          @csrf
              <label for="formFile" class="form-label">File input reports</label>
              <input class="form-control @error('r_image') is-invalid @enderror" placeholder="About Specialist"  value="{{ old('r_image') }}" name='r_image' type="file" id="formFile">
              @error('r_image')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">
                  <i class="ti-save-alt"></i> Save
                </button>
              </div> 
          </form>    
        </div>
      </div>

    </div>
  </div>
</section>
@endsection
