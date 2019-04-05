@extends('backLayout.app')
@section('title')
Icon
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


@if(session()->has('success'))
    @include('alert.alert_success')
@endif
@if(session()->has('error'))
    <div class="alert alert-danger alert-dismissable">
        @include('alert.alert_error')
    </div>
@endif


<h1>Icon <a href="{{ url('icon/create') }}" class="btn btn-primary pull-right btn-sm">+</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblicon">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Lien</th><th>Faicon</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($icon as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('icon', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->lien }}</td><td>{{ $item->faicon }}</td>
                    <td>
                        <a href="{{ url('icon/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['icon', $item->id],
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
        $('#tblicon').DataTable({
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