
<aside id="left-panel" class="left-panel">
            <nav class="navbar navbar-expand-sm navbar-default">
    
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-bars"></i>
                    </button>
                    <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo"></a>
                    <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
                </div>
    
                <div id="main-menu" class="main-menu collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li>
                            <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Tableau de bord</a>
                        </li>
                        <h3 class="menu-title">Elements graphiques</h3><!-- /.menu-title -->
                        <li>
                            <a href="<?php echo e(url('messagebienvenu')); ?>" > <i class="menu-icon"></i>Mot du CEO</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('apropos')); ?>" > <i class="menu-icon"></i>A Propos</a>
                        </li>
    
                        <li>
                            <a href="<?php echo e(url('icons')); ?>" > <i class="menu-icon"></i>Icones résaux </a>
                        </li>
    
                        <li>
                            <a href="<?php echo e(url('citations')); ?>" > <i class="menu-icon"></i>Citations</a>
                        </li>
    
    
                        <li class="menu-item-has-children active dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon"></i>Coordonnés</a>
                            <ul class="sub-menu children dropdown-menu">
                                <li><i class="menu-icon"></i><a href="<?php echo e(url('coordonee')); ?>">Géo Localisation</a></li>
                                <li><i class="menu-icon"></i><a href="<?php echo e(url('contact')); ?>">Contact</a></li>
                            </ul>
                        </li>
    
    
                        <h3 class="menu-title">Gallerie</h3><!-- /.menu-title -->
                        <li>
                            <a href="<?php echo e(url('gallery')); ?>" > <i class="menu-icon"></i>Photo</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('carousel')); ?>" > <i class="menu-icon"></i>Slider</a>
                        </li>
    
                        <li>
                            <a href="<?php echo e(url('logos')); ?>" > <i class="menu-icon"></i>Logo </a>
                        </li>
    
    
    
                        <h3 class="menu-title">Service et Produits</h3><!-- /.menu-title -->
                        <li>
                            <a href="<?php echo e(url('service')); ?>" > <i class="menu-icon"></i>Service</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('produit')); ?>" > <i class="menu-icon"></i>Produit</a>
                        </li>
    
                        <li>
                            <a href="<?php echo e(url('technologies')); ?>" > <i class="menu-icon"></i>Technologies</a>
                        </li>
    
                        <h3 class="menu-title">Utilisation </h3><!-- /.menu-title -->
                        <li>
                            <a href="<?php echo e(url('user')); ?>" > <i class="menu-icon"></i>Utilisateurs</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('role')); ?>" > <i class="menu-icon"></i>Roles</a>
                        </li>
    
                        <li>
                            <a href="<?php echo e(url('logs')); ?>" > <i class="menu-icon"></i>Historiques</a>
                        </li>
    
    
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
        </aside>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/partials/side.blade.php */ ?>