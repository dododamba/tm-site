@extends('backLayout.app')
@section('title')
Carousel
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


    <h1>Carousel <a href=" {{ route('carousel.create') }}"  class="btn btn-primary pull-right btn-sm"  >+</a></h1>




     <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcarousel">
            <thead>
                <tr>
                    <th>ID</th><th>Texte</th><th>Lien</th><th>Statut</th> <th>Image</th> <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            @foreach($carousel as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td><a href="{{ url('carousel', $item->id) }}">{{ $item->texte }}</a></td><td>{{ $item->lien }}</td>
                    <td>
                      @if($item->statut == 0)
                        <a href="#" class="btn btn-danger">Inactive</a>
                      @else
                         <a href="#" class="btn btn-success">Active</a>
                      @endif
                    </td> <td><img src="/{{ $item->image->nom }}" alt="{{ $item->image }}" style="height: 50px;width: 50px;"></td>
                    <td>
                        <a href="{{ url('carousel/' . $item->id . '/edit') }}" class="btn btn-primary btn-xs" >Mise à jours</a>

                        <a data-toggle="modal" data-target="#exampleModal" class=" btn btn-danger btn-xs" data-id="{{ $item->id }}">Suppr.</a>
                        @include('backEnd.admin.carousel._delete')
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>




@endsection

@section('javascript')
    <script>


        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                removeUpload() {
                    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                    $('.file-upload-content').hide();
                    $('.image-upload-wrap').show();
                }

                $('.image-upload-wrap').bind('dragover', function () {
                    $('.image-upload-wrap').addClass('image-dropping');
                });
                $('.image-upload-wrap').bind('dragleave', function () {
                    $('.image-upload-wrap').removeClass('image-dropping');
                });
    </script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

@endsection
