@extends('backLayout.app')
@section('title')
Carousel citation
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


    <h1>Carouselcitation <a href="{{ url('citation/create') }}" class="btn btn-primary pull-right btn-sm">Add New Carouselcitation</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcarouselcitation">
            <thead>
                <tr>
                    <th>ID</th><th>Texte</th><th>Auteur</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($carouselcitation as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('carouselcitation', $item->id) }}">{{ $item->texte }}</a></td><td>{{ $item->auteur }}</td>
                    <td>
                        <a href="{{ url('carouselcitation/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['carouselcitation', $item->id],
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
        $('#tblcarouselcitation').DataTable({
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