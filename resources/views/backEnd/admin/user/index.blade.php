@extends('backLayout.app')
@section('title')
User
@stop

@section('content')

    <h1>User <a href="{{ url('user/create') }}" class="btn btn-primary pull-right btn-sm"><i class="fa fa-plus"></i></a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbluser">
            <thead>
                <tr>
                    <th>ID</th><th>First Name</th><th>Middle Name</th><th>Last Name</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($user as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('user', $item->id) }}">{{ $item->first_name }}</a></td><td>{{ $item->middle_name }}</td><td>{{ $item->last_name }}</td>
                    <td>
                        <a href="{{ url('user/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['user', $item->id],
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
        $('#tbluser').DataTable({
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
