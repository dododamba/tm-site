<?php $__env->startSection('title'); ?>
Mot du CEO
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Mot du  CEO </h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblmessagebienvenu">
            <thead>
                <tr>
                    <th>Message</th><th></th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $messagebienvenu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="<?php echo e(url('messagebienvenu', $item->id)); ?>"><?php echo e($item->message); ?></a></td>
                    <td>
                        <a href="<?php echo e(url('messagebienvenu/' . $item->id . '/edit')); ?>" class="btn btn-primary "><i class="fa fa-edit"></i></a>
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
        $('#tblmessagebienvenu').DataTable({
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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/messagebienvenu/index.blade.php */ ?>