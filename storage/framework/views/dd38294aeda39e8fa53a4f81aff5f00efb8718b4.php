<?php $__env->startSection('title'); ?>
    Kuesioner
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="container" width="1200px">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Home
                    <br>
                    <a href="<?php echo e(url('responden')); ?>" class="btn btn-primary">
                        <i class="fa fa-btn fa-sign-in"></i>Lanjut 
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>