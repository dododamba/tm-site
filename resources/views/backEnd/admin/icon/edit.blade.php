@extends('backLayout.app')
@section('title')
Edit Icon
@stop

@section('content')

    <h1>Edit Icon</h1>
    <hr/>

    {!! Form::model($icon, [
        'method' => 'PATCH',
        'url' => ['icon', $icon->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('lien') ? 'has-error' : ''}}">
                {!! Form::label('lien', 'Lien: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('lien', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('lien', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('faicon') ? 'has-error' : ''}}">
                {!! Form::label('faicon', 'Faicon: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('faicon', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('faicon', '<p class="help-block">:message</p>') !!}
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