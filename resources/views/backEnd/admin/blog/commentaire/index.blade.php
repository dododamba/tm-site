@extends('backLayout.app')
@section('title')
Commentaire
@stop

@section('breadcumb')
    Commentaire
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



    <h1>Commentaire <a href="{{ url('commentaire/create') }}" class="btn btn-primary pull-right">+</a></h1>
    <div class="table table-responsive">


        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Contenu</th><th>User</th><th>Article</th><th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($commentaire as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('commentaire', $item->id) }}">{{ $item->contenu }}</a></td><td>{{ $item->user }}</td><td>{{ $item->article }}</td>
                    <td>
                        <a href="{{ url('commentaire/' . $item->id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
                        <form method="DELETE" action="{{ url('commentaire', $item->id') }}">
                           {{ csrf_field() }}
                           <input type="hidden" name="{{ $item->id }}" />
                          <button class="btn btn-primary"> <i class="fa fa-trash"></i> </button>
                        </form>
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
        $('#tblcommentaire').DataTable({
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