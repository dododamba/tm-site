@extends('backLayout.app')
@section('title')
Icon
@stop

@section('content')

    <h1>Icon</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Lien</th><th>Faicon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $icon->id }}</td> <td> {{ $icon->nom }} </td><td> {{ $icon->lien }} </td><td> {{ $icon->faicon }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection