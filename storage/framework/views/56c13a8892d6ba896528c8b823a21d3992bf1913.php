<?php $__env->startSection('title'); ?>
Carousel
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <h1>Carousel <a href=" <?php echo e(route('carousel.create')); ?>"  class="btn btn-primary pull-right btn-sm"  >+</a></h1>

    <div id="DemoModal9" class="modal fade "> <!-- class modal and fade -->

        <div class="modal-dialog modal-lg">
            <div class="modal-content">

                <div class="modal-header"> <!-- modal header -->
                    <h1>Nouveau Carousel</h1>
                </div>

                <div class="modal-body"> <!-- modal body -->

                    <?php echo Form::open(['url' => 'carousel', 'class' => 'form-horizontal']); ?>


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

                    <label for="select" class="col-sm-3 control-label">Selection une image</label>
                    <select name="image" id="" class="form-control">

                    </select>

                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            <?php echo Form::submit('Créer', ['class' => 'btn btn-primary form-control']); ?>

                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                </div>



            </div> <!-- / .modal-content -->

        </div> <!-- / .modal-dialog -->

    </div>
    <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcarousel">
            <thead>
                <tr>
                    <th>ID</th><th>Texte</th><th>Lien</th><th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('carousel', $item->id)); ?>"><?php echo e($item->texte); ?></a></td><td><?php echo e($item->lien); ?></td>
                    <td>
                        <a href="<?php echo e(url('carousel' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs" >Mise à jours</a>

                        <a data-toggle="modal" data-target="#exampleModal" class=" btn btn-danger btn-xs" data-id="<?php echo e($item->id); ?>">Suppr.</a>
                        <?php echo $__env->make('backEnd.admin.carousel._delete', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>




<?php $__env->stopSection(); ?>

<?php $__env->startSection('javascript'); ?>
    <script>


        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                reader.readAsDataURL(input.files[0]);

            } else {
                removeUpload();
            }
        }

        function <script>
        function readURL(input) {
            if (input.files && input.files[0]) {

                var reader = new FileReader();

                reader.onload = function (e) {
                    $('.image-upload-wrap').hide();

                    $('.file-upload-image').attr('src', e.target.result);
                    $('.file-upload-content').show();

                    $('.image-title').html(input.files[0].name);
                };

                removeUpload() {
                    $('.file-upload-input').replaceWith($('.file-upload-input').clone());
                    $('.file-upload-content').hide();
                    $('.image-upload-wrap').show();
                }

                $('.image-upload-wrap').bind('dragover', function () {
                    $('.image-upload-wrap').addClass('image-dropping');
                });
                $('.image-upload-wrap').bind('dragleave', function () {
                    $('.image-upload-wrap').removeClass('image-dropping');
                });
    </script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/tmpsite/resources/views/backEnd/admin/carousel/index.blade.php */ ?>