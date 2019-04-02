<?php $__env->startSection('title','A Propos'); ?>
<?php $__env->startSection('breadcrumb'); ?>

  <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>A Propos</h2>
            <ol class="breadcrumb">
              <li><a href="<?php echo e(route('main')); ?>">Accueil</a></li>
              <li class="active">A Propos</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">
            <div class="row">
              <div class="col-md-9">
                <!-- start course content container -->

                <div class="mu-course-container mu-course-details">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-latest-course-single">
                        <figure class="mu-latest-course-img">
                          <a href="#"><img src="<?php echo e(url('main')); ?>assets/img/courses/1.jpg" alt="img"></a>
                        </figure>
                        <div class="mu-latest-course-single-content">
                          <h2><a href="#">A Propos de TECHNO MEGA PARTNERS</a></h2>

                          <blockquote>
                            <p><?php echo e($apropos->texte); ?></p>
                          </blockquote>

                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mu-course-container mu-blog-single" style="background-color :#3685B0;">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-title">
                        <h2  style="color : white;">Nos Technologies</h2>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mu-related-item">
                  <h3></h3>
                  <div class="mu-related-item-area">
                    <div id="mu-related-item-slide">
                      <?php $__currentLoopData = $technologies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-6">
                          <article class="mu-blog-single-item">
                            <figure class="mu-blog-single-img">
                              <a href="#"><img alt="img" src="<?php echo e(url('front')); ?>/assets/img/blog/blog-1.jpg"></a>
                              <figcaption class="mu-blog-caption">
                                <h3><a href="#"><?php echo e($item->nom); ?></a></h3>
                              </figcaption>
                            </figure>

                            <div class="mu-blog-description">
                              <p><?php echo sous_chaine( $item->description,0,180); ?></p>
                              <a href="#" class="mu-read-more-btn">Plus de détail</a>
                            </div>
                          </article>
                        </div>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                  </div>
                </div>
                <!-- end course content container -->
              </div>

              <div class="col-md-3">
                <!-- start sidebar -->
              <?php echo $__env->make('front.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
              <!-- / end sidebar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/about.blade.php */ ?>