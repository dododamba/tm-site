<div class="container">
    <div class='row'>
        <div class='col-md-offset-2 col-md-8'>
          <div class="carousel slide" data-ride="carousel" id="quote-carousel">
            <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
                <?php $__currentLoopData = $citation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-target="#quote-carousel" data-slide-to="<?php echo e($item->if); ?>" <?php if($item->id == 1 ): ?> class="active" <?php endif; ?>></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ol>
            
            <!-- Carousel Slides / Quotes -->
            <div class="carousel-inner">
            
              <!-- Quote 1 -->
              
              <!-- Quote 2 -->
    
    
              <?php $__currentLoopData = $citation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              <div <?php if($item->id == 1 ): ?> class="item active" <?php else: ?> class="item" <?php endif; ?>>
                  <blockquote>
                    <div class="row">
                        <div class="col-sm-1 text-center">
                          </div>
                      <div class="col-sm-10">
                        <p><?php echo e($item->auteur); ?>.</p>
                        <small><?php echo e($item->texte); ?> </small>
                      </div>
                      <div class="col-sm-1">
                        </div>
                    </div>
                  </blockquote>
                </div>       
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>          
             

           

            </div>
            
            <!-- Carousel Buttons Next/Prev -->
            <a data-slide="prev" href="#quote-carousel" class="left carousel-control"><i class="fa fa-chevron-left"></i></a>
            <a data-slide="next" href="#quote-carousel" class="right carousel-control"><i class="fa fa-chevron-right"></i></a>
          </div>                          
        </div>
      </div>
</div>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/front/carousel.blade.php */ ?>