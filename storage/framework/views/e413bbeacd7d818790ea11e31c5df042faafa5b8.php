<?php $__env->startSection('title', 'JAAS Prestige | Book'); ?>
<?php $__env->startSection('content'); ?>

<!-- Use code from certain controllers -->
<?php 
use App\Http\Controllers\BookingController;
use App\Http\Controllers\BookReturnController;
?>
 
<!-- If user is a guest then they need to register, otherwise they can book a car --> 
<?php if(auth()->guard()->guest()): ?>
    <div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>We know you're excited to drive a Prestige car, but you'll need to <a href="<?php echo e(route('register')); ?>"><?php echo e(__('register')); ?></a> first!</h3>
    </div>

<?php else: ?>
<!-- If a user does not have a booking, then open a booking form -->
<?php if(BookReturnController::userHasCurrentBooking()==0): ?>
  
    <?php echo Form::open(['action' => 'BookingController@store']); ?>

    <div class="booking-background">
        <div class="container-booking">
            <div class="col-lg-12 margin-tb">
                <div class="text-center">
                    <h2 style="font-size:60px; margin-top:50px; color: #FFFFFF;">Book Presitige </h2>
                </div>
            </div>
        </div>   
        
        <!-- If there is an error, spit out message -->
        <div class="error-message">   
              <?php if(count($errors) > 0): ?>
        <div class="alert alert-danger">
            <div class="text-center"> 
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        </div>
        <?php endif; ?>
        </div>
        
        <!-- Alert the user that the car has been successfully booked -->
        <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success">
            <p><?php echo e($message); ?></p>
        </div>
        <?php endif; ?>
    </div> 
        <!-- List and display the Locations in a dropdown menu -->
        <div class="booking-center">
            <div class="form-group">
                <!--Location Input--> 
                <div class="heading-book">
                <?php echo Form::label('location', 'Location'); ?>

                </div>
                <select class="form-control" style=" width:500px;" name="location" id="location" onchange="displayCar()">
                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $location): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(BookingController::returnId($location)); ?>"><?php echo e(BookingController::returnLocation($location)); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <!-- List and display the Cars according to which Location is selected -->
            <!--Car Input--> 
            <div class="form-group">
                <div class="heading-book">
                <?php echo Form::Label('car', 'Car'); ?>

                </div>
                <select class="form-control" id="car" style=" width:500px; " name="carName" /disabled>
                    <?php $__currentLoopData = $cars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $car): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e(BookingController::returnCarId($car)); ?>"><?php echo e(BookingController::returnCarName($car)); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>
            
            <!-- Allow users to select the date and time they wish to book the car -->
            <!--Time Input--> 
            <div class="time-input">
                <div class="form-group">
                    <?php echo Form::label('time', 'Time'); ?>

                    <input id="datetime" type="datetime-local" name="time">
                </div>
            </div>
            
            <!-- Book button -->
            <div class="book-button">
                <!--BTN--> 
                <br> 
                <button id="submit" class="btn btn-book" color="" type="submit">Get Prestige</button>
            </div>
       
        </div>
        
        
   
    <!-- Displaying the Car accoring to the Location -->
    <script>
        function displayCar() {
            document.getElementById('car').value = document.getElementById('location').value;
        }
    </script>
    <!-- Close the form -->
    <?php echo Form::close(); ?>


<!-- If user has already booked, then display validation text -->
<?php else: ?> 
<div class="text-center">
        <br><br>
        <img src="images/carside.svg">
        <h3>You already have a current booking!</h3>
    </div>
    
<?php endif; ?>
<?php endif; ?>

<?php $__env->stopSection(); ?>
 </div>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>