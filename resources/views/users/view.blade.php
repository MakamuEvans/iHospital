@extends('layouts.app')
@section('content')
    <div class="row">
        <table class="table table-striped table-bordered dt-responsive" id="users_table"
               cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->first_name}}</td>
                    <td>{{$user->last_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection
