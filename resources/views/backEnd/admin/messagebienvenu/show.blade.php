@extends('backLayout.app')
@section('title')
Messagebienvenu
@stop

@section('content')

    <h1>Messagebienvenu</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $messagebienvenu->id }}</td> <td> {{ $messagebienvenu->message }} </td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection