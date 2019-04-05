<?php $__env->startSection('title'); ?>
Messagebienvenu
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Messagebienvenu</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Message</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($messagebienvenu->id); ?></td> <td> <?php echo e($messagebienvenu->message); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/messagebienvenu/show.blade.php */ ?>