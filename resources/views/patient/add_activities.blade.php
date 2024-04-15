@extends('layouts.patient_app')
@section('content')
<section class="content">
  <div class="row justify-content-center">
    <div class="col-lg-10 col-md-10">
      <div class="box">
      <div class="box-header with-border">
        <h4 class="box-title">Add Activities</h4>
      </div>
    
      <!-- /.box-header -->
      <form class="form" method="POST" action="{{ route('patient.activitiesstore') }}">
      @csrf
        <div class="box-body">
          <h4 class="box-title text-info mb-0">Daily Activities</h4>
          <div class="row">
            <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Heart Rate</label>
              <input type="number" name="heart_rate" class="form-control @error('heart_rate') is-invalid @enderror" placeholder="82"  value="{{ old('heart_rate') }}">
              @error('heart_rate')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="col-md-4">
            <div class="form-group">
              <label class="form-label">Fever</label>
              <input type="number" name="fever" class="form-control @error('fever') is-invalid @enderror" placeholder="100.8 F"  value="{{ old('fever') }}">
              @error('fever')
              <div class="alert alert-danger">{{ $message }}</div>
              @enderror
            </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Glucose Level</label>
                <input type="number" step="any" placeholder="5.5" name="glucose" class="form-control @error('glucose') is-invalid @enderror"   value="{{ old('glucose') }}">
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
                <input type="number" name="upperblood" class="form-control @error('upperblood') is-invalid @enderror" placeholder="120"  value="{{ old('upperblood') }}">
                @error('upperblood')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Lower Blood Pressure</label>
                <input type="number" name="lowerblood" class="form-control @error('lowerblood') is-invalid @enderror" placeholder="80"  value="{{ old('lowerblood') }}">
                @error('lowerblood')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
            </div>
            <div class="col-md-4">
              <div class="form-group">
                <label class="form-label">Blood Count</label>
                <input type="number" step="0.0001"  name="bloodcount" class="form-control @error('bloodcount') is-invalid @enderror" placeholder="9.456/ml"  value="{{ old('bloodcount') }}">
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
                <input type="number" name="weight" class="form-control @error('weight') is-invalid @enderror" placeholder="65kg">
                @error('weight')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label class="form-label">Height</label>
                  <input type="text" name="height" class="form-control @error('height') is-invalid @enderror" placeholder="5'6''">
                  @error('height')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
            <div class="col-md-3">
            <div class="form-group">
              <label class="form-label">Smoking Status</label>
              <select class="form-select @error('smoking') is-invalid @enderror" name="smoking"  value="{{ old('smoking') }}">
              <option></option>
              <option value="Smoker"  {{ old('smoking') == 'Smoker' ? 'selected' : '' }}>Smoker</option>
              <option value="No Smoker"  {{ old('smoking') == 'No Smoker' ? 'selected' : '' }}>No Smoker</option>
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
                <input type="number" name="lungs" class="form-control @error('lungs') is-invalid @enderror" placeholder="90">
                @error('lungs')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Stomach</label>
                  <input type="number" name="stomach" class="form-control @error('stomach') is-invalid @enderror" placeholder="70">
                  @error('stomach')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Liver</label>
                  <input type="number" name="liver" class="form-control @error('liver') is-invalid @enderror" placeholder="50">
                  @error('liver')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Heart</label>
                  <input type="number" name="heart" class="form-control @error('heart') is-invalid @enderror" placeholder="70">
                  @error('heart')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Brain</label>
                  <input type="number" name="brain" class="form-control @error('brain') is-invalid @enderror" placeholder="80">
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
                <input type="number" name="oxygen" class="form-control @error('oxygen') is-invalid @enderror" placeholder="70">
                @error('oxygen')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
              </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Carbon</label>
                  <input type="number" name="carbon" class="form-control @error('carbon') is-invalid @enderror" placeholder="40">
                  @error('carbon')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Hydrogen</label>
                  <input type="number" name="hydrogen" class="form-control @error('hydrogen') is-invalid @enderror" placeholder="45">
                  @error('hydrogen')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Nitrogen</label>
                  <input type="number" name="nitrogen" class="form-control @error('nitrogen') is-invalid @enderror"placeholder="30">
                  @error('nitrogen')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Calcium</label>
                  <input type="number" name="calcium" class="form-control @error('calcium') is-invalid @enderror" placeholder="40">
                  @error('calcium')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
              </div>
              <div class="col-md-2">
                <div class="form-group">
                  <label class="form-label">Other</label>
                  <input type="number" name="other" class="form-control @error('other') is-invalid @enderror" placeholder="40">
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
