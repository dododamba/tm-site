<?php $__env->startSection('title'); ?>
Create new Produit
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Create New Produit</h1>
    <hr/>

    <?php echo Form::open(['url' => 'produit', 'class' => 'form-horizontal']); ?>


                <div class="form-group <?php echo e($errors->has('nom') ? 'has-error' : ''); ?>">
                <?php echo Form::label('nom', 'Nom: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('nom', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('nom', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('image') ? 'has-error' : ''); ?>">
                <?php echo Form::label('image', 'Image: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('image', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('image', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('icon') ? 'has-error' : ''); ?>">
                <?php echo Form::label('icon', 'Icon: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('icon', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('icon', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('texte') ? 'has-error' : ''); ?>">
                <?php echo Form::label('texte', 'Texte: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::textarea('texte', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('texte', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>


    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-3">
            <?php echo Form::submit('Create', ['class' => 'btn btn-primary form-control']); ?>

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
<?php /* /home/devtools/PHP/projects/tmp/resources/views/backEnd/admin/produit/create.blade.php */ ?>