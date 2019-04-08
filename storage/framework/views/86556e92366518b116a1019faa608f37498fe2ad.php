<?php $__env->startSection('title'); ?>
    Mot de Pass
<?php $__env->stopSection(); ?>
<?php $__env->startSection('breadcumb'); ?>
    Modifcation mot de pass
<?php $__env->stopSection(); ?>
<?php $__env->startSection('css'); ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

    <div class="content mt-3">
        <div class="animated fadeIn">
            <div class="row">


                <div class="col-md-12">
                    <?php echo Form::open(['url' => 'password-modifiable']); ?>




                    <div class="form-group">
                        <label for="exampleInputPassword1">Nouveau mot de pass</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Entrez un nouveau mot de pass" name="password">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmation nouveau mot de pass</label>
                        <input class="form-control" name="passwordconfirmation" type="password" placeholder="Entrez le meme mot de pass que vous veniez de saisir"/>

                        <div class="form-group">
                            <label for="exampleInputPassword1">Entrez l'ancien mot de pass pour confirmer</label>
                            <input type="password" class="form-control" placeholder="Entrez votre ancien mot pass pour valider la modification" name="oldpassword" >
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
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/backEnd/admin/user/password.blade.php */ ?>