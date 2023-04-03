<?php $__env->startSection('title'); ?>
    <?php echo e(trans($plang_admin.'.pages.title-lang')); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">

            <!--LIST OF ITEMS-->
            <div class="col-md-8">

                <div class="panel panel-info">

                    <!--HEADING-->
                    <div class="panel-heading">
                        <h3 class="panel-title bariol-thin">
                            <i class="fa fa-language" aria-hidden="true"></i>
                            <?php echo trans($plang_admin.'.pages.title-lang'); ?>

                        </h3>
                    </div>

                    <!--DESCRIPTION-->
                    <div class='panel-info panel-description'>
                        <?php echo trans($plang_admin.'.descriptions.lang'); ?></h4>
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
                        <?php echo Form::open(['route'=>['task.lang'], 'method' => 'post']); ?>


                            <div class='btn-form'>

                                <!-- SAVE BUTTON -->
                                <?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

                                <!-- /SAVE BUTTON -->

                            </div>

                        <!--TAB MENU-->
                        <?php if(isset($langs)): ?>
                        <ul class="nav nav-tabs">
                            <?php $__currentLoopData = $langs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <!--LANG TAB-->
                            <li class="<?php echo ($key==$lang)?'active':''; ?>">
                                <a data-toggle="tab" href="#<?php echo e($key); ?>">
                                    <?php echo $value; ?>

                                </a>
                            </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <?php endif; ?>
                        <!--/TAB MENU-->

                        <div class="tab-content">

                        <!--LANG CONTENT-->
                        <?php $__currentLoopData = $lang_contents; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $content): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div id="<?php echo e($key); ?>" class="tab-pane fade <?php echo ($key==$lang)?'in active':''; ?>">
                                <?php echo Form::textarea($key, $content, ['class' => 'form-control textarea-margin', 'size' => '30x50']); ?>

                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>


                            <?php echo Form::close(); ?>

                    </div>
                    <!--/BODY-->

                </div>
            </div>
            <!--/LIST OF ITEMS-->

            <!--SEARCH-->
            <div class="col-md-4">
                <?php echo $__env->make('package-task::admin.task-lang-backup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/SEARCH-->

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/admin/task-lang.blade.php ENDPATH**/ ?>