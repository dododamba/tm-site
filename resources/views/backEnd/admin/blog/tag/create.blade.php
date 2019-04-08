@extends('backLayout.app')
@section('title')
Tag
@stop

@section('breadcumb')
    Tag
@stop
@section('content')

    <h1>Création Tag</h1>
    <hr/>
 <div class="card-body card-block">
    {!! Form::open(['url' => 'tag', 'class' => 'form-horizontal']) !!}

                <div class="form-group {{ $errors->has('nom') ? 'has-error' : ''}}">
                {!! Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']) !!}
                <div class="col-sm-6">
                    {!! Form::text('nom', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nom', '<p class="help-block">:message</p>') !!}
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