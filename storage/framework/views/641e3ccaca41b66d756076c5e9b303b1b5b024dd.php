<?php $__env->startSection('title', 'Admin - Edit Prestige'); ?>
<?php $__env->startSection('content'); ?>
<?php 
use App\Http\Controllers\AdminCarsCRUDController;
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <br>
                <h2>Edit Prestige Details</h2>
            </div>
        </div>
    </div>
    <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
    <?php endif; ?>
    <?php echo Form::model($cars, ['method' => 'PATCH','route' => ['CarsCRUD.update', $cars->id]]); ?>

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
            <strong>Car Name:</strong>
            <?php echo Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Location:</strong>
            <?php echo Form::text('location', null, array('placeholder' => 'Location','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Latitude:</strong>
            <?php echo Form::text('lat', null, array('placeholder' => 'Latitude','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Longitude:</strong>
            <?php echo Form::text('lng', null, array('placeholder' => 'Longitude','class' => 'form-control')); ?>

        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <a class="btn btn-secondary" href="<?php echo e(route('CarsCRUD.index')); ?>"> Back</a>
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
    <?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>