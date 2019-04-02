@extends('backLayout.app')
@section('title')
Role
@stop

@section('content')

    <h1>Role <a href="{{ url('role/create') }}" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus"></i></a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblrole">
            <thead>
                <tr>
                    <th>ID</th><th>Name</th><th>Description</th><<th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($role as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('role', $item->id) }}">{{ $item->name }}</a></td><td>{{ $item->description }}</td>
                    <td>
                        <a href="{{ url('role/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['role', $item->id],
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
        $('#tblrole').DataTable({
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
