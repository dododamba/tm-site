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
                    <th>ID.</th> <th>Titre</th><th>Text</th><th>Image</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href="">{{ $apropos->id }}</a></td> <td><a href=""> {{ $apropos->titre }}</a> </td><td> {{ $apropos->text }} </td><td> {{ $apropos->image }} </td><td>
                        <a href=""><i class="fa fa-edit"></i></a></td>
                </tr>
            </tbody>    
        </table>
    </div>

@endsection