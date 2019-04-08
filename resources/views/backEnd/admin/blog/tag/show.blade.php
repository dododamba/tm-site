@extends('backLayout.app')
@section('title')
Tag
@stop

@section('content')

    <h1>Tag</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $tag->id }}</td> <td> {{ $tag->nom }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection