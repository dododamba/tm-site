@extends('backLayout.app')
@section('title')
    Création Carousel
@stop
@section('css')
    <style>

        hr {
            display: block;
            clear: both;
            height: 0;
            margin: 40px 0 80px;
            padding: 0;
            border: 0;
            font-family: arial;
            text-align: center;
            font-size: 60px;
            line-height: 1;
        }

        hr:after {
            content: "\273D \273D \273D";
            height: 0;
            letter-spacing: 1em;
            color: #aaa;
        }

        .file-upload {
            background-color: #ffffff;
            width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .file-upload-btn {
            width: 100%;
            margin: 0;
            color: #fff;
            background: #1FB264;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #15824B;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .file-upload-btn:hover {
            background: #1AA059;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .file-upload-btn:active {
            border: 0;
            transition: all .2s ease;
        }

        .file-upload-content {
            display: none;
            text-align: center;
        }

        .file-upload-input {
            position: absolute;
            margin: 0;
            padding: 0;
            width: 100%;
            height: 100%;
            outline: none;
            opacity: 0;
            cursor: pointer;
        }

        .image-upload-wrap {
            margin-top: 20px;
            border: 4px dashed #1FB264;
            position: relative;
        }

        .image-dropping,
        .image-upload-wrap:hover {
            background-color: #1FB264;
            border: 4px dashed #ffffff;
        }

        .image-title-wrap {
            padding: 0 15px 15px 15px;
            color: #222;
        }

        .drag-text {
            text-align: center;
        }

        .drag-text h3 {
            font-weight: 100;
            text-transform: uppercase;
            color: #15824B;
            padding: 60px 0;
        }

        .file-upload-image {
            max-height: 200px;
            max-width: 200px;
            margin: auto;
            padding: 20px;
        }

        .remove-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #cd4535;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #b02818;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }

        .store-image {
            width: 200px;
            margin: 0;
            color: #fff;
            background: #35cd8a;
            border: none;
            padding: 10px;
            border-radius: 4px;
            border-bottom: 4px solid #35cd8a;
            transition: all .2s ease;
            outline: none;
            text-transform: uppercase;
            font-weight: 700;
        }


        .remove-image:hover {
            background: #c13b2a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .remove-image:active {
            border: 0;
            transition: all .2s ease;
        }

        .store-image:hover {
            background: #35cd8a;
            color: #ffffff;
            transition: all .2s ease;
            cursor: pointer;
        }

        .store-image:active {
            border: 0;
            transition: all .2s ease;
        }

    </style>

@stop


@section('content')

    <h1>Nouveau Carousel</h1>



    <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <!-- Credit Card -->
                    <div id="pay-invoice">
                        <div class="card-body">

                            <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">

                              {{ csrf_field() }}

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
                                        </div>
                                    </div>
                                </div>
                            </div>
                                <div class="form-group">
                                    <label for="cc-payment" class="control-label mb-1">Lien</label>
                                    <input id="cc-pament" name="lien" type="text" class="form-control" aria-required="true">
                                </div>
                                    <div class="form-group has-success">
                                        <label for="cc-name" class="control-label mb-1">Texte</label>
                                        <textarea id="cc-name" name="texte"  class="form-control cc-name valid"></textarea>
                                        <span class="help-block field-validation-valid" data-valmsg-for="cc-name" data-valmsg-replace="true"></span>
                                    </div>

                                    <div class="form-group">
                                            <label for="cc-payment" class="control-label mb-1">Statut</label>

                                            <select name="statut" id="" class="form-control">
                                                <option value="0"  style="color: red">Inactive</option>
                                                <option value="1" style="color: green">Active</option>
                                            </select>

                                        </div>


                                    <div>
                                        <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block">
                                            <i class="fa fa-lock fa-lg"></i>&nbsp;
                                            <span id="payment-button-amount">Enregistrer</span>
                                        </button>
                                    </div>
                            </form>
                        </div>
                    </div>

                </div>
            </div> <!-- .card -->

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
    </script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

@endsection
