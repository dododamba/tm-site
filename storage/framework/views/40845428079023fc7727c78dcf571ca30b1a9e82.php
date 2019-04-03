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
								<img class="align-content" src="images/logo.png" alt="">
							</a>
						</div>
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
												
													<button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30">Sign in</button>
													
												
					
									</form>

						</div>
					</div>
				</div>
			</div>

			

<div id="dropDownSelect1"></div>





</body>
</html>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/login.blade.php */ ?>