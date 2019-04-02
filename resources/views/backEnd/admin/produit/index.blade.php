@extends('backLayout.app')
@section('title')
Produit
@stop

@section('content')

    <h1>Produit <a href="{{ url('produit/create') }}" class="btn btn-primary pull-right btn-sm">Add New Produit</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblproduit">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Image</th><th>Icon</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($produit as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('produit', $item->id) }}">{{ $item->nom }}</a></td><td>{{ $item->image }}</td><td>{{ $item->icon }}</td>
                    <td>
                        <a href="{{ url('produit/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs">Update</a> 
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['produit', $item->id],
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
        $('#tblproduit').DataTable({
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