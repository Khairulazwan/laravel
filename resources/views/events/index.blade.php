@extends('layouts.app')

@section('content')
<div class="container-fluid">
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-lg-12 margin-tb">

            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('events.create') }}"> Create New Event </a><br><br>
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
                    <th>No</th>
                    <th>Name</th>
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

                @foreach($events as $event)

                <tr>
                    <td>{{++$i}}</td>
                    <td>{{$event->eveName}}</td>
                    <td>{{$event->eveLocation}}</td>
                    <td>{{$event->eveType}}</td>
                    <td>{{$event->eveDate}}</td>
                    <td>{{$event->eveStartAt}}</td>
                    <td>{{$event->eveEndAt}}</td>
                    <td>{{$event->eveOrganizer}}</td>
                    <td>{{$event->eveStatus}}</td>
                    <td>
                        <form action="{{ route('events.destroy',$event->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('events.show',$event->id) }}">View</a>
                        <a class="btn btn-secondary" href="{{ route('events.edit',$event->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
                @endforeach
            </table>
            </div>
        </div>
    </div>
 </div>

@endsection