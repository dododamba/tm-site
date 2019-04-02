@extends('backLayout.app')
@section('title')
Media
@stop

@section('content')

    <h1>Medias <a href="{{ url('medias/create') }}" class="btn btn-primary pull-right btn-sm">Add New Media</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmedias">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Description</th><th>Alt</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($medias as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('medias', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->description }}</td><td>{{ $item->alt }}</td>
                    <td>
                        <a href="{{ url('medias/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['medias', $item->id],
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
        $('#tblmedias').DataTable({
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
