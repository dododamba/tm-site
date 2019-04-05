<?php $__env->startSection('title'); ?>
Edit Contact
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Edit Contact</h1>
    <hr/>

    <?php echo Form::model($contact, [
        'method' => 'PATCH',
        'url' => ['contact', $contact->id],
        'class' => 'form-horizontal'
    ]); ?>


                <div class="form-group <?php echo e($errors->has('adresse') ? 'has-error' : ''); ?>">
                <?php echo Form::label('adresse', 'Adresse: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('adresse', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('adresse', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('telephone') ? 'has-error' : ''); ?>">
                <?php echo Form::label('telephone', 'Telephone: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('telephone', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('telephone', '<p class="help-block">:message</p>'); ?>

                </div>
            </div>
            <div class="form-group <?php echo e($errors->has('email') ? 'has-error' : ''); ?>">
                <?php echo Form::label('email', 'Email: ', ['class' => 'col-sm-3 control-label']); ?>

                <div class="col-sm-6">
                    <?php echo Form::text('email', null, ['class' => 'form-control']); ?>

                    <?php echo $errors->first('email', '<p class="help-block">:message</p>'); ?>

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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/contact/edit.blade.php */ ?>