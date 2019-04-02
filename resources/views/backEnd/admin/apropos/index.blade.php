@extends('backLayout.app')
@section('title')
Apropo
@stop

@section('content')

    <h1>Apropos <a href="{{ url('apropos/create') }}" class="btn btn-primary pull-right btn-sm">Add New Apropo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblapropos">
            <thead>
                <tr>
                    <th>ID</th><th>Titre</th><th>Text</th><th>Image</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($apropos as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('apropos', $item->id) }}">{{ $item->titre }}</a></td><td>{{ $item->text }}</td><td>{{ $item->image }}</td>
                    <td>
                        <a href="{{ url('apropos/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['apropos', $item->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']) !!}
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
        $('#tblapropos').DataTable({
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