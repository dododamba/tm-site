<?php $__env->startSection('title'); ?>
    Création Carousel
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
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
        .card {
            width: 380px;
            height: 200px;
            box-shadow: 0 27px 55px 0 rgba(0, 0, 0, .7), 0 17px 17px 0 rgba(0, 0, 0, .5);
            position: relative;
            -webkit-transform: rotate(0deg);
            -moz-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transform-origin: 100% 0%;
            -moz-transform-origin: 100% 0%;
            -ms-transform-origin: 100% 0%;
            transform-origin: 100% 0%;
            -webkit-transform-style: preserve-3d;
            -moz-transform-style: preserve-3d;
            transform-style: preserve-3d;
            transition: .8s ease-in-out;
        }

        .front, .back {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            -webkit-backface-visibility: hidden;
            -moz-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .front {
            display: -webkit-flex;
            display: flex;
            -webkit-justify-content: center;
            justify-content: center;
            -webkit-align-items: center;
            align-items: center;
            z-index: 2;
            -webkit-transform: rotateY(0deg);
            -moz-transform: rotateY(0deg);
            -ms-transform: rotateY(0deg);
            transform: rotateY(0deg);
        }

        .back {
            -webkit-transform: rotateY(-180deg);
            -moz-transform: rotateY(-180deg);
            -ms-transform: rotateY(-180deg);
            transform: rotateY(-180deg);
            font-family: 'Arimo', sans-serif;
        }

        .container:hover .card {
            -webkit-transform: rotateY(180deg) translateX(100%);
            -moz-transform: rotateY(180deg) translateX(100%);
            -ms-transform: rotateY(180deg) translateX(100%);
            transform: rotateY(180deg) translateX(100%);
            cursor: pointer;
        }

        .column {
            float: left;
            width: 33.33%;
            padding: 5px;
        }

        /* Clear floats after image containers */
        .row::after {
            content: "";
            clear: both;
            display: table;
        }
    </style>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h1>Nouveau Carousel</h1>
    <hr/>

    <?php echo Form::open(['url' => 'carousel', 'class' => 'form-horizontal']); ?>


    <div class="form-group">

        <div class="row">
            <?php echo Form::label('lien', 'Charger une image : ', ['class' => 'col-sm-3 control-label']); ?>

            <?php if(session()->has('image')): ?>
                <div class="col-sm-3">
                    <div class="column">
                        <img src="/<?php echo e(session()->get('image')); ?>" alt="" style="width:250px;height: 250px">
                        <a href="#DemoModal1" class="btn btn-lg btn-danger"
                           data-toggle="modal">Changer
                        </a>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-sm-3">
                    <a href="#DemoModal1" class="btn btn-lg btn-primary"
                       data-toggle="modal">depuis la gallery
                    </a>
                </div>
            <?php endif; ?>


            <div class="col-sm-3">
                <a href="#DemoModal2" class="btn btn-lg btn-primary"
                   data-toggle="modal">depuis votre periferique</a>
            </div>
        </div>


    </div>


    <div class="form-group <?php echo e($errors->has('texte') ? 'has-error' : ''); ?>">
        <?php echo Form::label('texte', 'Texte: ', ['class' => 'col-sm-3 control-label']); ?>

        <div class="col-sm-6">
            <?php echo Form::text('texte', null, ['class' => 'form-control']); ?>

            <?php echo $errors->first('texte', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>
    <div class="form-group <?php echo e($errors->has('lien') ? 'has-error' : ''); ?>">
        <?php echo Form::label('lien', 'Lien: ', ['class' => 'col-sm-3 control-label']); ?>

        <div class="col-sm-6">
            <?php echo Form::text('lien', null, ['class' => 'form-control']); ?>

            <?php echo $errors->first('lien', '<p class="help-block">:message</p>'); ?>

        </div>
    </div>

    <div class="form-group <?php echo e($errors->has('statut') ? 'has-error' : ''); ?>">
        <?php echo Form::label('statut', 'Statut: ', ['class' => 'col-sm-3 control-label']); ?>

        <div class="col-sm-6">
            <select name="statut" id="" class="form-control">
                <option value="0"  style="color: red">Inactive</option>
                <option value="1" style="color: green">Active</option>
            </select>

        </div>
    </div>

    <?php if(session()->has('image_key')): ?>
     <input type="hidden" value="<?php echo e(session()->get('image_key')); ?>" name="image">
    <?php endif; ?>




    <button type="submit" class="store-image">Enregistrer</button>

    <?php echo Form::close(); ?>




    <div id="DemoModal2" class="modal fade "> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                </div>

                <div class="modal-body"> <!-- modal body -->

                    <form action="<?php echo e(route('media.fromcarousel.store')); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo csrf_field(); ?>

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



    <div id="DemoModal1" class="modal fade "> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">


                <div class="modal-body"> <!-- modal body -->

                    <div class="col-md-12">
                        <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="column">
                                <img src="/<?php echo e($item->nom); ?>" alt="<?php echo e($item->alt); ?>" style="width:300px;height: 300px">
                                <a type="button" class="btn btn-success" href="<?php echo e(url('selectionner' , $item->id )); ?>"
                                   data-toggle="modal">Selectionner</a>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                    <?php echo e($medias->links()); ?>

                </div>


            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
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

<?php $__env->stopSection(); ?>


<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/backEnd/admin/carousel/create.blade.php */ ?>