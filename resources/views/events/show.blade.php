@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <a class="btn btn-primary" href="{{ route('events.index') }}"> Back </a> 
                   
            </div>
            </div>
        </div>

        @if ($message= Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif

            <div class="card-body">
            <table class="table table-striped">
            <thead>
                <tr>
               
                    <th>Name</th>
                    <th>Email</th>
                    <th>Event</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Start At</th>
                    <th>End At</th>
                    <th>Organizer</th>
                    <th>Access</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach($event_request as $event)
             @if(is_null($event->accessStatus))
                <tr>
                    <input type="hidden" name="id" value="{{$event->id}}">
                    <td><input type="hidden" name="name" value="{{$event->name}}">{{$event->name}}</td>
                    <td><input type="hidden" name="email" value="{{$event->email}}">{{$event->email}}</td>
                    <td><input type="hidden" name="eveName" value="{{$event->eveName}}">{{$event->eveName}}</td>
                    <td><input type="hidden" name="eveLocation" value="{{$event->eveLocation}}">{{$event->eveLocation}}</td>
                    <td><input type="hidden" name="eveType" value="{{$event->eveType}}">{{$event->eveType}}</td>
                    <td><input type="hidden" name="eveDate" value="{{$event->eveDate}}">{{$event->eveDate}}</td>
                    <td><input type="hidden" name="eveStartAt" value="{{$event->eveStartAt}}">{{$event->eveStartAt}}</td>
                    <td><input type="hidden" name="eveEndAt" value="{{$event->eveEndAt}}">{{$event->eveEndAt}}</td>
                    <td><input type="hidden" name="eveOrganizer" value="{{$event->eveOrganizer}}">{{$event->eveOrganizer}}</td>
                    <td><input type="hidden" name="eveStatus" value="{{$event->eveStatus}}">{{$event->eveStatus}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('events.accept',$event->id) }}">Accept</a>
                        <a class="btn btn-danger" href="\">Decline</a>
                    </td>
                </tr>
            @endif
            @endforeach         
            </tbody>
            </table>
            </div>

            <div class="card-body">
            <table class="table table-striped">
            <thead>
            <h5>Confirmed Participants</h5>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Event</th>
                    <th>Location</th>
                    <th>Type</th>
                    <th>Date</th>
                    <th>Start At</th>
                    <th>End At</th>
                    <th>Organizer</th>
                    <th>Access</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
             @foreach($event_request as $event)
             @if($event->accessStatus == "ACCEPTED")
                <tr>
                    <input type="hidden" name="id" value="{{$event->id}}">
                    <td>{{$event->name}}</td>
                    <td>{{$event->email}}</td>
                    <td>{{$event->eveName}}</td>
                    <td>{{$event->eveLocation}}</td>
                    <td>{{$event->eveType}}</td>
                    <td>{{$event->eveDate}}</td>
                    <td>{{$event->eveStartAt}}</td>
                    <td>{{$event->eveEndAt}}</td>
                    <td>{{$event->eveOrganizer}}</td>
                    <td>{{$event->eveStatus}}</td>
                    <td>{{$event->accessStatus}}</td>
                </tr>
            @endif
            @endforeach         
            </tbody>
            </table>
            </div>
        </div>
    </div>
 </div>

@endsection