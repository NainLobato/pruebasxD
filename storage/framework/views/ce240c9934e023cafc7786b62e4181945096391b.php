<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
	<link rel="stylesheet" href="<?php echo e(asset ('css/sweetalert.css')); ?>"  >
	<script src="<?php echo e(asset ('js/sweetalert.min.js')); ?>"></script>
</head>
<body>
	<div class="container">
		<h3 class="center-text">Sweet Alert using Laravel - Learn Infinity</h3>
	 
		<div class="row">
			<div class="col-md-offset-2 col-md-8">
				
				<?php echo $__env->make('sweet::alert', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
	 
			</div>
	 
		</div>
	 
	</div>
</body>
</html>