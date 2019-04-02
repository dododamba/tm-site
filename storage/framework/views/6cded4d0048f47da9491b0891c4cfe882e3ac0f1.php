<?php $__env->startSection('title'); ?>
Log
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tbllogs">
            <thead>
                <tr>
                    <th>ID</th><th>Action</th> <th>Détail</th> <th>AdresseIp</th><th>Location</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $logs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('logs', $item->id)); ?>"><?php echo e($item->action); ?></a></td> <td><?php echo e($item->description); ?></td> <td><?php echo e($item->adresseIp); ?></td><td><?php echo e($item->location); ?></td>
                    <td>
                        <a href="<?php echo e(url('logs/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['logs', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                        <?php echo Form::close(); ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>

        <?php echo e($logs->links()); ?>


    </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script type="text/javascript">
    $(document).ready(function(){
        $('#tbllogs').DataTable({
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
<?php /* /home/devtools/PHP/tmpsite/resources/views/backEnd/admin/logs/index.blade.php */ ?>