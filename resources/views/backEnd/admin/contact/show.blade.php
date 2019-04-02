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
                    <th>ID.</th> <th>Adresse</th><th>Telephone</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $contact->id }}</td> <td> {{ $contact->adresse }} </td><td> {{ $contact->telephone }} </td><td> {{ $contact->email }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection