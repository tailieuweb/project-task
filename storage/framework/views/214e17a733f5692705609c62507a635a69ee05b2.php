<?php $__env->startSection('head_css'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('head_css'); ?>
    <?php echo HTML::style('packages/foostart/css/bootstrap-datetimepicker-4.17.47.css'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/admin/task-layout.blade.php ENDPATH**/ ?>