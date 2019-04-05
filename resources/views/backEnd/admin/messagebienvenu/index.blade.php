@extends('backLayout.app')
@section('title')
Mot du CEO
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


    <h1>Mot du  CEO </h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmessagebienvenu">
            <thead>
                <tr>
                    <th>Message</th><th></th>
                </tr>
            </thead>
            <tbody>
            @foreach($messagebienvenu as $item)
                <tr>
                    <td><a href="{{ url('messagebienvenu', $item->id) }}">{{ $item->message }}</a></td>
                    <td>
                        <a href="{{ url('messagebienvenu/' . $item->id . '/edit') }}" class="btn btn-primary "><i class="fa fa-edit"></i></a>
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
        $('#tblmessagebienvenu').DataTable({
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