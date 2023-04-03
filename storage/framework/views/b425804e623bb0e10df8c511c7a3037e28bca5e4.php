<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_admin.'.pages.group-list'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

            <div class="col-md-9">
                
                <?php $message = Session::get('message'); ?>
                <?php if( isset($message) ): ?>
                    <div class="alert alert-success"><?php echo $message; ?></div>
                <?php endif; ?>
                
                <?php if($errors && ! $errors->isEmpty() ): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin"><i
                                class="fa fa-group"></i> <?php echo $request->all() ? 'Search results:' : 'Groups'; ?></h3>
                    </div>
                    <div class="panel-body">
                        <!--BODY-->
                        <?php echo Form::open(['route'=>['groups.delete'], 'method' => 'get', 'class'=>'form-responsive']); ?>

                            <?php echo $__env->make('package-acl::admin.group.groups-table', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php echo csrf_field(); ?>

                        <?php echo Form::close(); ?>


                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <?php echo $__env->make('package-acl::admin.group.search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(".delete").click(function () {
            return confirm("<?php echo trans($plang_admin.'.messages.user-delete'); ?>");
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/group/list.blade.php ENDPATH**/ ?>