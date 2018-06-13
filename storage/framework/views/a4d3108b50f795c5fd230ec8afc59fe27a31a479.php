<?php $__env->startSection('title', 'JAAS Prestige | Return'); ?>
<?php $__env->startSection('content'); ?>

<?php 
use App\Http\Controllers\ReturnController;
use App\Http\Controllers\BookReturnController;
use App\CarBooking;
?>

<style type="text/css">
    .h1 {
        font-size:30px;
        text-align: center;
        font-weight: bold;
    }
  
    .li {
        font-size:20px;
    }
</style>
    <?php if(BookReturnController::userHasBooking()==1 && BookReturnController::getCarAvailable()==1): ?>
<div class="container">
        <br><br>
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center">Return Prestige</h1>
            </div>
        </div>
        <br>
        <div class="row justify-content-center align-items-start">
                <div class="col-md-4">
                    <div class="textholder text-center">
                        <h3>1. Park</h3>
                         <img src="/images/parking.svg" style="width:35%;" alt="JAAS Prestige"><br><br>
                         <p> Return the car to it's Prestige home! </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="textholder text-center">
                        <h3>2. Tap Off</h3>
                        <img src="/images/credit-card.svg" style="width:35%; padding-bottom: 25px;" alt="JAAS Prestige">
                        <br>
                        <p> Simply place keys in the lock box and tap off!</p>
                        <!--  <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        -->
                    </div>
                </div>
                    <div class="col-md-4">
                    <div class="textholder text-center">
                        <h3>3. Payment</h3>
                        <img src="/images/online-payment.svg" style="width:35%; padding-bottom: 25px;" alt="JAAS Prestige">
                        <br>
                        <p>You are automatically charged through your choice of payment!</p>
                        <!--  <div>Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
                        -->
                    </div>
                </div>
        <div class="row">
            <div class="col-md-12">
                 <h3 class="text-center"><?php echo e(ReturnController::calcCost('10')); ?></h3> <!-- temporarily putting 10 for testing. We can get rate right later. Need a rate in car table? -->
                 <br><br>
            </div>
        </div>
    </div> 
    <div clas="row">
        <div class="col-md-12">
             <div class="return-button">
                <form action='returnConfirm'>
                <button id="submit" class="btn btn-return" onclick="window.location='<?php echo e(url('returnConfirm')); ?>'" type="submit"> Return Prestige</button>
                </form>
                /div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>