<nav>
    <a href="<?php echo e(url('/home')); ?>" class="<?php echo e((Request::is('home') ? 'active' : '')); ?>"><img src="public/images/logo.jpg"  alt="JAAS Prestige"></a>
	<a href="<?php echo e(url('/home')); ?>" class="<?php echo e((Request::is('home') ? 'active' : '')); ?>">Home</a>
	<a href="<?php echo e(url('/cars')); ?>" class="<?php echo e((Request::is('cars') ? 'active' : '')); ?>">Cars</a>
	<a href="locations.blade.php" class="">Locations</a>
	<a href="contact.blade.php" class="">Contact</a>
	<a href="about.blade.php" class="">About</a>
</nav>