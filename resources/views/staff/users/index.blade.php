@extends('layouts.staff')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Information') }}</div>

                <div class="card-body">

                    <table class="table table-striped">
               
                        <tr>
                            <th scope="row">#</th>
                            <td>{{ Auth::user()->id }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Name</th>
                            <td>{{ Auth::user()->name }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Email</th>
                            <td>{{ Auth::user()->email }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Department</th>
                            <td>{{ Auth::user()->department }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Office</th>
                            <td>{{ Auth::user()->office }}</td>
                        </tr>
                        <tr>
                            <th scope="row">Action</th>
                            <td>
                                <a class="btn btn-primary" href="{{ route('staff.users.edit',Auth::user()->id) }}">Edit Personal Information</a>
              
                                <button type="button" class="btn btn-warning">Change Password</button>                          
                            </td>
                        </tr>
                   
              
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
