@extends('backLayout.app')
@section('title')
Produit
@stop

@section('content')

    <h1>Produit</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Image</th><th>Icon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $produit->id }}</td> <td> {{ $produit->nom }} </td><td> {{ $produit->image }} </td><td> {{ $produit->icon }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection