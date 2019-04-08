@extends('backLayout.app')
@section('title')
Commentaire
@stop

@section('content')

    <h1>Commentaire</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Contenu</th><th>User</th><th>Article</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $commentaire->id }}</td> <td> {{ $commentaire->contenu }} </td><td> {{ $commentaire->user }} </td><td> {{ $commentaire->article }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection