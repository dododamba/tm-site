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

  

    <hr>




            <div class="row">
           
            <br/>
    
    
            <?php $__currentLoopData = $medias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="/<?php echo e($item->nom); ?>" alt="" class="img-responsive">
                    <a href="<?php echo e(route('media.show',$item->id)); ?>" class="btn btn-secondary mb-1">
                            Voir
                    </a>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>





<?php $__env->stopSection(); ?>
<?php $__env->startSection('javascript'); ?>
    <script>

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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/medias/index.blade.php */ ?>