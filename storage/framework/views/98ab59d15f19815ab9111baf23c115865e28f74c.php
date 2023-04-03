<!------------------------------------------------------------------------------
| List of elements in task form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['task.post', 'id' => @$item->id],  'files'=>true, 'method' => 'post']); ?>


<!--BUTTONS-->
<div class='btn-form'>
    <!-- DELETE BUTTON -->
    <?php if($item): ?>
    <a href="<?php echo URL::route('task.delete',['id' => @$item->id, '_token' => csrf_token()]); ?>"
       class="btn btn-danger pull-right margin-left-5 delete">
        <?php echo trans($plang_admin.'.buttons.delete'); ?>

    </a>
    <?php endif; ?>
    <!-- DELETE BUTTON -->

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
            <?php echo trans($plang_admin.'.tabs.menu_1'); ?>

        </a>
    </li>

    <!--MENU 2-->
    <li>
        <a data-toggle="tab" href="#menu_2">
            <?php echo trans($plang_admin.'.tabs.menu_2'); ?>

        </a>
    </li>

    <!--MENU 3-->
    <li>
        <a data-toggle="tab" href="#menu_3">
            <?php echo trans($plang_admin.'.tabs.menu_3'); ?>

        </a>
    </li>

    <!--MENU 4-->
    <li>
        <a data-toggle="tab" href="#menu_4">
            <?php echo trans($plang_admin.'.tabs.menu_4'); ?>

        </a>
    </li>

</ul>
<!--/TAB MENU-->

