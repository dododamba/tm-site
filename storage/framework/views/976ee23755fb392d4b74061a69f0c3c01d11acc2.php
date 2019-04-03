<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Dominique DAMBA" />

    <title>TMPartners | <?php echo $__env->yieldContent('title'); ?></title>
    <?php echo $__env->make('front.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </head>
  <body>


    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>

  <?php echo $__env->make('front.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

  <?php echo $__env->yieldContent('breadcrumb'); ?>
    <?php echo $__env->yieldContent('content'); ?>

  <?php echo $__env->make('front.carousel', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('front.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <?php echo $__env->make('front.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


  </body>
</html>

<?php /* /home/devtools/PHP/projects/tm-site/resources/views/layout.blade.php */ ?>