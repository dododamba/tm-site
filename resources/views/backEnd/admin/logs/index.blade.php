@extends('backLayout.app')
@section('title')
Log
@stop

@section('content')

    <div class="table table-responsive">
        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Action</th> <th>Détail</th> <th>AdresseIp</th><th>Location</th> <th>Description</th> <th>Date</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($logs as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('logs', $item->id) }}">{{ $item->action }}</a></td> <td>{{ $item->description }}</td> <td>{{ $item->adresseIp }}</td><td>{{ $item->location }}</td>
                    <td>{{ $item->description }}</td><td>{{ $item->created_at }}</td>
                    <td>
                        <a href="{{ url('logs/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['logs', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection