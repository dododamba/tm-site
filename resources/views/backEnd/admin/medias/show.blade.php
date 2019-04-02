@extends('backLayout.app')
@section('title')
Media
@stop

@section('content')

    <h1>Media</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Description</th><th>Alt</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $media->id }}</td> <td> {{ $media->nom }} </td><td> {{ $media->description }} </td><td> {{ $media->alt }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection