<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i> Group search</h3>
    </div>
    <div class="panel-body">
        <?php echo Form::open(['route' => 'groups.list','method' => 'get']); ?>

        <div class="form-group">
            <a href="<?php echo URL::route('groups.list'); ?>"
               class="btn btn-default search-reset"><?php echo trans($plang_admin.'.buttons.reset'); ?></a>
            <?php echo Form::submit(trans($plang_admin.'.buttons.submit'), ["class" => "btn btn-info", "id" => "search-submit"]); ?>

        </div>
        <!-- KEYWORD -->
        <?php echo $__env->make('package-category::admin.partials.input_text', [
            'name' => 'keyword',
            'placehover' => trans($plang_admin.'.labels.keyword'),
            'label' => trans($plang_admin.'.labels.keyword'),
            'value' => @$params['keyword'],
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <span class="text-danger"><?php echo $errors->first('keyword'); ?></span>

        <!-- SORTING -->
        <?php echo $__env->make('package-category::admin.partials.sorting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo Form::close(); ?>

    </div>
</div>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/group/search.blade.php ENDPATH**/ ?>