<!--TAB CONTENT-->
<div class="tab-content">

    <!--MENU 1-->
    <div id="menu_1" class="tab-pane fade in active">

        <!--TASK NAME-->
        <?php echo $__env->make('package-category::admin.partials.input_text', [
            'name' => 'task_name',
            'label' => trans($plang_admin.'.labels.name'),
            'value' => @$item->task_name,
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
            'value' => @$item->task_slug,
            'description' => trans($plang_admin.'.description.slug'),
            'errors' => $errors,
            'hidden' => true,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/TASK SLUG-->

        <div class="row">
            <div class='col-md-4'>
                <!--START DATE-->
                <?php $task_start_date = null ?>
                <?php if(isset($item->task_end_date)): ?>
                    <?php $task_start_date = date('d-m-Y', strtotime($item->task_start_date)) ?>
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
                <?php if(isset($item->task_end_date)): ?>
                    <?php $task_end_date = date('d-m-Y', strtotime($item->task_end_date)) ?>
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
                    'value' => @$item->category_id,
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
                    'value' => @$item->task_size,
                    'items' => $size,
                    'description' => trans($plang_admin.'.description.task_size'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-4">
                <!--PRIORITY-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'task_priority',
                    'label' => trans($plang_admin.'.form.task_priority'),
                    'value' => @$item->task_priority,
                    'items' => $priority,
                    'description' => trans($plang_admin.'.description.task_priority'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <div class="col-md-4">
                <!--STATUS-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'status',
                    'label' => trans($plang_admin.'.form.status'),
                    'value' => @$item->status,
                    'items' => $status,
                    'description' => trans($plang_admin.'.description.status'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>

    </div>

    <!--MENU 2-->
    <div id="menu_2" class="tab-pane fade">
        <!--SAMPLE OVERVIEW-->
        <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'task_overview',
        'label' => trans($plang_admin.'.labels.overview'),
        'value' => @$item->task_overview,
        'description' => trans($plang_admin.'.description.overview'),
        'tinymce' => false,
        'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE OVERVIEW-->

        <!--SAMPLE DESCRIPTION-->
        <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'task_description',
        'label' => trans($plang_admin.'.labels.description'),
        'value' => @$item->task_description,
        'description' => trans($plang_admin.'.description.description'),
        'rows' => 50,
        'tinymce' => true,
        'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE DESCRIPTION-->
    </div>

    <!--MENU 3-->
    <div id="menu_3" class="tab-pane fade">
        <!--SAMPLE IMAGE-->
        <?php echo $__env->make('package-category::admin.partials.input_image', [
        'name' => 'task_image',
        'label' => trans($plang_admin.'.labels.image'),
        'value' => @$item->task_image,
        'description' => trans($plang_admin.'.description.image'),
        'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE IMAGE-->

        <!--SAMPLE FILES-->
        <?php echo $__env->make('package-category::admin.partials.input_files', [
        'name' => 'files',
        'label' => trans($plang_admin.'.labels.files'),
        'value' => @$item->task_files,
        'description' => trans($plang_admin.'.description.files'),
        'errors' => $errors,
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!--/SAMPLE FILES-->
    </div>

    <!--MENU 4-->
    <div id="menu_4" class="tab-pane fade">
        <div class="row">
            <div class="col-md-4">
                <!--Invite member-->
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'invite_member',
                    'label' => trans($plang_admin.'.labels.invite_member'),
                    'items' => @$members,
                    'description' => trans($plang_admin.'.description.invite_member'),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!--/Invite member-->
            </div>
            <div class="col-md-8">
                <div class="btn-button-member-assignee" style="padding: 25px">
                    <!-- Add member -->
                    <span class="btn btn-primary pull-left margin-left-5 add_member">
                        <?php echo trans($plang_admin.'.buttons.add_member'); ?>

                    </span>

                    <!-- Add all -->
                    <span class="btn btn-success pull-left margin-left-5 add_all_members">
                        <?php echo trans($plang_admin.'.buttons.add_all_member'); ?>

                    </span>

                    <!-- Reset all -->
                    <span class="btn btn-warning pull-left margin-left-5 reset_invited">
                        <?php echo trans($plang_admin.'.buttons.reset_invited'); ?>

                    </span>
                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-md-6">

                    <span><?php echo trans($plang_admin.'.description.invited_member_counter', ['number' => count($invitedMembers)]); ?></span>

                    <table class="table table-hover invited-members">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th><?php echo trans($plang_admin.'.labels.member_name'); ?></th>
                                <th><?php echo trans($plang_admin.'.labels.action'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <!--item template-->
                            <tr class="item-template invited-member">
                                <td class="member-counter"></td>
                                <td class="member-info">
                                    <input type="hidden" name="invited_member_id[]">
                                    <span class="member-name"></span>
                                </td>
                                <td class="delete-member">
                                    <a href="javascript:;" class="trash">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
            </div>
        </div>

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
<?php $__env->startSection('head_css'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('head_css'); ?>
    <?php echo HTML::style('packages/foostart/css/bootstrap-datetimepicker-4.17.47.css'); ?>

<?php $__env->stopSection(); ?>
<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/moment-with-locales-2.29.1.min.js'); ?>

    <?php echo HTML::script('packages/foostart/js/vendor/bootstrap-datetimepicker-4.17.47.min.js'); ?>

    <script type='text/javascript'>

        $(document).ready(function () {
            (function ($) {
                //All members
                var members = <?php echo json_encode($members) ?>;
                //Invited members
                var invitedMembers = <?php echo json_encode($invitedMembers) ?>;
                displayInvitedMembers();

                //Add event click deleting item
                $('.invited-member .delete-member').click(function () {
                    //Get member id
                    var member_id = $(this).parent().find('input').val();
                    if (invitedMembers.hasOwnProperty(member_id)) {
                        delete invitedMembers[member_id];
                        displayInvitedMembers();
                    }

                    return false;
                });

                //Add new member
                $('.add_member').click(function() {
                    var member_id = $('#invite_member').find(":selected").val();
                    var member_name = $('#invite_member').find(":selected").text();

                    if ($.isNumeric(member_id) && !invitedMembers.hasOwnProperty(member_id)) {
                        invitedMembers[member_id] = member_name;
                        displayInvitedMembers();
                    }

                });
                //Add all members
                $('.add_all_members').click(function() {
                    //Set all members to invited
                    invitedMembers = JSON.parse(JSON.stringify(members));
                    //Display
                    displayInvitedMembers();
                });
                //Reset invited
                $('.reset_invited').click(function (){
                    invitedMembers = {};
                    displayInvitedMembers();
                });

                function displayInvitedMembers() {
                    //Empty table invited members
                    var item = $('.invited-members' ).find('.item-template').clone(true);
                    $('.invited-members tbody').empty();
                    item.appendTo($('.invited-members tbody'));

                    //Display invited members
                    var counter = 1;

                    $.each( invitedMembers, function( id, name ) {
                        var item = $('.invited-members' ).find('.item-template').clone(true).removeClass('item-template');
                        item.find('.member-counter').html(counter);
                        item.find('input').val(id);
                        item.find('.member-name').html(name);
                        //append to last item
                        item.appendTo($('.invited-members tbody'));

                        counter++;

                    });

                }

            })(jQuery);

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
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/admin/task-form.blade.php ENDPATH**/ ?>