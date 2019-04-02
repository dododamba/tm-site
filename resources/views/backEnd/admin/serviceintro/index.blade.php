@extends('backLayout.app')
@section('title')
Serviceintro
@stop

@section('content')

    <h1>Serviceintro <a href="{{ url('serviceintro/create') }}" class="btn btn-primary pull-right btn-sm">Add New Serviceintro</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblserviceintro">
            <thead>
                <tr>
                    <th>ID</th><th>Texte</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($serviceintro as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('serviceintro', $item->id) }}">{{ $item->texte }}</a></td>
                    <td>
                        <a href="{{ url('serviceintro/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['serviceintro', $item->id],
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
        $('#tblserviceintro').DataTable({
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