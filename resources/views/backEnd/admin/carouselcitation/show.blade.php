@extends('backLayout.app')
@section('title')
Carouselcitation
@stop

@section('content')

    <h1>Carouselcitation</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Texte</th><th>Auteur</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $carouselcitation->id }}</td> <td> {{ $carouselcitation->texte }} </td><td> {{ $carouselcitation->auteur }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection