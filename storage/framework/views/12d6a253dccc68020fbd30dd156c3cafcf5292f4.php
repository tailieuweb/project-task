<?php if(isset($logged_user) && $logged_user->user_profile()->count()): ?>
    <img src="<?php echo $logged_user->user_profile()->first()->presenter()->avatar($size); ?>" width="<?php echo e($size); ?>">
<?php else: ?>
    <img src="<?php echo URL::asset('/packages/foostart/images/avatar.png'); ?>" width="<?php echo e($size); ?>">
<?php endif; ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/layouts/partials/avatar.blade.php ENDPATH**/ ?>