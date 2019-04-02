@extends('backLayout.app')
@section('title')
Coordonee
@stop

@section('content')

    <h1>Coordonee</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Altitude</th><th>Longitude</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $coordonee->id }}</td> <td> {{ $coordonee->nom }} </td><td> {{ $coordonee->altitude }} </td><td> {{ $coordonee->longitude }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection