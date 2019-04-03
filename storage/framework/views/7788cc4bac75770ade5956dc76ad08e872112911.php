<?php $__env->startSection('title'); ?>
    Gallery -detail image
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    image détail
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
    <style>
    
        

    </style>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


 
<div class="gallery_product filter hdpe">
    <img src="/<?php echo e($media->nom); ?>" alt="<?php echo e($media->alt); ?>" class="img-responsive">
    <a href="<?php echo e(route('media.show',$media->id)); ?>" class="btn btn-danger mb-1">
            Supprimer
    </a>
</div>




<?php $__env->stopSection(); ?>

<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/gallery/show.blade.php */ ?>