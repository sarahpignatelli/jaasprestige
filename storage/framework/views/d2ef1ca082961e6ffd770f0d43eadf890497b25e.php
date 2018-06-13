<?php $__env->startSection('title', 'Prestige Admin'); ?>
<?php $__env->startSection('content'); ?>

<!-- Include the use of this Controller -->
<?php 
use App\Http\Controllers\AdminCarsCRUDController;
?>
<div class="container">
   <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <br>
                <h2>Prestige Cars</h2>
            </div>
            
        </div>
    </div>
    <!-- Alert success if successful -->
    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
    <?php endif; ?>
    
    <!-- Place all details in a table -->
    <table class="table table-bordered">
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Location</th>
            <th>Latitude</th>
            <th>Longitude</th>
            <th width="280px">Action</th>
        </tr>
        
        <!-- For each car in the databse, display its name, location, lat and lng in a table -->
        <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e(++$i); ?></td>
                <td><?php echo e($car->name); ?></td>
                <td><?php echo e($car->location); ?></td>
                <td><?php echo e($car->lat); ?></td>
                <td><?php echo e($car->lng); ?></td>
                <td>
                    <!-- Display an Edit button -->
                    <a id='edit' class="btn btn-primary" href="<?php echo e(route('CarsCRUD.edit',$car->id)); ?>">Edit</a>
                    <!-- Open Form -->
                    <!-- Allow Admin to Delete a car record -->
                    <?php echo Form::open(['method' => 'DELETE','route' => ['CarsCRUD.destroy', $car->id],'style'=>'display:inline']); ?>

                    <?php echo Form::submit('Delete', ['class' => 'btn btn-danger','name' => 'delete']); ?>

                    <!-- Close Form -->
                    <?php echo Form::close(); ?>

                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </table>
    
    <!-- Allow Admin to Add a Car record -->
    <div class="text-center">
        <a id="add-car" class="add-car" href="<?php echo e(route('CarsCRUD.create')); ?>">Add New Car</a>
    </div>
    <?php echo $cars->render(); ?>

</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>