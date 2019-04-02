<!DOCTYPE html>
<html lang="en">
    <title>TMP Admin | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Dominique DAMBA" />
    <?php echo $__env->make('partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('css'); ?>

    <body class="cbp-spmenu-push">
        <div class="main-content">
            <?php echo $__env->make('partials.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('partials.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <div id="page-wrapper">
                <div class="main-page">
                    <?php if(isset($siteTitle)): ?>
                    <h3 class="title1">
                       <?php echo $__env->yieldContent('page_name'); ?>
                    </h3>
                    <?php endif; ?>
                    <div class="blank-page widget-shadow scroll" id="style-2 div1">
                        <?php echo $__env->yieldContent('content'); ?>
                    </div>
                </div>
            </div>
            <?php echo $__env->yieldContent('gallery'); ?>

            <?php echo $__env->make('partials.bottom', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        <?php echo $__env->make('partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('javascript'); ?>
    </body>
</html>

<?php /* /home/devtools/PHP/tmpsite/resources/views/backLayout/app.blade.php */ ?>