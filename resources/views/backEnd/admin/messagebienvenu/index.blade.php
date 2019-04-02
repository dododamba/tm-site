@extends('backLayout.app')
@section('title')
Messagebienvenu
@stop

@section('content')

    <h1>Messagebienvenu <a href="{{ url('messagebienvenu/create') }}" class="btn btn-primary pull-right btn-sm">Add New Messagebienvenu</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmessagebienvenu">
            <thead>
                <tr>
                    <th>ID</th><th>Message</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($messagebienvenu as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('messagebienvenu', $item->id) }}">{{ $item->message }}</a></td>
                    <td>
                        <a href="{{ url('messagebienvenu/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['messagebienvenu', $item->id],
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
        $('#tblmessagebienvenu').DataTable({
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