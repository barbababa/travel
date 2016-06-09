<?php $__env->startSection('content'); ?>
<pre>
	<?php echo e($res); ?>

</pre>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>