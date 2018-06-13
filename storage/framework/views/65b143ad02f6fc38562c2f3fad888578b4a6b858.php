<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <!-- Adding start up code, title, scripts, fonts and styles -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="icon" href="images/icon.png">
    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <script src="<?php echo e(asset('js/booking.js')); ?>" defer></script>
    
    <!-- Include jQuery -->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="jquery-1.8.3.js"></script>

    <script type="text/javascript">
		var centreGot = false;
	</script>
	
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8MnyEDv6jwBbRJbjr6oez0kAc6MJtGXg&libraries=places, geometry">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js" async defer></script>
  
    
    
    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="<?php echo e(url('/')); ?>"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- Making the Logo direct to the Home Page -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        <li><a href="<?php echo e(url('/')); ?>"><img src="/images/logo.jpg" class="logo" alt="JAAS Prestige"></a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <!-- Adding links to the Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li><a id="homelink" class="nav-link" href="<?php echo e(url('/')); ?>">Home</a></li>
	                    <li><a id="carslink" class="nav-link" href="<?php echo e(url('cars')); ?>">Cars</a></li>
	                    <li><a id="locationslink" class="nav-link" href="<?php echo e(url('locations')); ?>">Locations</a></li>
	                    <li><a id="contactlink" class="nav-link" href="<?php echo e(url('contact')); ?>">Contact</a></li>
	                    <li><a id="aboutlink" class="nav-link" href="<?php echo e(url('about')); ?>">About</a></li>
	                    
	                   <!-- If the user is a guest, then add the LOGIN and REGISTER buttons -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li><a id="loginlink" class="nav-link upper-button bouncy" style="animation-delay:0.07s" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a></li>
                            <li><a id="registerlink" class="nav-link upper-button bouncy" style="animation-delay:0.14s" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a></li>
                        
                        <!-- If the user is loggeed in then add a Dropdown Menu instead of the LOGIN and REGISTER buttons -->
                        <?php else: ?>
                        <!-- show dashboard link if user is Admin -->
                         <?php if(Auth::user()->isAdmin()): ?>
	                        <li><a id=adminlink class="nav-link" href="<?php echo e(url('CarsCRUD')); ?>">Dashboard</a></li>
	                    <?php endif; ?>
	                     <!-- The name of the user will appear after logging in -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle upper-button" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>
                                
                                <!-- Dropdown Menu links -->
                                <div id='ddmenu' class="dropdown-menu text-left" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(url('booking')); ?>"><?php echo e(__('BOOK')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(url('return')); ?>"><?php echo e(__('RETURN')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(url('report')); ?>"><?php echo e(__('HISTORY')); ?></a>
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('LOGOUT')); ?>

                                    </a>
                                    <!-- Logout Functionality -->
                                    <form id="logout-form" name="logoutlink" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Yielding Content from other pages to reduce code repitition  -->
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html>
