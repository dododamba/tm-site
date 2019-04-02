@extends('backLayout.app')
@section('title')
Coordonee
@stop

@section('content')

    <h1>Coordonees <a href="{{ url('coordonee/create') }}" class="btn btn-primary pull-right btn-sm">+</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcoordonees">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Altitude</th><th>Longitude</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($coordonees as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('coordonee', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->altitude }}</td><td>{{ $item->longitude }}</td>
                    <td>
                        <a href="{{ url('coordonee/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">MàJ</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['coordonee', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']) !!}
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

@endsection

@section('scripts')
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblcoordonees').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
@endsection