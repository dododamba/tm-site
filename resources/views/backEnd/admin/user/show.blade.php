@extends('backLayout.app')
@section('title')
User
@stop

@section('content')

    <h1>User</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>First Name</th><th>Middle Name</th><th>Last Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $user->id }}</td> <td> {{ $user->first_name }} </td><td> {{ $user->middle_name }} </td><td> {{ $user->last_name }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection