<?php $__env->startSection('title'); ?>
Service
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Service</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Image</th><th>Icon</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($service->id); ?></td> <td> <?php echo e($service->nom); ?> </td><td> <?php echo e($service->image); ?> </td><td> <?php echo e($service->icon); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/service/show.blade.php */ ?>