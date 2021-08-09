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
                                <h2>Are you sure want to join the Event?</h2>
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

                <form action="{{ route('requestEvent.store') }}" method="POST">
                @csrf

                @method('POST')

                <div class="card-body">
                <table class="table table-striped">    
                <input type="hidden" name="eveId" value="{{ $event->id }}">
                    <tr>                  
                        <th>Name</th>
                        <td> <input type="hidden" name="name" value="{{ Auth::user()->name }}">{{Auth::user()->name}}</td>
                    </tr>
                    <tr>                  
                        <th>Email</th>
                        <td><input type="hidden" name="email" value="{{ Auth::user()->email }}">{{Auth::user()->email}}</td>
                    </tr>
                    <tr>                  
                        <th>Event</th>
                        <td><input type="hidden" name="eveName" value="{{ $event->eveName }}">{{$event->eveName}}</td>
                    </tr>
                    <tr>
                        <th>Location</th>
                        <td><input type="hidden" name="eveLocation" value="{{ $event->eveLocation }}">{{$event->eveLocation}}</td>
                    </tr>
                    <tr>
                        <th>Type</th>
                        <td><input type="hidden" name="eveType" value="{{ $event->eveType }}">{{$event->eveType}}</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td><input type="hidden" name="eveDate" value="{{ $event->eveDate }}">{{$event->eveDate}}</td>
                    </tr>
                    <tr>
                        <th>Start At</th>
                        <td><input type="hidden" name="eveStartAt" value="{{ $event->eveStartAt }}">{{$event->eveStartAt}}</td>
                    </tr>
                    <tr>
                        <th>End At</th>
                        <td><input type="hidden" name="eveEndAt" value="{{ $event->eveEndAt }}">{{$event->eveEndAt}}</td>
                    </tr>
                    <tr>
                        <th>Organizer</th>
                        <td><input type="hidden" name="eveOrganizer" value="{{ $event->eveOrganizer }}">{{$event->eveOrganizer}}</td>
                    </tr>
                    <tr>
                        <th>Access</th>
                        <td><input type="hidden" name="eveStatus" value="{{ $event->eveStatus }}">{{$event->eveStatus}}</td>
                    </tr>
        
                    <tr>
                        <th>Action</th>
                        <td>                       
                            <a class="btn btn-primary" href="{{ route('requestEvent.index') }}">Back </a>
                            <button type="submit" class="btn btn-success">Proceed</button>
                        </td>
                    </tr>
            
                </table>
                </div>

                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

