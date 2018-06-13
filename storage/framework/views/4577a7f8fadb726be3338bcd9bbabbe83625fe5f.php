<?php $__env->startSection('title', 'JAAS Prestige | Booking Confirmation'); ?>
<?php $__env->startSection('content'); ?>


<!-- If the session is not empty for a Booking, then return a Success page with the user's booking details -->
<div class ="container">
    <div class="text-center">
        <?php if(!empty(Session::get('car_booking'))): ?>
        <div class="row align-items-center justify-content-center">
            <div class="col">
                <div class="text-center">
                    <br>
                    <h1>Thank You!</h1>
                    <br>
                    <img class="check-mark" src="images/check-mark.png">
                </div>
            </div>
        </div>
        <br>
        <h3>Your booking is confirmed!</h3>
        <br>
        <!-- Displaying booking details: Car Name, Location and Time -->
        <div class="row justify-content-center align-items-start">
            <div class ="col-lg-2">
                <h5>CAR</h5>
                <p><?php echo Session::get('car_booking')->getCarName(); ?></p>
            </div>
            <div class ="col-lg-2">
                <h5>LOCATION</h5>
                <p><?php echo Session::get('car_booking')->getLocation(); ?></p>
            </div>
            <div class ="col-lg-2">
                <h5>TIME</h5>
                <p><?php echo Session::get('car_booking')->getTime(); ?></p>
            </div>
        </div>
        <?php endif; ?>
        
        <!-- If the session is empty for a Booking, then return Validation text to book a car -->    
        <?php if(empty(Session::get('car_booking'))): ?>
            <br><br>
            <div class="text-center">
                <img src="images/carside.svg">
                <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="<?php echo e(url('booking')); ?>"><?php echo e(__('book')); ?></a> first!</h3>
            </div>
        <?php endif; ?>
    </div>
</div> 

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>