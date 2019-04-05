@extends('backLayout.app')
@section('title')
Edit Messagebienvenu
@stop

@section('content')

    <h1>Edition mot du CEO </h1>
    <hr/>

    <div class="card-body card-block">
    {!! Form::model($messagebienvenu, [
        'method' => 'PATCH',
        'url' => ['messagebienvenu', $messagebienvenu->id],
        'class' => 'form-horizontal'
    ]) !!}

                <div class="form-group {{ $errors->has('message') ? 'has-error' : ''}}">
                {!! Form::label('message', 'Message: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('message', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
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