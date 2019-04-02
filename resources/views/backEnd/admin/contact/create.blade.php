@extends('backLayout.app')
@section('title')
Create new Contact
@stop

@section('content')

    <h1>Create New Contact</h1>
    <hr/>

    {!! Form::open(['url' => 'contact', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('adresse') ? 'has-error' : ''}}">
                {!! Form::label('adresse', 'Adresse: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('adresse', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('adresse', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telephone') ? 'has-error' : ''}}">
                {!! Form::label('telephone', 'Telephone: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('telephone', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telephone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
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