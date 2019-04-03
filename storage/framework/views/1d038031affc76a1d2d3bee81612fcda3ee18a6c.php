<?php $__env->startSection('title','Tableau de bord'); ?>
<?php $__env->startSection('content'); ?>
<?php echo $__env->make('flashy::message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="row-one">
    <div class="col-md-4 widget">
        <div class="stats-left ">
            <h5>Today</h5>
            <h4>Sales</h4>
        </div>
        <div class="stats-right">
            <label> 45</label>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 widget states-mdl">
        <div class="stats-left">
            <h5>Today</h5>
            <h4>Visitors</h4>
        </div>
        <div class="stats-right">
            <label> 80</label>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="col-md-4 widget states-last">
        <div class="stats-left">
            <h5>Today</h5>
            <h4>Orders</h4>
        </div>
        <div class="stats-right">
            <label>51</label>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="clearfix"> </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backLayout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /* /home/devtools/PHP/projects/tm-site/resources/views/dashboard.blade.php */ ?>