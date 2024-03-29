@extends('staff.users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Change Password</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('staff.users.index') }}">Back</a>
        </div>
    </div>
</div>

@if($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input. <br><br>

    <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</i>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('staff.users.updatePassword',Auth::user()->id) }}" method="POST">
@csrf

@method('PUT')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>New Password</strong>
        <input type="text" name="password" value="" class="form-control" >
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Confirm password:</strong>
        <input type="text" name="confirmpassword" value="" class="form-control" >
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection




