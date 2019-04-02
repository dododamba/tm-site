@extends('backLayout.app')
@section('title')
Apropo
@stop

@section('content')

    <h1>Apropo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Titre</th><th>Text</th><th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $apropo->id }}</td> <td> {{ $apropo->titre }} </td><td> {{ $apropo->text }} </td><td> {{ $apropo->image }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection