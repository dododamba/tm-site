@extends('backLayout.app')
@section('title')
Logo
@stop

@section('content')

    <h1>Logo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Alt</th><th>Media</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $logo->id }}</td> <td> {{ $logo->nom }} </td><td> {{ $logo->alt }} </td><td> {{ $logo->media }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection