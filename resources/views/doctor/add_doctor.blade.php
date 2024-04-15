@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row justify-content-center">
        <div class="col-lg-11 col-md-11">
            <div class="box">
                <div class="box-header with-border">
                    <div class="d-md-flex align-items-center justify-content-between mb-20 with-border">
                        <h4 class="box-title">Add Doctor</h4>
                        <div class="d-flex">
                          <a href="{{ route('doctor.view_list') }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
                            All Doctor</a>
                        </div>
                      </div>
                </div>
                                
                <!-- /.box-header -->
                <form class="form" method="POST" action="{{ route('doctor.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name</label>
                                    <input type="text" name="first_name"
                                        class="form-control @error('first_name') is-invalid @enderror"
                                        placeholder="First Name" value="{{ old('first_name') }}">
                                    @error('first_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name</label>
                                    <input type="text" name="last_name"
                                        class="form-control @error('last_name') is-invalid @enderror"
                                        placeholder="Last Name" value="{{ old('last_name') }}">
                                    @error('last_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Contact Number</label>
                                    <input type="number" name="number"
                                        class="form-control @error('number') is-invalid @enderror" placeholder="Phone"
                                        value="{{ old('number') }}">
                                    @error('number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Birth Date</label>
                                    <input type="date" name="birth"
                                        class="form-control @error('birth') is-invalid @enderror"
                                        placeholder="Birth Date" value="{{ old('birth') }}">
                                    @error('birth')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">E-Mail</label>
                                    <input type="text" name="email"
                                        class="form-control @error('email') is-invalid @enderror"
                                        value="{{ old('email') }}">
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Password</label>
                                    <input type="password" name="password"
                                        class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                                    @error('password')
                                    <div class=" alert alert-danger">{{ $message }}</div>
                                    @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Address</label>
                        <input type="text" Name="address" class="form-control @error('address') is-invalid @enderror"
                            placeholder="Address ..." value="{{ old('address') }}">
                        @error('address')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select class="form-select @error('gender') is-invalid @enderror" name="gender">
                                    <option></option>
                                    <option value="Male" {{ old('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option value="Female" {{ old('gender') == 'Female' ? 'selected' : '' }}>Female
                                    </option>
                                </select>
                                @error('gender')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="form-label">Specialist of Disease</label>
                                <select class="form-select @error('cancer_id') is-invalid @enderror" name="cancer_id">
                                    <option></option>
                                    @foreach ($disease as $row)
                                    <option value="{{ $row->id }}"
                                        {{ old('cancer_id') == $row->disease ? 'selected' : '' }}>
                                        {{ $row->disease }}</option>
                                    @endforeach

                                </select>
                                @error('cancer_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Avatar</label>
                        <label class="file">
                            <input type="file" name="image" id="file" class="@error('image') is-invalid @enderror"
                                value="{{ old('image') }}">
                            @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </label>
                    </div>
                    <div class="form-group">
                        <label class="form-label">Medical Degree</label>
                        <textarea rows="5" name="degree" class="form-control @error('degree') is-invalid @enderror"
                            placeholder="Medical Degree">{{ old('degree') }}</textarea>
                        @error('degree')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Specialist</label>
                        <textarea rows="5" name="specialist"
                            class="form-control @error('specialist') is-invalid @enderror"
                            placeholder="About Specialist" >{{ old('specialist') }}</textarea>
                        @error('specialist')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
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
