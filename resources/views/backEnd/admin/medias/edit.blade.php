@extends('backLayout.app')
@section('title')
Edit Media
@stop

@section('content')

    <h1>Edit Media</h1>
    <hr/>

    {!! Form::model($media, [
        'method' => 'PATCH',
        'url' => ['medias', $media->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('description') ? 'has-error' : ''}}">
                {!! Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('alt') ? 'has-error' : ''}}">
                {!! Form::label('alt', 'Alt: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('alt', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('alt', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('entreprise') ? 'has-error' : ''}}">
                {!! Form::label('entreprise', 'Entreprise: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('entreprise', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('entreprise', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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
