@extends('backLayout.app')
@section('title')
Like
@stop

@section('breadcumb')
    Like
@stop
@section('content')

    <h1>Création Like</h1>
    <hr/>
 <div class="card-body card-block">
    {!! Form::open(['url' => 'like', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('like') ? 'has-error' : ''}}">
                {!! Form::label('like', 'Like: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('like', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('like', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('is_validated') ? 'has-error' : ''}}">
                {!! Form::label('is_validated', 'Is Validated: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('is_validated', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('is_validated', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('article') ? 'has-error' : ''}}">
                {!! Form::label('article', 'Article: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('article', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('article', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('auteur') ? 'has-error' : ''}}">
                {!! Form::label('auteur', 'Auteur: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('auteur', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('auteur', '<p class="help-block">:message</p>') !!}
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