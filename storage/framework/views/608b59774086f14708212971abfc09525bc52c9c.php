<div class="panel panel-info">
    <!-- HEADING -->
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin">
            <i class="fa fa-search"></i><?php echo trans($plang_admin.'.search.user'); ?>

        </h3>
    </div>

    <!-- BODY -->
    <div class="panel-body">
        <?php echo Form::open(['route' => 'users.list','method' => 'get']); ?>

        <div class="form-group">
            <a href="<?php echo URL::route('users.list'); ?>"
               class="btn btn-default search-reset"><?php echo trans($plang_admin.'.buttons.reset'); ?></a>
            <?php echo Form::submit(trans($plang_admin.'.search.btn-submit'), ["class" => "btn btn-info", "id" => "search-submit"]); ?>

        </div>

        <!-- KEYWORD -->
        <?php echo $__env->make('package-category::admin.partials.input_text', [
            'name' => 'keyword',
            'placehover' => trans($plang_admin.'.labels.keyword'),
            'label' => trans($plang_admin.'.labels.keyword'),
            'value' => @$params['keyword'],
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <span class="text-danger"><?php echo $errors->first('keyword'); ?></span>

        <button type="button" class="btn btn-info" data-toggle="collapse"
                data-target="#more_filter"><?php echo trans($plang_admin.'.search.btn-advance'); ?></button>

        <div id='more_filter' class='collapse'>

            <!-- EMAIL -->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'email',
                'placehover' => trans($plang_admin.'.labels.email'),
                'label' => trans($plang_admin.'.labels.email'),
                'value' => @$params['email'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="text-danger"><?php echo $errors->first('email'); ?></span>

            <!-- FULL NAME-->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'full_name',
                'placehover' => trans($plang_admin.'.labels.full_name'),
                'label' => trans($plang_admin.'.labels.full_name'),
                'value' => @$params['full_name'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="text-danger"><?php echo $errors->first('full_name'); ?></span>

            <!-- FIRST NAME -->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'first_name',
                'placehover' => trans($plang_admin.'.labels.first_name'),
                'label' => trans($plang_admin.'.labels.first_name'),
                'value' => @$params['first_name'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="text-danger"><?php echo $errors->first('first_name'); ?></span>

            <!-- LAST NAME -->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'last_name',
                'placehover' => trans($plang_admin.'.labels.last_name'),
                'label' => trans($plang_admin.'.labels.last_name'),
                'value' => @$params['last_name'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="text-danger"><?php echo $errors->first('last_name'); ?></span>

            <!-- SEX -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'sex',
                'label' => trans($plang_admin.'.labels.sex'),
                'value' => @$params['sex'],
                'items' => trans($plang_admin . '.sex'),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="text-danger"><?php echo $errors->first('sex'); ?></span>

            <!-- CATEGORY -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'category_id',
                'label' => trans($plang_admin.'.labels.category'),
                'value' => @$params['category_id'],
                'items' => $pluck_select_category_department,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <span class="text-danger"><?php echo $errors->first('category_id'); ?></span>

            <!-- ACTIVE -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'activated',
                'label' => trans($plang_admin.'.labels.active'),
                'value' => @$params['activated'],
                'items' => trans($plang_admin . '.active'),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--BANNED-->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'banned',
                'label' => trans($plang_admin.'.labels.banned'),
                'value' => @$params['banned'],
                'items' => trans($plang_admin . '.banned'),
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--GROUP-->
            <?php
                $group_values = ['' => trans($plang_admin . '.form.any')] + $group_values;
            ?>
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'group_id',
                'label' => trans($plang_admin.'.labels.group'),
                'value' => @$params['group_id'],
                'items' => $group_values
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--SORTING-->
            <?php echo $__env->make('package-category::admin.partials.sorting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        </div>
        <?php echo Form::close(); ?>

    </div>
</div>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/user/search.blade.php ENDPATH**/ ?>