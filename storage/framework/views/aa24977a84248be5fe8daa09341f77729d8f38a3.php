<ul class="nav nav-sidebar">
    <?php if(isset($sidebar_items) && $sidebar_items): ?>
        <?php $__currentLoopData = $sidebar_items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $name => $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="<?php echo Foostart\Acl\Library\Views\Helper::get_active($data['url']); ?>"><a
                    href="<?php echo $data['url']; ?>"><?php echo $data['icon']; ?> <?php echo e($name); ?></a></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</ul>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/layouts/sidebar.blade.php ENDPATH**/ ?>