@extends('backLayout.app')
@section('title')
Edit Carousel
@stop

@section('content')

    <h1>Edit Carousel</h1>
    <hr/>

    {!! Form::model($carousel, [
        'method' => 'PATCH',
        'url' => ['carousel', $carousel->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('texte') ? 'has-error' : ''}}">
                {!! Form::label('texte', 'Texte: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('texte', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('texte', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lien') ? 'has-error' : ''}}">
                {!! Form::label('lien', 'Lien: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('lien', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lien', '<p class="help-block">:message</p>') !!}
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