<?php $__env->startSection('title'); ?>
    Informations personnelles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    Modifcation  Informations personnelles
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">


                <div class="col-md-12">
                    <?php echo Form::open(['url' => 'personnal-info-modifiable']); ?>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo e(Auth::user()->first_name); ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Prenom</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo e(Auth::user()->last_name); ?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom d'Utilisateur</label>
                        <input type="text" class="form-control" name="username" value="<?php echo e(Auth::user()->username); ?>">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email" value="<?php echo e(Auth::user()->email); ?>">
                    </div>


                    <div class="form-group">
                        <label for="exampleInputEmail1">Entrez votre mot de pass pour confirmer la modification</label>
                        <input type="password" class="form-control" name="password" >
                    </div>

                    <button type="submit" class="btn btn-default">Enregistrer</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"  role="button">Annuler</button>

                    </form>
                </div>


            </div><!-- .row -->
        </div><!-- .animated -->
    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/user/private.blade.php */ ?>