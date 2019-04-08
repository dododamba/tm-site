@extends('backLayout.app')
@section('title')
Article
@stop

@section('breadcumb')
    Article
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



    <h1>Article <a href="{{ url('article/create') }}" class="btn btn-primary pull-right">+</a></h1>
    <div class="table table-responsive">


        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Titre</th><th>Contenu</th><th>Date Creation</th><th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($article as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('article', $item->id) }}">{{ $item->titre }}</a></td><td>{{ $item->contenu }}</td><td>{{ $item->date_creation }}</td>
                    <td>
                        <a href="{{ url('article/' . $item->id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
                        <form method="DELETE" action="{{ url('article', $item->id') }}">
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
        $('#tblarticle').DataTable({
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