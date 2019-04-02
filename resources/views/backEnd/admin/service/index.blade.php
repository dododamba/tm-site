@extends('backLayout.app')
@section('title')
Service
@stop

@section('content')

    <h1>Service <a href="{{ url('service/create') }}" class="btn btn-primary pull-right btn-sm">Add New Service</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblservice">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Image</th><th>Icon</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($service as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('service', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->image }}</td><td>{{ $item->icon }}</td>
                    <td>
                        <a href="{{ url('service/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['service', $item->id],
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
        $('#tblservice').DataTable({
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