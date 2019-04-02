<?php $__env->startSection('title'); ?>
Carousel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Carousel</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Texte</th><th>Lien</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($carousel->id); ?></td> <td> <?php echo e($carousel->texte); ?> </td><td> <?php echo e($carousel->lien); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/tmpsite/resources/views/backEnd/admin/carousel/show.blade.php */ ?>