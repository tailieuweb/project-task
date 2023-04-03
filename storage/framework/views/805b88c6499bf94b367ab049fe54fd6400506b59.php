<?php $__env->startSection('title'); ?>
    <?php echo trans($plang_admin.'.pages.user-edit-profile'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

    <div class="row">
        <div class="col-md-12">
            
            <?php $message = Session::get('message'); ?>
            <?php if( isset($message) ): ?>
                <div class="alert alert-success"><?php echo $message; ?></div>
            <?php endif; ?>
            <?php if( $errors->has('model') ): ?>
                <div class="alert alert-danger"><?php echo $errors->first('model'); ?></div>
            <?php endif; ?>
            <div class="panel panel-info">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="panel-title bariol-thin"><i
                                    class="fa fa-user"></i> <?php echo trans($plang_admin.'.labels.user-profile'); ?></h3>
                        </div>
                    </div>
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-12">
                            <a href="<?php echo URL::route('users.edit',['id' => $user_profile->user_id]); ?>"
                               class="btn btn-info pull-right"><i
                                    class="fa fa-pencil-square-o"></i> <?php echo trans($plang_admin.'.labels.edit-user'); ?>

                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <?php if(! $use_gravatar): ?>
                                <?php echo $__env->make('package-acl::admin.user.partials.avatar_upload', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php else: ?>
                                <?php echo $__env->make('package-acl::admin.user.partials.show_gravatar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                            <h4><i class="fa fa-cubes"></i><?php echo trans($plang_admin.'.labels.user-data').':'; ?></h4>
                            <?php echo Form::model($user_profile,['route'=>'users.profile.edit', 'method' => 'post']); ?>


                            <div class="row">
                                <div class="col-md-6 col-xs-12">
                                    <!-- password text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('password',trans($plang_admin.'.labels.new-password').':'); ?>

                                        <?php echo Form::password('password', ['class' => 'form-control']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('password'); ?></span>
                                    <!-- password_confirmation text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('password_confirmation',trans($plang_admin.'.labels.confirm-password').':'); ?>

                                        <?php echo Form::password('password_confirmation', ['class' => 'form-control']); ?>

                                    </div>
                                    <!-- code text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('code',trans($plang_admin.'.labels.code').':'); ?>

                                        <?php echo Form::text('code', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('code'); ?></span>
                                    <!-- first_name text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('first_name',trans($plang_admin.'.labels.first_name').':'); ?>

                                        <?php echo Form::text('first_name', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('first_name'); ?></span>
                                    <!-- last_name text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('last_name',trans($plang_admin.'.labels.last_name').':'); ?>

                                        <?php echo Form::text('last_name', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('last_name'); ?></span>
                                    <!-- phone text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('phone',trans($plang_admin.'.labels.phone').':'); ?>

                                        <?php echo Form::text('phone', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('phone'); ?></span>
                                    <!-- state text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('state',trans($plang_admin.'.labels.state').':'); ?>

                                        <?php echo Form::text('state', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('state'); ?></span>
                                </div>
                                <div class="col-md-6 col-xs-12">

                                    <!-- var text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('var',trans($plang_admin.'.labels.vat').':'); ?>

                                        <?php echo Form::text('var', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('vat'); ?></span>
                                    <!-- city text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('city',trans($plang_admin.'.labels.city').':'); ?>

                                        <?php echo Form::text('city', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('city'); ?></span>
                                    <!-- country text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('country',trans($plang_admin.'.labels.country').':'); ?>

                                        <?php echo Form::text('country', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('country'); ?></span>
                                    <!-- sex text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('sex',trans($plang_admin.'.labels.sex').':'); ?>

                                        <?php $sex_values = trans($plang_admin . '.sex'); ?>
                                        <?php echo Form::select('sex', $sex_values, null, ["class" => "form-control"]); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('sex'); ?></span>
                                    <!-- device_token text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('device_token',trans($plang_admin.'.labels.device_token').':'); ?>

                                        <?php echo Form::text('device_token', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('device_token'); ?></span>

                                    <!-- level text field -->
                                    <div class="form-group">

                                        <?php echo Form::label('level_id',trans($plang_admin.'.labels.level').':'); ?>

                                        <?php echo Form::select('level_id', $pluck_select_category_level, null, ["class" => "form-control"]); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('level_id'); ?></span>
                                    <!-- category_id text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('category_id',trans($plang_admin.'.labels.category').':'); ?>

                                        <?php echo Form::select('category_id', $pluck_select_category_department, null, ["class" => "form-control"]); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('category_id'); ?></span>

                                    <!-- address text field -->
                                    <div class="form-group">
                                        <?php echo Form::label('address',trans($plang_admin.'.labels.address').':'); ?>

                                        <?php echo Form::text('address', null, ['class' => 'form-control', 'placeholder' => '']); ?>

                                    </div>
                                    <span class="text-danger"><?php echo $errors->first('address'); ?></span>
                                    
                                    <?php $__currentLoopData = $custom_profile->getAllTypesWithValues(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profile_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="form-group">
                                            <?php echo Form::label($profile_data->description); ?>

                                            <?php echo Form::text("custom_profile_{$profile_data->id}", $profile_data->value, ["class" => "form-control"]); ?>

                                            
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php echo Form::hidden('user_id', $user_profile->user_id); ?>

                                    <?php echo Form::hidden('id', $user_profile->id); ?>

                                    <?php echo Form::submit('Save',['class' =>'btn btn-info pull-right margin-bottom-30']); ?>

                                    <?php echo Form::close(); ?>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <?php if($can_add_fields): ?>
                                <?php echo $__env->make('package-acl::admin.user.custom-profile', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/user/profile.blade.php ENDPATH**/ ?>