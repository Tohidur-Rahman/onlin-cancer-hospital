@extends('layouts.app')
@section('content')

<section class="content">

  <div class="row justify-content-center">
    <div class="col-lg-11 col-md-11">
        <div class="box">
            <div class="box-header with-border">
                <div class="d-md-flex align-items-center justify-content-between with-border">
                    <h4 class="box-title">Contacts</h4>
                    
                  <div class="d-flex">
                    <a href="{{ route('contact_list') }}" class="btn btn-success"><i class="fa fa-check-circle-o"></i>
                      All Contact</a>
                  </div>
                  </div>
            </div>   
                <div class="box-body">
                    
                  <div>
                    <p>Name :<span class="text-gray ps-10">{{ $contacts->c_name }} </span> </p>
                    <p>Email :<span class="text-gray ps-10"> {{ $contacts->c_email }}</span> </p>
                    <p>Phone :<span class="text-gray ps-10">{{ $contacts->phone }}</span> </p>
                    <p>Date :<span class="text-gray ps-10">{{ $contacts->created_at->format('M-d-Y / h:i A') }}</span> </p>
                    <p>Subject :<span class="text-gray ps-10">{{ $contacts->subject }}</span></p>
                    <p>Message :<span class="text-gray ps-10">{{ $contacts->msg }}</span></p>
                  </div> 
                    
                </div>
        </div>
       
    </div>
    <!-- /.box -->
</div>
</div>

</section>
@endsection
