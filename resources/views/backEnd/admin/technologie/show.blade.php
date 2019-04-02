@extends('backLayout.app')
@section('title')
Technologie
@stop

@section('content')

    <h1>Technologie</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Image</th><th>Icon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $technologie->id }}</td> <td> {{ $technologie->nom }} </td><td> {{ $technologie->image }} </td><td> {{ $technologie->icon }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection