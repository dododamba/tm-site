@extends('backLayout.app')
@section('title')
Contact
@stop

@section('content')


    @if(session()->has('success'))
        @include('alert.alert_success')
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissable">
            @include('alert.alert_error')
        </div>
    @endif


    <h1>Messages </h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcontact">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Email</th><th>Sujet</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($contact as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('messagecontact', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->email }}</td><td>{{ $item->sujet }}</td>
                    <td>
                        {!! Form::open([
                            'method'=>'Effacer',
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