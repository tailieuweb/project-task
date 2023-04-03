<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin"><i class="fa fa-search"></i>
            <?php echo trans($plang_admin.'.labels.title-search') ?>
        </h3>
    </div>
    <div class="panel-body">

        <?php echo Form::open(['route' => 'task.list','method' => 'get']); ?>


            <!--BUTTONS-->
            <div class="form-group">
                <a href="<?php echo URL::route('task.list', ['context' => @$params['context']]); ?>" class="btn btn-default search-reset">
                    <?php echo trans($plang_admin.'.buttons.reset'); ?>

                </a>
                <?php echo Form::submit(trans($plang_admin.'.buttons.search').'', ["class" => "btn btn-info", 'id' => 'search-submit']); ?>

            </div>

            <!-- KEYWORD -->
            <?php echo $__env->make('package-category::admin.partials.input_text', [
                'name' => 'keyword',
                'label' => trans($plang_admin.'.form.keyword'),
                'value' => @$params['keyword'],
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- START DATE -->
            <?php echo $__env->make('package-category::admin.partials.input_date', [
                'name' => 'task_start_date',
                'label' => trans($plang_admin.'.form.start_date'),
                'value' => @$params['task_start_date']?$params['task_start_date']:'',
                'id' => 'search_start_date',
                'errors' => null,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- END DATE -->
            <?php echo $__env->make('package-category::admin.partials.input_date', [
                'name' => 'task_end_date',
                'label' => trans($plang_admin.'.form.end_date'),
                'value' => @$params['task_end_date']?$params['task_end_date']:'',
                'id' => 'search_end_date',
                'errors' => null,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- STATUS -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'status',
                'label' => trans($plang_admin.'.form.status'),
                'value' => @$params['status']?$params['status']:'99',
                'items' => $status,
                'errors' => null,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- SIZE -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'task_size',
                'label' => trans($plang_admin.'.form.task_size'),
                'value' => @$params['task_size']?$params['task_size']:'',
                'items' => $size,
                'errors' => null,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- PRIORITY -->
            <?php echo $__env->make('package-category::admin.partials.select_single', [
                'name' => 'task_priority',
                'label' => trans($plang_admin.'.form.task_priority'),
                'value' => @$params['task_priority']?$params['task_priority']:'',
                'items' => $priority,
                'errors' => null,
            ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!--SORTING-->
            <?php echo $__env->make('package-category::admin.partials.sorting', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <div class='hidden-field'>
                <?php echo Form::hidden('context',@$request->get('context',null)); ?>

                <?php echo csrf_field(); ?>

            </div>

        <?php echo Form::close(); ?>

    </div>
</div>
<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/moment-with-locales-2.29.1.min.js'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/bootstrap-datetimepicker-4.17.47.min.js'); ?>

    <script type='text/javascript'>
        $(document).ready(function () {
            //https://getdatepicker.com/4/#bootstrap-3-datepicker-v4-docs
            $(function () {
                $('#search_start_date').datetimepicker({
                    format: 'DD-MM-YYYY'
                });
                $('#search_end_date').datetimepicker({
                    useCurrent: false, //Important! See issue #1075
                    format: 'DD-MM-YYYY'
                });
                $("#search_start_date").on("dp.change", function (e) {
                    $('#search_end_date').data("DateTimePicker").minDate(e.date);
                });
                $("#search_end_date").on("dp.change", function (e) {
                    $('#search_end_date').data("DateTimePicker").maxDate(e.date);
                });
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/admin/task-search.blade.php ENDPATH**/ ?>