@extends('layouts.doctor_app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
                <div class="box-header with-border">
                  <div class="d-md-flex align-items-center justify-content-between ">
                    <h4 class="box-title">Edit Prescription</h4>
                    <div class="d-flex">
            
                      <a href="{{ route('doctor.patient.create_prescription',$data->patient->id) }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
                        Add Prescription</a>
                    </div>
                  </div>
                </div>



                <form action="{{ route('doctor.patient.update_prescription',$data->id) }}" method="POST">
                    @csrf

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center">Medicine Name</th>
                                <th style="text-align: center">Strength</th>
                                <th style="text-align: center">Dose</th>
                                <th style="text-align: center">Advice Meal</th>
                                <th style="text-align: center">Duration</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="form-group"><input type="text" name="medicine" class="form-control" value="{{ $data->medicine }}"></td>
                                <td class="form-group"><input type="text" name="strength" class="form-control" value="{{ $data->strength }}"></td>
                                <td class="form-group"><input type="text" name="dose" class="form-control" value="{{ $data->dose }}"> </td>
                                <td class="form-group">
                                  <select style="width: 125px;" class="form-select " aria-label=".form-select-lg example" name="advice" ><option value="{{ $data->advice }}">{{ $data->advice }}</option>
                                  <option value="After Meal">After Meal</option>
                                  <option value="Before Meal">Before Meal</option>
                                </select>
                              </td>
                                <td class="form-group"><input type="text" name="duration" class="form-control" value="{{ $data->duration }}"></td>
                            </tr>
                        </tbody>
                    </table>
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
