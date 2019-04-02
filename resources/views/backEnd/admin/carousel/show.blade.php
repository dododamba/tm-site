@extends('backLayout.app')
@section('title')
Carousel
@stop

@section('content')

    <h1>Carousel</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Texte</th><th>Lien</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $carousel->id }}</td> <td> {{ $carousel->texte }} </td><td> {{ $carousel->lien }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection