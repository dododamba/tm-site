<?php $__env->startSection('title'); ?>
Apropo
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Apropo</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Titre</th><th>Text</th><th>Image</th><th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><a href=""><?php echo e($apropos->id); ?></a></td> <td><a href=""> <?php echo e($apropos->titre); ?></a> </td><td> <?php echo e($apropos->text); ?> </td><td> <?php echo e($apropos->image); ?> </td><td>
                        <a href=""><i class="fa fa-edit"></i></a></td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/apropos/show.blade.php */ ?>