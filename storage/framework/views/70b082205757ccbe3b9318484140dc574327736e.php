<!-- Start header  -->
  <header id="mu-header">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12">
          <div class="mu-header-area">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-left">
                  <div class="mu-top-email">
                    <i class="fa fa-envelope"></i>
                    <span> <?php echo e($contact->email); ?></span>
                  </div>
                  <div class="mu-top-phone">
                    <i class="fa fa-phone"></i>
                    <span> <?php echo e($contact->telephone); ?></span>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                <div class="mu-header-top-right">
                  <nav>
                    <ul class="mu-top-social-nav">
                        <?php $__currentLoopData = $icons; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><a href="<?php echo e($item->lien); ?>" target="_blank"><span class="fa <?php echo e($item->faicon); ?>"></span></a></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>


  <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="row" style="display : inline-block;"><a class="navbar-brand " href="<?php echo e(route('main')); ?>"><img src="<?php echo e(asset('front')); ?>/assets/img/logo.png" alt="TMP" style="width: 100px;height: 100px;"></a> <h2 style="  float: right;padding-top : 15%;color: #333;">TM PARTNERS</h2>
          </div>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li><a href="<?php echo e(route('main')); ?>">Accueil</a></li>
            <li><a href="<?php echo e(route('apropo')); ?>">A Propos</a></li>
            <li><a href="<?php echo e(route('services')); ?>">Services & Produits</a></li>
            <li><a href="<?php echo e(route('contacts')); ?>">Contact</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->
  <!-- Start search box -->
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/front/top.blade.php */ ?>