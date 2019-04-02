@extends('backLayout.app')
@section('title')
Create new Coordonee
@stop

@section('content')

    <h1>Create New Coordonee</h1>
    <hr/>

    {!! Form::open(['url' => 'coordonee', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('altitude') ? 'has-error' : ''}}">
                {!! Form::label('altitude', 'Altitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('altitude', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('altitude', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('longitude') ? 'has-error' : ''}}">
                {!! Form::label('longitude', 'Longitude: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('longitude', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('longitude', '<p class="help-block">:message</p>') !!}
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