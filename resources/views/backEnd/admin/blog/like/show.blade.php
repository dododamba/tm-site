@extends('backLayout.app')
@section('title')
Like
@stop

@section('content')

    <h1>Like</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Like</th><th>Is Validated</th><th>Article</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $like->id }}</td> <td> {{ $like->like }} </td><td> {{ $like->is_validated }} </td><td> {{ $like->article }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection