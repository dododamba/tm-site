@extends('backLayout.app')
@section('title')
Log
@stop

@section('content')

    <h1>Log</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Action</th><th>AdresseIp</th><th>Location</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $log->id }}</td> <td> {{ $log->action }} </td><td> {{ $log->adresseIp }} </td><td> {{ $log->location }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection