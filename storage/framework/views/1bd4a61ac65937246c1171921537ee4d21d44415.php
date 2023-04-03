
<?php echo Form::open(["route" => "users.edit.permission","role"=>"form", 'class' => 'form-add-perm']); ?>

<div class="form-group">
    <div class="input-group">
        <span class="input-group-addon form-button button-add-perm"><span
                class="glyphicon glyphicon-plus-sign add-input"></span></span>
        <?php echo Form::select('permissions', $permission_values, '', ["class"=>"form-control permission-select"]); ?>

    </div>
    <span class="text-danger"><?php echo $errors->first('permissions'); ?></span>
    <?php echo Form::hidden('id', $user->id); ?>

    
    <?php echo Form::hidden('operation', 1); ?>

</div>
<?php if(! $user->exists): ?>
    <div class="form-group">
        <span class="text-danger"><h5>You need to create the user first.</h5></span>
    </div>
<?php endif; ?>
<?php echo Form::close(); ?>



<?php if( $presenter->permissions ): ?>
    <?php $__currentLoopData = $presenter->permissions_obj; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo Form::open(["route" => "users.edit.permission", "name" => $permission->permission, "role"=>"form"]); ?>

        <div class="form-group">
            <div class="input-group">
                <span class="input-group-addon form-button button-del-perm" name="<?php echo $permission->permission; ?>"><span
                        class="glyphicon glyphicon-minus-sign add-input"></span></span>
                <?php echo Form::text('permission_desc', $permission->name, ['class' => 'form-control', 'readonly' => 'readonly']); ?>

                <?php echo Form::hidden('permissions', $permission->permission); ?>

                <?php echo Form::hidden('id', $user->id); ?>

                
                <?php echo Form::hidden('operation', 0); ?>

            </div>
        </div>
        <?php echo Form::close(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php elseif($user->exists): ?>
    <span class="text-warning"><h5>There is no permission associated to the user.</h5></span>
<?php endif; ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <script>
        $(".button-add-perm").click(function () {
            <?php if($user->exists): ?>
            $('.form-add-perm').submit();
            <?php endif; ?>
        });
        $(".button-del-perm").click(function () {

            var _name = $(this).attr('name');
            $('form[name=' + _name + ']').submit();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/user/perm.blade.php ENDPATH**/ ?>