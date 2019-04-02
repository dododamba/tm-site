@extends('backLayout.app')
@section('title')
Edit Carouselcitation
@stop

@section('content')

    <h1>Edit Carouselcitation</h1>
    <hr/>

    {!! Form::model($carouselcitation, [
        'method' => 'PATCH',
        'url' => ['carouselcitation', $carouselcitation->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('texte') ? 'has-error' : ''}}">
                {!! Form::label('texte', 'Texte: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('texte', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('texte', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('auteur') ? 'has-error' : ''}}">
                {!! Form::label('auteur', 'Auteur: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('auteur', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('auteur', '<p class="help-block">:message</p>') !!}
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