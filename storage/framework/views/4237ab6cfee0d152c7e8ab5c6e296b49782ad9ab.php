<!DOCTYPE html>
<html class="no-js" lang="en">
<head>    
    <title>TMP Admin | <?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Dominique DAMBA" />
    <?php echo $__env->make('partials.css', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('css'); ?>

        <link rel="apple-touch-icon" href="apple-icon.png">
        <link rel="shortcut icon" href="favicon.ico">
    
    
    </head>
    
    <body>

            <?php echo $__env->make('partials.side', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Right Panel -->

            <div id="right-panel" class="right-panel">
        
                <!-- Header-->
            
                <?php echo $__env->make('partials.top', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <!-- /header -->
                <!-- Header-->
        
                <div class="breadcrumbs">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
        
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Tabeau de bord</a></li>
                                    <li class="active"> <?php echo $__env->yieldContent('breadcumb'); ?></li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
        
                <div class="content mt-3">
                    <div class="animated fadeIn">
                        <div class="row">
        
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong class="card-title">Data Table</strong>
                                    </div>
                                    <div class="card-body">
                                            <?php echo $__env->yieldContent('content'); ?>
                                    </div>
                                </div>
                            </div>
        
        
                        </div>
                    </div>
                </div>
        
            </div>
        
          
        
        <?php echo $__env->make('partials.js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('javascript'); ?>
    </body>
</html>

<?php /* /home/devtools/PHP/projects/tmp/resources/views/backLayout/app.blade.php */ ?>