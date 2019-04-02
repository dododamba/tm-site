<?php $__env->startSection('title'); ?>
Apropo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Apropo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Titre</th><th>Text</th><th>Image</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($apropo->id); ?></td> <td> <?php echo e($apropo->titre); ?> </td><td> <?php echo e($apropo->text); ?> </td><td> <?php echo e($apropo->image); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/backEnd/admin/apropos/show.blade.php */ ?>