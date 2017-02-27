<?php $__env->startSection('content'); ?><?php echo e($showContent ['content1']); ?> 
<?php echo e($showContent ['content2']); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('templates.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>