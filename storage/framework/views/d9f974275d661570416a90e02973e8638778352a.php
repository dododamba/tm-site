  <!-- jQuery library -->
   <script src="<?php echo e(url('front')); ?>/assets/js/jquery.min.js"></script>
   <!-- Include all compiled plugins (below), or include individual files as needed -->
   <script src="<?php echo e(url('front')); ?>/assets/js/bootstrap.js"></script>
   <!-- Slick slider -->
   <script type="text/javascript" src="<?php echo e(url('front')); ?>/assets/js/slick.js"></script>
   <!-- Counter -->
   <script type="text/javascript" src="<?php echo e(url('front')); ?>/assets/js/waypoints.js"></script>
   <script type="text/javascript" src="<?php echo e(url('front')); ?>/assets/js/jquery.counterup.js"></script>
   <!-- Mixit slider -->
   <script type="text/javascript" src="<?php echo e(url('front')); ?>/assets/js/jquery.mixitup.js"></script>
   <script type="text/javascript" src="<?php echo e(url('front')); ?>/assets/js/jquery.fancybox.pack.js"></script>
   <script src="<?php echo e(url('front')); ?>/assets/js/custom.js"></script>
  <script>
     $(document).ready(function(){
        $('.dropdown-submenu a.test').on("click", function(e){
           $(this).next('ul').toggle();
           e.stopPropagation();
           e.preventDefault();
        });
     });
  </script>
<?php /* /home/devtools/PHP/projects/tmp/resources/views/front/js.blade.php */ ?>