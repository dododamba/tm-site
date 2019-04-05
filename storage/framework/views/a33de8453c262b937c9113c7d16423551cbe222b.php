<?php $__env->startSection('title'); ?>
Apropo
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    A propo
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

    <h1>Apropos <a href="<?php echo e(url('apropos/create')); ?>" class="btn btn-primary pull-right btn-sm">Créer un autre texte Apropo</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblapropos">
            <thead>
                <tr>
                    <th>ID</th><th>Titre</th><th>Text</th><th>Image</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $apropos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('apropos', $item->id)); ?>"><?php echo e($item->titre); ?></a></td><td><?php echo e($item->text); ?></td><td><?php echo e($item->image); ?></td>
                    <td>
                        <a href="<?php echo e(url('apropos/' . $item->id . '/edit')); ?>" class="btn btn-primary "><i class="fa fa-edit"> </i></a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tblapropos').DataTable({
            columnDefs: [{
                targets: [0],
                visible: false,
                searchable: false
                },
            ],
            order: [[0, "asc"]],
        });
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/apropos/index.blade.php */ ?>