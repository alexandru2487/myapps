@extends('layouts.app')

@section('content')
    <div class="row">
        <div>
            <a class="btn btn-success" href="{{route('users.create')}}">New User</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-striped list-records">
        <tr>
            <th>No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Birthday</th>
            <th>Role</th>
            <th>Status</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>No</td>
                <td>First Name</td>
                <td>Last Name</td>
                <td>Email</td>
                <td>Birtdday</td>
                <td>Role</td>
                <td>Status</td>
                <td>Action</td>
            </tr>
        @endforeach
    </table>
@endsection
