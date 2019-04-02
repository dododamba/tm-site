@extends('backLayout.app')
@section('title')
Create new Log
@stop

@section('content')

    <h1>Create New Log</h1>
    <hr/>

    {!! Form::open(['url' => 'logs', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('action') ? 'has-error' : ''}}">
                {!! Form::label('action', 'Action: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('action', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('action', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('adresseIp') ? 'has-error' : ''}}">
                {!! Form::label('adresseIp', 'Adresseip: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('adresseIp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('adresseIp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('location') ? 'has-error' : ''}}">
                {!! Form::label('location', 'Location: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('location', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('location', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('utilisateur') ? 'has-error' : ''}}">
                {!! Form::label('utilisateur', 'Utilisateur: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('utilisateur', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('utilisateur', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
           


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection