@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <diV class="col-lg-12 margin-tb">
                            <div class="pull-left">
                                <h2>Create New Event</h2>
                            </div>
                            <div class="pull-right">
                                <a class="btn btn-primary" href="{{ route('events.index') }}">Back </a><br><br>
                            </div>
                        </div>
                    </div>

                @if($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input. <br><br>

                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>

                        @endforeach
                    </ul>
                </div>

                @endif

                <form action="{{ route('events.store') }}" method="POST">

                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Name:</strong>
                            <input type="text" name="eveName" class="form-control" placeholder="Event Name">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Location:</strong>
                            <input type="text" name="eveLocation" class="form-control" placeholder="Event Location">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Type:</strong>
                            <input type="text" name="eveType" class="form-control" placeholder="Event Type">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Date:</strong>
                            <input type="date" name="eveDate" class="form-control" placeholder="Event Date">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Start At:</strong>
                            <input type="text" name="eveStartAt" class="form-control" placeholder="Event Start At">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event End At:</strong>
                            <input type="text" name="eveEndAt" class="form-control" placeholder="Event End At">
                        </div>
                    </div>


                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Organizer:</strong>
                            <input type="text" name="eveOrganizer" class="form-control" placeholder="Event Organizer">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Event Status:</strong>
                            <input type="text" name="eveStatus" class="form-control" placeholder="Event Status">
                        </div>
                    </div>

                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>

                </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

