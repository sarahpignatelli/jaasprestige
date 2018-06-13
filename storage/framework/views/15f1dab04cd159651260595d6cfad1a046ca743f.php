<?php $__env->startSection('title', 'JAAS Prestige | Return Confirmation'); ?>
<?php $__env->startSection('content'); ?>

<!-- Including the use of the BookReturn Controller -->
<?php
use App\Http\Controllers\BookReturnController;
?>

<!-- If the user is a guest, then direct them to Register -->
<?php if(auth()->guard()->guest()): ?>
    <div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="<?php echo e(route('register')); ?>"><?php echo e(__('register')); ?></a> first!</h3>
    </div>
    
<!-- If the user is NOT a guest and has a boooking and the car is not available then return the car booking -->
<?php elseif(BookReturnController::userHasBooking()==1 && BookReturnController::getCarAvailable()==1): ?>
    <!-- Get Booking Car ID -->
    <?php echo e(BookReturnController::returnCar(BookReturnController::getCurrentBookingCarId())); ?>

    <div class ="container">
        <div class="text-center">
            <div class="row align-items-center justify-content-center">
                <div class="col">
                    <div class="text-center">
                        <br>
                        <h1>Success!</h1>
                        <br>
                        <img class="check-mark" src="images/check-mark.png">
                    </div>
                </div>
            </div>
            <br>
            <h3>Your Prestige car has been returned!</h3>
            <br>
            <p>Payment will automatically be billed to your chosen preference.</p>
        </div>
    </div> 

<!-- If the user is a guest, then direct then to Book -->
<?php else: ?>
    <br><br>
    <div class="text-center">
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="<?php echo e(url('booking')); ?>"><?php echo e(__('book')); ?></a> first!</h3>
    </div>
<?php endif; ?>            

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>