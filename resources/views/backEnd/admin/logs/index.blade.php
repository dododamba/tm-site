@extends('backLayout.app')
@section('title')
Log
@stop

@section('content')

    <div class="table table-responsive">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Action</th><th>Ip</th><th>Location</th><th>User</th><th>Table</th> <th>Date</th>
                </tr>
            </thead>
            <tbody>
            @foreach($logs as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('logs', $item->id) }}">{{ $item->action }}</a></td> <td>{{ $item->adresseIp }}</td><td>{{ $item->location }}</td>
                    <td>{{ $item->user }}</td>  <td>{{ $item->table }}</td><td>{{ $item->created_at }}</td>

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection