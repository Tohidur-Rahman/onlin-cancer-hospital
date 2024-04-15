@extends('layouts.app')
@section('content')
<section class="content">

    <div class="row">
        <div class="col-lg-12 col-12">
            <div class="box">
              <div class="box-header with-border">
                <div class="d-md-flex align-items-center justify-content-between mb-20 with-border">
                    <h4 class="box-title">Create Prescription</h4>
                    <div class="d-flex">
                      <a href="{{ route('doctor.patient.view_prescription',$data->id) }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
                        view Prescription</a>
                    </div>
                  </div>
              </div>
          


                <form action="{{ route('doctor.patient.store_prescription',$data->id) }}" method="POST">
                    @csrf

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th style="text-align: center">Medicine Name</th>
                                <th style="text-align: center">Strength</th>
                                <th style="text-align: center">Dose</th>
                                <th style="text-align: center">Advice Meal</th>
                                <th style="text-align: center">Duration</th>
                                <th style="text-align: center">Add More</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="form-group"><input type="text" name="medicine[]" placeholder="Napa" class="form-control" required></td>
                                <td class="form-group"><input type="text" name="strength[]" placeholder="655mg" class="form-control" required></td>
                                <td class="form-group"><input type="text" name="dose[]" placeholder="1+0+1" class="form-control" required> </td>
                                <td class="form-group"><select style="width: 125px;" class="form-select " aria-label=".form-select-lg example" name="advice[]" required><option></option><option value="After Meal">After Meal</option><option value="Before Meal">Before Meal</option></select></td>
                                <td class="form-group"><input type="text" name="duration[]" placeholder="7-Days" class="form-control" required></td>

                                <td><button style="background-color: #0e36fc;" type="button" name="add" id="add_more"
                                        class="btn btn-outline-primary">Add+</button></td>
                            </tr>
                        </tbody>
                    </table>
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
