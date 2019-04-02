@extends('backLayout.app')
@section('title')
Service
@stop

@section('content')

    <h1>Service</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Image</th><th>Icon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $service->id }}</td> <td> {{ $service->nom }} </td><td> {{ $service->image }} </td><td> {{ $service->icon }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection