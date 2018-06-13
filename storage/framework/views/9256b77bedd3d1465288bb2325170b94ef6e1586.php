<?php $__env->startSection('title', 'JAAS Prestige | Contact'); ?>
<?php $__env->startSection('content'); ?>

<!-- In-Page Styling -->
<style>
  h1,h2 {
    font-weight: bold;
  }
  p {
    font-size: 16px;
    color: #cdcdcd;
    text-align: center;
  }
</style>

<!-- Placing text on an image -->
<div class="my-container">
    <img src="/images/contact.jpg" style="width:100%;" alt="JAAS Prestige">
    <div class="my-centered">
        <h1 style="font-size: 40px; font-weight: 600;">Need help?</h1>
    </div>
</div>
    <br><br><br>
    
<!-- Creating the Contact form in a grid format -->
<div class="container">
    <div class="row">
        <div class="col-sm-6">
                <div class="col-sm-8">
                    <h2> Get in touch with us!</h2>
                    <br>
                    <input class="form-control" id="name" name="name" placeholder="Name" type="text" required><br>
                    <input class="form-control"  id="email" name="email" placeholder="Email" type="email" required><br>
                </div>
                <div class="col-sm-10">
                    <textarea class="form-control" id="comments" name="comments" placeholder="Description" rows="5" required></textarea><br>
                    <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#myModal">Send</button> <br>
                </div>
        </div>
        
        <!-- Showing a map of the Headquarters -->
        <div class="col-sm-6">
            <div id="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3152.2337598869285!2d144.96203225031996!3d-37.807993279654006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642cb0a2ff0fb%3A0x8a729628b77319df!2sRMIT+University%2C+Melbourne+City+Campus!5e0!3m2!1sen!2sau!4v1522889776727" width="540" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    
    <!-- When the 'Submit' button is pressed, return a Success pop up -->
    <div class="modal fade" id="myModal" role="dialog"> 
        <div class="modal-dialog modal-sm"> 
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title"></h4>
                </div>
                <div class="modal-body">
                    <p>Thank you for contacting JAAS Prestige! We will respond to your inquiry shortly!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
     <?php echo $__env->make('layouts.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    
        
<?php $__env->stopSection(); ?>
</div>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>