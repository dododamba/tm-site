@extends('backLayout.app')
@section('title')
Like
@stop

@section('breadcumb')
    Like
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



    <h1>Like <a href="{{ url('like/create') }}" class="btn btn-primary pull-right">+</a></h1>
    <div class="table table-responsive">


        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>ID</th><th>Like</th><th>Is Validated</th><th>Article</th><th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($like as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('like', $item->id) }}">{{ $item->like }}</a></td><td>{{ $item->is_validated }}</td><td>{{ $item->article }}</td>
                    <td>
                        <a href="{{ url('like/' . $item->id . '/edit') }}" class="btn btn-primary"><i class="fa fa-edit"></i></a> 
                        <form method="DELETE" action="{{ url('like', $item->id') }}">
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
        $('#tbllike').DataTable({
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