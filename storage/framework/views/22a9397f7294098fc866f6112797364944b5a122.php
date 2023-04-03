<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_admin.'.pages.user-edit'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            
            <?php $message = Session::get('message'); ?>
            <?php if( isset($message) ): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if($errors->has('model') ): ?>
                <div class="alert alert-danger"><?php echo $errors->first('model'); ?></div>
            <?php endif; ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title bariol-thin">
                                <?php echo isset($user->id) ? '<i class="fa fa-pencil"></i> Edit user' : '<i class="fa fa-user"></i> Create user'; ?>

                            </h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-md-6 col-xs-6">
                        <h4><?php echo trans($plang_admin.'.labels.user-profile'); ?> </h4>
                    <?php echo Form::model($user, [ 'url' => URL::route('users.edit')] ); ?>

                    
                    <?php echo Form::password('__to_hide_password_autocomplete', ['class' => 'hidden']); ?>

                    <?php echo Form::hidden('id'); ?>

                    <?php echo Form::hidden('form_name','user'); ?>


                    <!-- email text field -->
                        <div class="form-group">
                            <?php echo Form::label('email',trans($plang_admin.'.labels.email').':*'); ?>

                            <?php echo Form::text('email', null, ['class' => 'form-control', 'placeholder' => 'user email', 'autocomplete' => 'off']); ?>

                        </div>
                        <span class="text-danger"><?php echo $errors->first('email'); ?></span>

                        <!-- Password -->
                        <div class="row">
                            <div class="col-md-6">
                                <!-- password text field -->
                                <div class="form-group">
                                    <?php echo Form::label('password',isset($user->id) ? trans($plang_admin.'.labels.change-password').':' : trans($plang_admin.'.labels.password').':'); ?>

                                    <?php echo Form::password('password', ['class' => 'form-control', 'autocomplete' => 'off', 'placeholder' => '']); ?>

                                </div>
                                <span class="text-danger"><?php echo $errors->first('password'); ?></span>
                            </div>
                            <div class="col-md-6">
                                <!-- password_confirmation text field -->
                                <div class="form-group">
                                    <?php echo Form::label('password_confirmation',isset($user->id) ? trans($plang_admin.'.labels.confirm-change-password').':' : trans($plang_admin.'.labels.confirm-password').':'); ?>

                                    <?php echo Form::password('password_confirmation', ['class' => 'form-control', 'placeholder' => '','autocomplete' => 'off']); ?>

                                </div>
                                <span class="text-danger"><?php echo $errors->first('password_confirmation'); ?></span>
                            </div>
                        </div>
                        <!-- End Password -->

                        <!-- Status -->
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label("activated",trans($plang_admin.'.labels.active').':'); ?>

                                    <?php echo Form::select('activated', ["1" => "Yes", "0" => "No"], (isset($user->activated) && $user->activated) ? $user->activated : "0", ["class"=> "form-control"] ); ?>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo Form::label("banned",trans($plang_admin.'.labels.banned').':'); ?>

                                    <?php echo Form::select('banned', ["1" => "Yes", "0" => "No"], (isset($user->banned) && $user->banned) ? $user->banned : "0", ["class"=> "form-control"] ); ?>

                                </div>
                            </div>
                        </div>
                        <!-- End status -->

                        <!--BUTTONS-->
                        <div class='btn-form'>
                            <a href="<?php echo URL::route('users.profile.edit',['user_id' => $user->id]); ?>"
                               class="btn btn-primary pull-right margin-left-5" <?php echo ! isset($user->id) ? 'disabled="disabled"' : ''; ?>>
                                <i class="fa fa-user"></i> Edit profile</a>

                            <?php if($user->deleted_at): ?>
                                <a href="<?php echo URL::route('users.restore',['id' => $user->id, '_token' => csrf_token()]); ?>"
                                   class="btn btn-success pull-right margin-left-5 restore">
                                    <?php echo trans($plang_admin.'.buttons.restore'); ?>

                                </a>
                            <?php else: ?>
                                <a href="<?php echo URL::route('users.delete',['id' => $user->id, '_token' => csrf_token()]); ?>"
                                   class="btn btn-warning pull-right margin-left-5 delete">
                                    <?php echo trans($plang_admin.'.buttons.delete'); ?>

                                </a>
                            <?php endif; ?>
                            <?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

                        </div>
                        <?php echo Form::close(); ?>

                    </div>

                    <div class="col-md-6 col-xs-6">
                        <h4><i class="fa fa-users"></i> <?php echo trans($plang_admin.'.labels.group').':'; ?> </h4>
                        <?php echo $__env->make('package-acl::admin.user.groups', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


                        <h4><i class="fa fa-lock"></i> <?php echo trans($plang_admin.'.labels.permission-name').':'; ?></h4>

                        <?php echo $__env->make('package-acl::admin.user.perm', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <script>
        $(".delete").click(function () {
            return confirm("<?php echo trans($plang_admin.'.messages.user-delete'); ?>");
        });
        $(".restore").click(function () {
            return confirm("<?php echo trans($plang_admin.'.messages.user-restore'); ?>");
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/user/edit.blade.php ENDPATH**/ ?>