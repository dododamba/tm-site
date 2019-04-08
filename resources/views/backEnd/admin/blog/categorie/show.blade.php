@extends('backLayout.app')
@section('title')
Categorie
@stop

@section('content')

    <h1>Categorie</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $categorie->id }}</td> <td> {{ $categorie->nom }} </td><td> {{ $categorie->description }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection