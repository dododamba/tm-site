<?php $__env->startSection('title'); ?>
Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Contact</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>ID.</th> <th>Adresse</th><th>Telephone</th><th>Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo e($contact->id); ?></td> <td> <?php echo e($contact->adresse); ?> </td><td> <?php echo e($contact->telephone); ?> </td><td> <?php echo e($contact->email); ?> </td>
                </tr>
            </tbody>    
        </table>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/contact/show.blade.php */ ?>