@extends('backLayout.app')
@section('title')
    Gallery -detail image
@stop
@section('breadcumb')
    image détail
@stop
@section('css')
    <style>
    
        

    </style>

@stop

@section('content')


 
<div class="gallery_product filter hdpe">
    <img src="/{{ $media->nom }}" alt="{{  $media->alt }}" class="img-responsive">
    <a href="{{ route('media.show',$media->id) }}" class="btn btn-danger mb-1">
            Supprimer
    </a>
</div>




@endsection
