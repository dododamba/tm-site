@extends('backLayout.app')
@section('title')
Serviceintro
@stop

@section('content')

    <h1>Serviceintro</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Texte</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $serviceintro->id }}</td> <td> {{ $serviceintro->texte }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection