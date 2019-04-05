<?php $__env->startSection('title'); ?>
Coordonee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Coordonee</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Nom</th><th>Altitude</th><th>Longitude</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($coordonee->id); ?></td> <td> <?php echo e($coordonee->nom); ?> </td><td> <?php echo e($coordonee->altitude); ?> </td><td> <?php echo e($coordonee->longitude); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/coordonees/show.blade.php */ ?>