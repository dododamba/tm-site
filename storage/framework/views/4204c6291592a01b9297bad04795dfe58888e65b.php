<?php $__env->startSection('title'); ?>
Carousel
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


    <h1>Carousel <a href=" <?php echo e(route('carousel.create')); ?>"  class="btn btn-primary pull-right btn-sm"  >+</a></h1>




     <div class="table table-responsive">
        <table class="table table-bordered table-striped table-hover" id="tblcarousel">
            <thead>
                <tr>
                    <th>ID</th><th>Texte</th><th>Lien</th><th>Statut</th> <th>Image</th> <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $carousel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($item->id); ?></td>
                    <td><a href="<?php echo e(url('carousel', $item->id)); ?>"><?php echo e($item->texte); ?></a></td><td><?php echo e($item->lien); ?></td>
                    <td>
                      <?php if($item->statut == 0): ?>
                        <a href="#" class="btn btn-danger">Inactive</a>
                      <?php else: ?>
                         <a href="#" class="btn btn-success">Active</a>
                      <?php endif; ?>
                    </td> <td><img src="/<?php echo e($item->image->nom); ?>" alt="<?php echo e($item->image); ?>" style="height: 50px;width: 50px;"></td>
                    <td>
                        <a href="<?php echo e(url('carousel/' . $item->id . '/edit')); ?>" class="btn btn-primary btn-xs" >Mise à jours</a>

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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/carousel/index.blade.php */ ?>