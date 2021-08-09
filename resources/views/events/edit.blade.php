@extends('events.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit Event</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('events.index') }}">Back</a>
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

<form action="{{ route('events.update',$event->id) }}" method="POST">
@csrf

@method('PUT')
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Name:</strong>
        <input type="text" name="eveName" value="{{ $event->eveName }}" class="form-control" placeholder="Event Name">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Location:</strong>
        <input type="text" name="eveLocation" value="{{ $event->eveLocation }}" class="form-control" placeholder="Event Location">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Type:</strong>
        <input type="text" name="eveType" value="{{ $event->eveType }}" class="form-control" placeholder="Event Type">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Date:</strong>
        <input type="date" name="eveDate" value="{{ $event->eveDate }}" class="form-control" placeholder="Event Date">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Start At:</strong>
        <input type="text" name="eveStartAt" value="{{ $event->eveStartAt }}" class="form-control" placeholder="Event Start At">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event End At:</strong>
        <input type="text" name="eveEndAt" value="{{ $event->eveEndAt }}" class="form-control" placeholder="Event End At">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Organizer:</strong>
        <input type="text" name="eveOrganizer" value="{{ $event->eveOrganizer }}" class="form-control" placeholder="Event Organizer">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
        <strong>Event Status:</strong>
        <input type="text" name="eveStatus" value="{{ $event->eveStatus }}" class="form-control" placeholder="Event Status">
        </div>
    </div>

    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
</form>
@endsection




