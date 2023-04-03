<!------------------------------------------------------------------------------
| List of elements in task form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['usertask.post', 'id' => @$item->tasks->task_id],  'files'=>true, 'method' => 'post']); ?>


<!--BUTTONS-->
<div class='btn-form'>

    <!-- SAVE BUTTON -->
    <?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right ")); ?>

    <!-- /SAVE BUTTON -->
</div>
<!--/BUTTONS-->

<!--TAB MENU-->
<ul class="nav nav-tabs">
    <!--MENU 1-->
    <li class="active">
        <a data-toggle="tab" href="#menu_1">
            <?php echo trans($plang_admin.'.tabs.usermenu_1'); ?>

        </a>
    </li>

    <!--MENU 2-->
    <li>
        <a data-toggle="tab" href="#menu_2">
            <?php echo trans($plang_admin.'.tabs.usermenu_2'); ?>

        </a>
    </li>


</ul>
<!--/TAB MENU-->

<!--TAB CONTENT-->
<div class="tab-content">

    <!--MENU 1-->
    <div id="menu_1" class="tab-pane fade in active">

        <!--STATUS-->
        <?php echo $__env->make('package-category::admin.partials.select_single', [
            'name' => 'status',
            'label' => trans($plang_admin.'.form.status'),
            'value' => @$item->status,
            'items' => $status,
            'description' => trans($plang_admin.'.description.status'),
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <!--Notes->
        <?php echo $__env->make('package-category::admin.partials.textarea', [
            'name' => 'notes',
            'label' => trans($plang_admin.'.labels.notes'),
            'value' => @$item->notes,
            'description' => trans($plang_admin.'.description.notes'),
            'tinymce' => false,
            'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE OVERVIEW-->
    </div>

    <!--MENU 2-->
    <div id="menu_2" class="tab-pane fade">
        <!--TASK NAME-->
        <?php echo $__env->make('package-category::admin.partials.input_text', [
            'name' => 'task_name',
            'label' => trans($plang_admin.'.labels.name'),
            'value' => @$item->tasks->task_name,
            'description' => trans($plang_admin.'.description.name'),
            'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/TASK NAME-->

            <!--TASK SLUG-->
        <?php echo $__env->make('package-category::admin.partials.input_slug', [
            'name' => 'task_slug',
            'id' => 'task_slug',
            'ref' => 'task_name',
            'label' => trans($plang_admin.'.labels.slug'),
            'value' => @$item->tasks->task_slug,
            'description' => trans($plang_admin.'.description.slug'),
            'errors' => $errors,
            'hidden' => true,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/TASK SLUG-->

        <div class="row">
            <div class='col-md-4'>
                <!--START DATE-->
            <?php $task_start_date = null ?>
            <?php if(isset($item->tasks->task_end_date)): ?>
                <?php $task_start_date = date('d-m-Y', strtotime($item->tasks->task_start_date)) ?>
            <?php endif; ?>
            <?php echo $__env->make('package-category::admin.partials.input_date', [
                'name' => 'task_start_date',
                'id' => 'datepicker_start_date',
                'label' => trans($plang_admin.'.labels.start_date'),
                'value' => $task_start_date,
                'description' => trans($plang_admin.'.description.start_date'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/START DATE-->
            </div>
            <div class='col-md-4'>
                <!--END DATE-->
            <?php $task_end_date = null ?>
            <?php if(isset($item->tasks->task_end_date)): ?>
                <?php $task_end_date = date('d-m-Y', strtotime($item->tasks->task_end_date)) ?>
            <?php endif; ?>
            <?php echo $__env->make('package-category::admin.partials.input_date', [
                'name' => 'task_end_date',
                'id' => 'datepicker_end_date',
                'label' => trans($plang_admin.'.labels.end_date'),
                'value' => $task_end_date,
                'description' => trans($plang_admin.'.description.end_date'),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!--/END DATE-->
            </div>
            <div class="col-md-4">
                <!-- LIST OF CATEGORIES -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'category_id',
                'label' => trans($plang_admin.'.labels.category'),
                'items' => $categories,
                'value' => @$item->tasks->category_id,
                'description' => trans($plang_admin.'.description.category', [
                'href' => URL::route('categories.list', ['_key' => $context->context_key])
                ]),
                'errors' => $errors,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- /LIST OF CATEGORIES -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <!--SIZE-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'task_size',
                    'label' => trans($plang_admin.'.form.task_size'),
                    'value' => @$item->tasks->task_size,
                    'items' => $size,
                    'description' => trans($plang_admin.'.description.task_size'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-4">
                <!--PRIORITY-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'task_priority',
                    'label' => trans($plang_admin.'.form.task_priority'),
                    'value' => @$item->tasks->task_priority,
                    'items' => $priority,
                    'description' => trans($plang_admin.'.description.task_priority'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>


        </div>

        <!--SAMPLE OVERVIEW-->
        <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'task_overview',
        'label' => trans($plang_admin.'.labels.overview'),
        'value' => @$item->tasks->task_overview,
        'description' => trans($plang_admin.'.description.overview'),
        'tinymce' => false,
        'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE OVERVIEW-->

            <!--SAMPLE DESCRIPTION-->
        <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'task_description',
        'label' => trans($plang_admin.'.labels.description'),
        'value' => @$item->tasks->task_description,
        'description' => trans($plang_admin.'.description.description'),
        'rows' => 50,
        'tinymce' => true,
        'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE DESCRIPTION-->


    </div>

</div>
<!--/TAB CONTENT-->

<!--HIDDEN FIELDS-->
<div class='hidden-field'>
    <?php echo Form::hidden('id',@$item->id); ?>

    <?php echo Form::hidden('context',$request->get('context',null)); ?>

</div>
<!--/HIDDEN FIELDS-->

<?php echo Form::close(); ?>

<!------------------------------------------------------------------------------
| End list of elements in task form
|------------------------------------------------------------------------------>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/moment-with-locales-2.29.1.min.js'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/bootstrap-datetimepicker-4.17.47.min.js'); ?>

    <script type='text/javascript'>
        $(document).ready(function () {
            //https://getdatepicker.com/4/#bootstrap-3-datepicker-v4-docs
            $(function () {
                $('#datepicker_start_date').datetimepicker({
                    format: 'DD-MM-YYYY'
                });
                $('#datepicker_end_date').datetimepicker({
                    useCurrent: false, //Important! See issue #1075
                    format: 'DD-MM-YYYY'
                });
                $("#datepicker_start_date").on("dp.change", function (e) {
                    $('#datepicker_end_date').data("DateTimePicker").minDate(e.date);
                });
                $("#datepicker_end_date").on("dp.change", function (e) {
                    $('#datepicker_start_date').data("DateTimePicker").maxDate(e.date);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/user/task-form.blade.php ENDPATH**/ ?>