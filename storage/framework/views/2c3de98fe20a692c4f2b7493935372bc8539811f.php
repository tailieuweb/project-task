<?php $__env->startSection('title'); ?>
    <?php echo e(trans($plang_admin.'.pages.title-list')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">

            <!--LIST OF ITEMS-->
            <div class="col-md-9">

                <div class="panel panel-info">

                    <!--HEADING-->
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin"><i class="fa fa-list-ul" aria-hidden="true"></i>
                            <?php echo $request->all() ? trans($plang_admin.'.pages.title-list-search') : trans($plang_admin.'.pages.title-list'); ?>

                        </h3>
                    </div>

                    <!--DESCRIPTION-->
                    <div class='panel-info panel-description'>
                        <?php echo trans($plang_admin.'.descriptions.list'); ?></h4>
                    </div>
                    <!--/DESCRIPTION-->

                    <!--MESSAGE-->
                    <?php $message = Session::get('message'); ?>
                    <?php if( isset($message) ): ?>
                        <div class="panel-info alert alert-success flash-message"><?php echo $message; ?></div>
                    <?php endif; ?>
                    <!--/MESSAGE-->

                    <!--ERRORS-->
                    <?php if($errors && ! $errors->isEmpty() ): ?>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="alert alert-danger flash-message"><?php echo $error; ?></div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    <!--/ERRORS-->

                    <!--BODY-->
                    <div class="panel-body">
                        <?php echo Form::open(['route'=>['pexcel.delete', 'id' => @$item->id], 'method' => 'get']); ?>


                            <?php echo $__env->make('package-pexcel::admin.pexcel-item', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                            <?php echo csrf_field(); ?>


                        <?php echo Form::close(); ?>

                    </div>
                    <!--/BODY-->

                </div>
            </div>
            <!--/LIST OF ITEMS-->

            <!--SEARCH-->
            <div class="col-md-3">
                <?php echo $__env->make('package-pexcel::admin.pexcel-search', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/SEARCH-->

    </div>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('footer_scripts'); ?>
    <!-- DELETE CONFIRM -->
    <script>
        $(".delete").click(function () {
            return confirm("<?php echo trans($plang_admin.'.confirms.delete'); ?>");
        });
    </script>
    <!-- /END DELETE CONFIRM -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-pexcel/Views/admin/pexcel-items.blade.php ENDPATH**/ ?>