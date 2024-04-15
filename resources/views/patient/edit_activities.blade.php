@extends('layouts.patient_app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-10 col-md-10">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Update Activities</h4>
      </div>
    
      <!-- /.box-header -->
      <form class="form" method="POST" action="{{ route('patient.activitiesupdate',$data->id) }}">
      @csrf
        <div class="box-body">
          <h4 class="box-title text-info mb-0">Daily Activities</h4>
          <div class="row">
            <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Heart Rate</label>
              <input type="number" name="heart_rate" class="form-control @error('heart_rate') is-invalid @enderror"  value="{{ $data->heart_rate}}">
              @error('heart_rate')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Fever</label>
              <input type="number" name="fever" class="form-control @error('fever') is-invalid @enderror"  value="{{ $data->fever}}">
              @error('fever')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Glucose Level</label>
                <input type="number" step="any" name="glucose" class="form-control @error('glucose') is-invalid @enderror"   value="{{ $data->glucose}}"">
                @error('glucose')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            </div>

            <div class="row">
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Upper Blood Pressure</label>
                <input type="number" name="upperblood" class="form-control @error('upperblood') is-invalid @enderror"  value="{{ $data->upperblood}}">
                @error('upperblood')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Lower Blood Pressure</label>
                <input type="number" name="lowerblood" class="form-control @error('lowerblood') is-invalid @enderror" value="{{ $data->lowerblood}}">
                @error('lowerblood')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Blood Count</label>
                <input type="number" step="0.0001"  name="bloodcount" class="form-control @error('bloodcount') is-invalid @enderror" value="{{ $data->bloodcount}}">
                @error('bloodcount')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            </div>         
          
            
          
          <h4 class="box-title text-info mb-0">Current Vitals</h4>
          <div class="row">
            <div class="col-md-3">
              <div class="form-group">
                <label class="form-label">Weight</label>
                <input type="number" name="weight" class="form-control @error('weight') is-invalid @enderror" value="{{ $data->weight}}">
                @error('weight')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="form-label">Height</label>
                  <input type="text" name="height" class="form-control @error('height') is-invalid @enderror" value="{{ $data->height}}">
                  @error('height')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            <div class="col-md-3">
            <div class="form-group">
              <label class="form-label">Smoking Status</label>
              <select class="form-select @error('smoking') is-invalid @enderror" name="smoking"  value="{{ old('smoking') }}">
              <option value="{{ $data->smoking}}">{{  $data->smoking }}</option>
              <option value="Smoker" >Smoker</option>
              <option value="No Smoker" >No Smoker</option>
              </select>
              @error('smoking')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            
          </div>
          <h4 class="box-title text-info mb-0">Body Organs</h4>
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-label">Lungs</label>
                <input type="number" name="lungs" class="form-control @error('lungs') is-invalid @enderror" value="{{ $data->lungs}}">
                @error('lungs')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Stomach</label>
                  <input type="number" name="stomach" class="form-control @error('stomach') is-invalid @enderror" value="{{ $data->stomach}}">
                  @error('stomach')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Liver</label>
                  <input type="number" name="liver" class="form-control @error('liver') is-invalid @enderror" value="{{ $data->liver}}">
                  @error('liver')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Heart</label>
                  <input type="number" name="heart" class="form-control @error('heart') is-invalid @enderror" value="{{ $data->heart}}">
                  @error('heart')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Brain</label>
                  <input type="number" name="brain" class="form-control @error('brain') is-invalid @enderror" value="{{ $data->brain}}">
                  @error('brain')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
            
            
          </div>
          <h4 class="box-title text-info mb-0">Body Composition</h4>
          <div class="row">
            <div class="col-md-2">
              <div class="form-group">
                <label class="form-label">Oxygen</label>
                <input type="number" name="oxygen" class="form-control @error('oxygen') is-invalid @enderror" value="{{ $data->oxygen}}">
                @error('oxygen')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Carbon</label>
                  <input type="number" name="carbon" class="form-control @error('carbon') is-invalid @enderror" value="{{ $data->carbon}}">
                  @error('carbon')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Hydrogen</label>
                  <input type="number" name="hydrogen" class="form-control @error('hydrogen') is-invalid @enderror" value="{{ $data->hydrogen}}">
                  @error('hydrogen')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Nitrogen</label>
                  <input type="number" name="nitrogen" class="form-control @error('nitrogen') is-invalid @enderror" value="{{ $data->nitrogen}}">
                  @error('nitrogen')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Calcium</label>
                  <input type="number" name="calcium" class="form-control @error('calcium') is-invalid @enderror" value="{{ $data->calcium}}">
                  @error('calcium')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Other</label>
                  <input type="number" name="other" class="form-control @error('other') is-invalid @enderror" value="{{ $data->other}}">
                  @error('other')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            
            
          </div>


        </div>
        <!-- /.box-body -->
        <div class="box-footer">
          <button type="submit" class="btn btn-primary">
            <i class="ti-save-alt"></i> Update
          </button>
        </div>  
      </form>
      </div>
      <!-- /.box -->			
    </div>
  </div>
			
</section>
@endsection
