@extends('backLayout.app')
@section('title')
Edit Apropo
@stop

@section('content')

    <h1>Edit Apropo</h1>
    <hr/>

    {!! Form::model($apropos, [
        'method' => 'PATCH',
        'url' => ['apropos', $apropos->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
                {!! Form::label('titre', 'Titre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('titre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('text') ? 'has-error' : ''}}">
                {!! Form::label('text', 'Text: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('text', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('text', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('image') ? 'has-error' : ''}}">
                {!! Form::label('image', 'Image: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('image', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('texte') ? 'has-error' : ''}}">
                {!! Form::label('texte', 'Texte: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('texte', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('texte', '<p class="help-block">:message</p>') !!}
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