@extends('backLayout.app')
@section('title')
Contact
@stop

@section('content')

    <h1>Contact <a href="{{ url('contact/create') }}" class="btn btn-primary pull-right btn-sm">Add New Contact</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcontact">
            <thead>
                <tr>
                    <th>ID</th><th>Adresse</th><th>Telephone</th><th>Email</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contact as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('contact', $item->id) }}">{{ $item->adresse }}</a></td><td>{{ $item->telephone }}</td><td>{{ $item->email }}</td>
                    <td>
                        <a href="{{ url('contact/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['contact', $item->id],
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
        $('#tblcontact').DataTable({
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