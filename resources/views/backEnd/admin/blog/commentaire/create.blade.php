@extends('backLayout.app')
@section('title')
Commentaire
@stop

@section('breadcumb')
    Commentaire
@stop
@section('content')

    <h1>Création Commentaire</h1>
    <hr/>
 <div class="card-body card-block">
    {!! Form::open(['url' => 'commentaire', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('contenu') ? 'has-error' : ''}}">
                {!! Form::label('contenu', 'Contenu: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('contenu', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contenu', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('user') ? 'has-error' : ''}}">
                {!! Form::label('user', 'User: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('user', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('user', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('article') ? 'has-error' : ''}}">
                {!! Form::label('article', 'Article: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('article', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('article', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Enregistrer', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>
    @if ($errors->any())
        <ul class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

@endsection