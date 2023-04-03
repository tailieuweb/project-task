<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_front.'.pages.login'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title bariol-thin">
                        <?php echo trans($plang_front.'.pages.login'); ?>

                    </h3>
                </div>
                <?php $message = Session::get('message'); ?>
                <?php if( isset($message) ): ?>
                    <div class="alert alert-success"><?php echo $message; ?></div>
                <?php endif; ?>
                <?php if($errors && ! $errors->isEmpty() ): ?>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
                <div class="my-acl-form panel-body">
                    <?php echo Form::open(array('url' => URL::route("user.login"), 'method' => 'post') ); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <!--email-->
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                        'name' => 'email',
                                        'placeholder' => trans($plang_front.'.labels.email'),
                                        'icon' => '<span class="input-group-addon"><i class="fa fa-envelope"></i></span>',
                                        'required' => true,
                                        'errors' => $errors                                        
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <?php echo $__env->make('package-category::front.partials.input_text', [
                                        'name' => 'password',
                                        'placeholder' => trans($plang_front.'.labels.password'),
                                        'icon' => '<span class="input-group-addon"><i class="fa fa-lock"></i></span>',
                                        'required' => true,
                                        'errors' => $errors,
                                        'type' => 'password'
                                    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>

                    <div class="row">
                        <!--captcha-->
                        <?php if(isset($captcha) ): ?>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <?php echo $__env->make('package-category::front.partials.input_text', [
                                    'name' => 'captcha_text',
                                    'placeholder' => trans($plang_front.'.labels.captcha'),
                                    'icon' => '<span class="input-group-addon"><i class="fa fa-braille" aria-hidden="true"></i></span>',
                                    'required' => true,
                                    'errors' => $errors,
                                    'password' => true
                                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                    <span id="captcha-img-container">
                                        <?php echo $__env->make('package-acl::client.auth.captcha-image', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    </span>
                                        <a id="captcha-gen-button" href="#"
                                           class="btn btn-small btn-info margin-left-5">
                                            <i class="fa fa-refresh"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        <?php endif; ?>
                    </div>

                    <?php echo Form::label('remember','Ghi nhớ đăng nhập'); ?>

                    <?php echo Form::checkbox('remember'); ?>

                    <input type="submit" value="Login" class="btn btn-info btn-block">
                    <?php echo Form::close(); ?>

                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-12 margin-top-10">
				 <?php echo link_to_route('user.recovery-password','Quên mật khẩu?'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::client.layouts.base', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/client/auth/login.blade.php ENDPATH**/ ?>