<?php $__env->startSection('title'); ?>
Icon
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<?php if(session()->has('success')): ?>
<?php echo $__env->make('alert.alert_success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissable">
    <?php echo $__env->make('alert.alert_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php endif; ?>


<?php if(session()->has('success')): ?>
    <?php echo $__env->make('alert.alert_success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php if(session()->has('error')): ?>
    <div class="alert alert-danger alert-dismissable">
        <?php echo $__env->make('alert.alert_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
<?php endif; ?>


<h1>Icon <a href="<?php echo e(url('icon/create')); ?>" class="btn btn-primary pull-right btn-sm">+</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblicon">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Lien</th><th>Faicon</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $icon; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('icon', $item->id)); ?>"><?php echo e($item->nom); ?></a></td><td><?php echo e($item->lien); ?></td><td><?php echo e($item->faicon); ?></td>
                    <td>
                        <a href="<?php echo e(url('icon/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">Update</a> 
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['icon', $item->id],
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
        $('#tblicon').DataTable({
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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/icon/index.blade.php */ ?>