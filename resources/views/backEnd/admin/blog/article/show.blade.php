@extends('backLayout.app')
@section('title')
Article
@stop

@section('content')

    <h1>Article</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Titre</th><th>Contenu</th><th>Date Creation</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $article->id }}</td> <td> {{ $article->titre }} </td><td> {{ $article->contenu }} </td><td> {{ $article->date_creation }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection