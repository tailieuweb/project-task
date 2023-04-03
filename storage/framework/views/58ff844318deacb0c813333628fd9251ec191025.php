<div class="row">
    <div class="col-md-6">
        <h4><i class="fa fa-picture-o"></i><?php echo trans($plang_admin.'.labels.avatar'); ?></h4>
        <div class="profile-avatar">
            <img src="<?php echo $user_profile->presenter()->avatar; ?>">
        </div>
    </div>
    <div class="col-md-6">
        <?php echo Form::open(['route' => 'users.profile.changeavatar', 'method' => 'POST', 'files' => true]); ?>

        <?php echo Form::label('avatar',$user_profile->avatar ? trans($plang_admin.'.labels.update-avt').':' : trans($plang_admin.'.labels.change-avt').':'); ?>

        <div class="form-group">
            <?php echo Form::file('avatar', ['class' => 'form-control']); ?>

            <span class="text-danger"><?php echo $errors->first('avatar'); ?></span>
        </div>
        <?php echo Form::hidden('user_id', $user_profile->user_id); ?>

        <?php echo Form::hidden('user_profile_id', $user_profile->id); ?>

        <div class="form-group">
            <?php echo Form::submit(trans($plang_admin.'.buttons.update-avatar'), ['class' => 'btn btn-info']); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
</div><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/user/partials/avatar_upload.blade.php ENDPATH**/ ?>