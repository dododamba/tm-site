@extends('backLayout.app')
@section('title')
Contact
@stop

@section('content')

    <h1>Contact</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Email</th><th>Sujet</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $contact->id }}</td> <td> {{ $contact->nom }} </td><td> {{ $contact->email }} </td><td> {{ $contact->sujet }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection