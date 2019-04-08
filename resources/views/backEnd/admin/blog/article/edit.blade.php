@extends('backLayout.app')
@section('title')
Article
@stop

@section('breadcumb')
    Article
@stop
@section('content')

    <h1>Edition Article</h1>
    <hr/>

   <div class="card-body card-block">

    {!! Form::model($article, [
        'method' => 'PATCH',
        'url' => ['article', $article->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('titre') ? 'has-error' : ''}}">
                {!! Form::label('titre', 'Titre: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('titre', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('titre', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('contenu') ? 'has-error' : ''}}">
                {!! Form::label('contenu', 'Contenu: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('contenu', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('contenu', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('date_creation') ? 'has-error' : ''}}">
                {!! Form::label('date_creation', 'Date Creation: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::date('date_creation', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('date_creation', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('categorie') ? 'has-error' : ''}}">
                {!! Form::label('categorie', 'Categorie: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::number('categorie', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('categorie', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('brouillon') ? 'has-error' : ''}}">
                {!! Form::label('brouillon', 'Brouillon: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                                <div class="checkbox">
                <label>{!! Form::radio('brouillon', '1') !!} Yes</label>
            </div>
            <div class="checkbox">
                <label>{!! Form::radio('brouillon', '0', true) !!} No</label>
            </div>
                    {!! $errors->first('brouillon', '<p class="help-block">:message</p>') !!}
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
            {!! Form::submit('Mettre à Jours', ['class' => 'btn btn-primary form-control']) !!}
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