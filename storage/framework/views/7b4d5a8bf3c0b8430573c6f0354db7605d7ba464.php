<?php $__env->startSection('title', 'JAAS Prestige | Admin'); ?>
<?php $__env->startSection('content'); ?>

<div class="my-container">
    <div class="panel panel-default">
        <div class="panel-heading">Admin</div>
            <div class="panel-body">
                <p>Welcome!</p>
                    See all <a href="<?php echo e(url('CarsCRUD')); ?>">Cars</a>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>