<?php $__env->startSection('title'); ?>
Coordonee
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Coordonees <a href="<?php echo e(url('coordonee/create')); ?>" class="btn btn-primary pull-right btn-sm">+</a></h1>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcoordonees">
            <thead>
                <tr>
                    <th>ID</th><th>Nom</th><th>Altitude</th><th>Longitude</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $coordonees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('coordonee', $item->id)); ?>"><?php echo e($item->nom); ?></a></td><td><?php echo e($item->altitude); ?></td><td><?php echo e($item->longitude); ?></td>
                    <td>
                        <a href="<?php echo e(url('coordonee/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs">MàJ</a>
                        <?php echo Form::open([
                            'method'=>'DELETE',
                            'url' => ['coordonee', $item->id],
                            'style' => 'display:inline'
                        ]); ?>

                            <?php echo Form::submit('Effacer', ['class' => 'btn btn-danger btn-xs']); ?>

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
        $('#tblcoordonees').DataTable({
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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/coordonees/index.blade.php */ ?>