@extends('backLayout.app')
@section('title')
Apropo
@stop
@section('breadcumb')
    A propo
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


    <h1>Apropos <a href="{{ url('apropos/create') }}" class="btn btn-primary pull-right btn-sm">Créer un autre texte Apropo</a></h1>
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
                        <a href="{{ url('apropos/' . $item->id . '/edit') }}" class="btn btn-primary "><i class="fa fa-edit"> </i></a>
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