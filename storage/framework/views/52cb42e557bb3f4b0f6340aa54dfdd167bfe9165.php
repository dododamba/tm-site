<?php $__env->startSection('title'); ?>
Service
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Service <a href="<?php echo e(url('service/create')); ?>" class="btn btn-primary pull-right btn-sm">Add New Service</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblservice">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Image</th><th>Icon</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $service; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('service', $item->id)); ?>"><?php echo e($item->nom); ?></a></td><td><?php echo e($item->image); ?></td><td><?php echo e($item->icon); ?></td>
                    <td>
                        <a href="<?php echo e(url('service/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a> 
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['service', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Delete', ['class' => 'btn btn-danger btn-xs']); ?>

                        <?php echo Form::close(); ?>

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
        $('#tblservice').DataTable({
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
<?php /* /home/devtools/PHP/tmpsite/resources/views/backEnd/admin/service/index.blade.php */ ?>