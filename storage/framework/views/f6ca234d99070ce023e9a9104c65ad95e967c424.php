<?php $__env->startSection('title', 'JAAS Prestige | History'); ?>
<?php $__env->startSection('content'); ?>

<!-- If a user is a guest then direct to Register -->
<?php if(auth()->guard()->guest()): ?>
    <div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="<?php echo e(route('register')); ?>"><?php echo e(__('register')); ?></a> first!</h3>
    </div>
    
<!-- If a user is NOT a guest then display the user's previous History -->
<?php else: ?>
<div class ="container">
    <div class="row align-items-center justify-content-center">
        <div class="col">
            <div class="text-center">
                <br>
                <h2>Prestige History</h2>
                <br>
            </div>
        </div>
    </div>
    <div class="row align-items-center justify-content-center">
        <div class ="col">
            <table class="table table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>Prestige Car</th>
                        <th>Location</th>
                        <th>Date & Time</th>
                    </tr>
                </thead>
                <!-- For each booking, display Car Name, Location and Time in a table -->
                <?php $__currentLoopData = $bookings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($data->name); ?></td>
                        <td><?php echo e($data->location); ?></td>
                        <td><?php echo e($data->time); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>