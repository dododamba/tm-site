<?php $__env->startSection('title'); ?>
    Gallery
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    Gallery
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




    <h1>
        <div class="DemoModal2">
            <a href=" <?php echo e(route('media.create')); ?>" class="btn btn-lg btn-primary"
               >Ajouter une image </a>
        </div>
    </h1>


    <?php if(session()->has('success')): ?>
        <?php echo $__env->make('alert.alert_success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php endif; ?>
    <?php if(session()->has('error')): ?>
        <div class="alert alert-danger alert-dismissable">
            <?php echo $__env->make('alert.alert_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
    <?php endif; ?>

    <div id="DemoModal2" class="modal fade "> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                </div>

                <div class="modal-body"> <!-- modal body -->

                    <form action="<?php echo e(route('media.store')); ?>" method="POST" enctype="multipart/form-data">
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

    <hr>




    <div class="container">
            <div class="row">
           
            <br/>
    
    
            <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="<?php echo e($item->nom); ?>" alt="<?php echo e($item->alt); ?>" class="img-responsive">
                    <a href="<?php echo e(route('media.show',$item->id)); ?>" class="btn btn-secondary mb-1">
                            Voir
                    </a>


                    <div class="modal fade" id="mediumModal<?php echo e($item->id); ?>" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="mediumModalLabel">Image</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                            <img src="<?php echo e($item->nom); ?>" alt="<?php echo e($item->alt); ?>" class="img-responsive">
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-primary">Supprimer</button>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                      
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/gallery/index.blade.php */ ?>