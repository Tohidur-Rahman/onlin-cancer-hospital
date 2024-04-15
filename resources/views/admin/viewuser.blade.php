@extends('layouts.app')
@section('content')
<section class="content">
    <div class="row">
        <div class="col-12">
            <div class="box">
                <div class="box-header with-border">
                    <div class="d-md-flex align-items-center justify-content-between with-border">
                        <h4 class="box-title">Users</h4>

                        <div class="d-flex">
                            <a href="{{ route('user.edit',$users->id) }}" class="btn btn-success"><i
                                    class="fa fa-check-circle-o"></i>
                                Edit User</a>
                        </div>
                    </div>
                </div>
                <div class="box-body">

                    <div>
                        <p>Name :<span class="text-gray ps-10">{{ $users->name }} </span> </p>
                        <p>Email :<span class="text-gray ps-10"> {{ $users->email }}</span> </p>
                        <p>Phone :<span class="text-gray ps-10">{{ $users->name }}</span> </p>
                        <p>Join On :<span
                                class="text-gray ps-10">{{ $users->created_at->format('M-d-Y / h:i A') }}</span> </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@endsection
