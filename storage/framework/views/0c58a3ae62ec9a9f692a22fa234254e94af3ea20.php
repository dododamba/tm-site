<?php $__env->startSection('title'); ?>
Mon profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
 Profile
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
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

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">


                <div class="col-md-12">
                            <div class="mx-auto d-block">
                                <img class="rounded-circle mx-auto d-block" src="<?php echo e(Auth::user()->current_profile_pict->nom); ?>" alt="Card image cap" style="width: 167px;height: 158px;">
                                <h5 class="text-sm-center mt-2 mb-1"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></h5>
                                <div class="location text-sm-center"><?php echo e(Auth::user()->username); ?> (<?php echo e(Auth::user()->roles->name); ?>)  </div>
                                <div class="col-md-1"></div>
                               <div class="col-md-10">
                                   <ul class="list-group list-group-flush">
                                       <li class="list-group-item">
                                           <a href="#">Nom et Prénom :  <span class="pull-right"><?php echo e(Auth::user()->first_name); ?> <?php echo e(Auth::user()->last_name); ?></span></a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="#"> Pseudo :  <span class="pull-right"><?php echo e(Auth::user()->username); ?></span></a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="#"> Email  : <span class="pull-right r-activity"><?php echo e(Auth::user()->email); ?></span></a>
                                       </li>
                                       <li class="list-group-item">
                                           <a href="#"> Profile :  <span class="pull-right r-activity"><?php echo e(Auth::user()->roles->name); ?></span></a>
                                       </li>

                                       <li class="list-group-item">
                                           <a href="#"> Date de création : <span class="pull-right"><?php echo e(Auth::user()->created_at); ?></span></a>
                                       </li>


                                   </ul>
                                   <hr>
                                   <div class="clearfix"></div>
                                   <div class="card-text text-sm-center">
                                       <a  href="<?php echo e(route('myprofile.picture')); ?>" class="btn btn-primary"><i class="fa fa-edit"></i>Photo de profile</a>
                                       <a  href="<?php echo e(route('myprofile.private')); ?>" class="btn btn-default"><i class="fa fa-edit"></i>Informations Personnelles</a>
                                       <a  href="<?php echo e(route('myprofile.password')); ?>" class="btn btn-danger"><i class="fa fa-edit"></i>Mot de Pass</a>
                                   </div>
                               </div>

                                <div class="col-md-1"></div>
                            </div>

                </div>


            </div><!-- .row -->
        </div><!-- .animated -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/user/profile.blade.php */ ?>