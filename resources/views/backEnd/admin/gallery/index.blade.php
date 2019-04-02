@extends('backLayout.app')
@section('title')
    Gallery
@stop
@section('breadcumb')
    Gallery
@stop
@section('css')
    <style>
        .gallery-title
        {
            font-size: 36px;
            color: #42B32F;
            text-align: center;
            font-weight: 500;
            margin-bottom: 70px;
        }
        .gallery-title:after {
            content: "";
            position: absolute;
            width: 7.5%;
            left: 46.5%;
            height: 45px;
            border-bottom: 1px solid #5e5e5e;
        }
        .filter-button
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #42B32F;
            margin-bottom: 30px;
        
        }
        .filter-button:hover
        {
            font-size: 18px;
            border: 1px solid #42B32F;
            border-radius: 5px;
            text-align: center;
            color: #ffffff;
            background-color: #42B32F;
        
        }
        .btn-default:active .filter-button:active
        {
            background-color: #42B32F;
            color: white;
        }
        
        .port-image
        {
            width: 100%;
        }
        
        .gallery_product
        {
            margin-bottom: 30px;
        }
        

    </style>

@stop

@section('content')




    <h1>
        <div class="DemoModal2">
            <a href="#DemoModal2" class="btn btn-lg btn-primary"
               data-toggle="modal">Ajouter une image </a>
        </div>
    </h1>


    @if(session()->has('success'))
        @include('alert.alert_success')
    @endif
    @if(session()->has('error'))
        <div class="alert alert-danger alert-dismissable">
            @include('alert.alert_error')
        </div>
    @endif

    <div id="DemoModal2" class="modal fade "> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                </div>

                <div class="modal-body"> <!-- modal body -->

                    <form action="{{route('media.store')}}" method="POST" enctype="multipart/form-data">
                        {!! csrf_field() !!}
                        <div class="file-upload">
                            <button class="file-upload-btn" type="button"
                                    onclick="$('.file-upload-input').trigger( 'click' )">Ajouter une image
                            </button>

                            <div class="image-upload-wrap">
                                <input class="file-upload-input" type='file' onchange="readURL(this);"
                                       accept="image/*" name="media"/>
                                <div class="drag-text">
                                    <h3>Glissez et Deposez ou Cliquez ici pour selection une image</h3>
                                </div>
                            </div>
                            <div class="file-upload-content">
                                <img class="file-upload-image" src="#" alt="your image"/>
                                <div class="image-title-wrap">
                                    <div class="row">
                                        <button type="button" onclick="removeUpload()" class="remove-image">Changer
                                            <span
                                                    class="image-title">Image chargée</span></button>

                                        <button type="submit" class="store-image">Enregistrer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>


            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div>

    <hr>




    <div class="container">
            <div class="row">
           
            <br/>
    
    
            @foreach($medias as $item)
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="{{ $item->nom }}" alt="{{  $item->alt }}" class="img-responsive">
                    <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#mediumModal{{ $item->id }}">
                            Voir
                    </button>


                    <div class="modal fade" id="mediumModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Image</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <img src="{{ $item->nom }}" alt="{{  $item->alt }}" class="img-responsive">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                      
                </div>
                @endforeach

            </div>
        </div>





@endsection
@section('javascript')
    <script>

        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function(e) {
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

        function removeUpload() {
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


        $(document).ready(function(){

            $(".filter-button").click(function(){
                var value = $(this).attr('data-filter');
                
                if(value == "all")
                {
                    //$('.filter').removeClass('hidden');
                    $('.filter').show('1000');
                }
                else
                {
        //            $('.filter[filter-item="'+value+'"]').removeClass('hidden');
        //            $(".filter").not('.filter[filter-item="'+value+'"]').addClass('hidden');
                    $(".filter").not('.'+value).hide('3000');
                    $('.filter').filter('.'+value).show('3000');
                    
                }
            });
            
            if ($(".filter-button").removeClass("active")) {
        $(this).removeClass("active");
        }
        $(this).addClass("active");
        
        });
    </script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

@endsection
