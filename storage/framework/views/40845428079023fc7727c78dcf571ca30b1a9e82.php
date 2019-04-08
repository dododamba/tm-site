<!DOCTYPE html>
<html lang="en">
<head>
	<title>Page d'Authentification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/vendors/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo e(url('backend')); ?>/assets/css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>

<body>





		<div class="sufee-login d-flex align-content-center flex-wrap">
				<div class="container">
					<div class="login-content">
						<div class="login-logo">
							<a href="index.html">
								<img src="<?php echo e(asset('front')); ?>/assets/img/logo.png" alt="TMP" style="width: 100px;height: 100px;">
							</a>
						</div>

						<?php if(session()->has('success')): ?>
							<?php echo $__env->make('alert.alert_success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php endif; ?>
						<?php if(session()->has('error')): ?>
							<div class="alert alert-danger alert-dismissable">
								<?php echo $__env->make('alert.alert_error', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
							</div>
						<?php endif; ?>


						<div class="login-form">

								<form class="login100-form validate-form" action="<?php echo e(route('login')); ?>" method="POST">
										<?php echo csrf_field(); ?>

						
										<div class="form-group">
												<label>Email ou Nom d'Utilisateur </label>
												<input type="email" class="form-control" placeholder="Email ou Pseudo" name="username">
											</div>
												<div class="form-group">
													<label>Mot de pass</label>
													<input type="password" class="form-control" placeholder="Mot de pass" name="password">
											</div>
												
													<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Se Connecter</button>
													
												
					
									</form>

						</div>
					</div>
				</div>
			</div>

			

<div id="dropDownSelect1"></div>





</body>
</html>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/login.blade.php */ ?>