<?php $__env->startSection('title'); ?>
Edit Carousel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Edit Carousel</h1>
    <hr/>

    <?php echo Form::model($carousel, [
        'method' => 'PATCH',
        'url' => ['carousel', $carousel->id],
        'class' => 'form-horizontal'
    ]); ?>


                <div class="form-group <?php echo e($errors->has('texte') ? 'has-error' : ''); ?>">
                <?php echo Form::label('texte', 'Texte: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('texte', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('texte', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('lien') ? 'has-error' : ''); ?>">
                <?php echo Form::label('lien', 'Lien: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('lien', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('lien', '<p class="help-block">:message</p>'); ?>

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
<?php /* /home/devtools/PHP/tmpsite/resources/views/backEnd/admin/carousel/edit.blade.php */ ?>