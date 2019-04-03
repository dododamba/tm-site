<?php $__env->startSection('title'); ?>
    Gallery -Ajouter image
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    image détail
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

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/gallery/create.blade.php */ ?>