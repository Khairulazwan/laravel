@extends('staff.users.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Personal Information</h2>
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

<form action="{{ route('staff.users.update',Auth::user()->id) }}" method="POST">
@csrf

@method('PUT')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Full Name:</strong>
        <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" >
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Email:</strong>
        <input type="text" name="email" value="{{ Auth::user()->email }}" class="form-control">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Department:</strong>
        <input type="text" name="department" value="{{ Auth::user()->department }}" class="form-control">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Office:</strong>
        <input type="text" name="office" value="{{ Auth::user()->office }}" class="form-control" >
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection




