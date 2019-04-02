<?php $__env->startSection('title'); ?>
Edit Log
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Edit Log</h1>
    <hr/>

    <?php echo Form::model($log, [
        'method' => 'PATCH',
        'url' => ['logs', $log->id],
        'class' => 'form-horizontal'
    ]); ?>


                <div class="form-group <?php echo e($errors->has('action') ? 'has-error' : ''); ?>">
                <?php echo Form::label('action', 'Action: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('action', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('action', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('adresseIp') ? 'has-error' : ''); ?>">
                <?php echo Form::label('adresseIp', 'Adresseip: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('adresseIp', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('adresseIp', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('location') ? 'has-error' : ''); ?>">
                <?php echo Form::label('location', 'Location: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('location', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('location', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('utilisateur') ? 'has-error' : ''); ?>">
                <?php echo Form::label('utilisateur', 'Utilisateur: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('utilisateur', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('utilisateur', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('description') ? 'has-error' : ''); ?>">
                <?php echo Form::label('description', 'Description: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::textarea('description', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('description', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            

    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <?php echo Form::submit('Update', ['class' => 'btn btn-primary form-control']); ?>

        </div>
    </div>
    <?php echo Form::close(); ?>


    <?php if($errors->any()): ?>
        <ul class="alert alert-danger">
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/backEnd/admin/logs/edit.blade.php */ ?>