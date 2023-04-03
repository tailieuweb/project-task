<!------------------------------------------------------------------------------
| List of elements in category form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['contexts.post', 'id' => @$item->id],  'files'=>true, 'method' => 'post']); ?>


<!--BUTTONS-->
<div class='btn-form'>
    <!-- DELETE BUTTON -->
    <?php if($item): ?>
        <a href="<?php echo URL::route('contexts.delete',['id' => @$item->id, '_token' => csrf_token()]); ?>"
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
            <?php echo trans($plang_admin.'.tabs.basic'); ?>

        </a>
    </li>

    <!--MENU 2-->
    <li>
        <a data-toggle="tab" href="#menu_2">
            <?php echo trans($plang_admin.'.tabs.guide'); ?>

        </a>
    </li>

</ul>
<!--/TAB MENU-->

<!--TAB CONTENT-->
<div class="tab-content">

    <!--BASIC-->
    <div id="menu_1" class="tab-pane fade in active">

        <!--NAME-->
    <?php echo $__env->make('package-category::admin.partials.input_text', [
        'name' => 'context_name',
        'label' => trans($plang_admin.'.labels.context-name'),
        'value' => @$item->context_name,
        'description' => trans($plang_admin.'.descriptions.context-name'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/NAME-->

        <!--REF-->
    <?php echo $__env->make('package-category::admin.partials.input_text', [
        'name' => 'context_ref',
        'label' => trans($plang_admin.'.labels.context-ref'),
        'value' => @$item->context_ref,
        'description' => trans($plang_admin.'.descriptions.context-ref'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/REF-->

        <!--CONTEXT KEY-->
    <?php echo $__env->make('package-category::admin.partials.checkbox', [
        'name' => 'context_key',
        'label' => trans($plang_admin.'.labels.context-key'),
        'value' => @$item->context_key,
        'items' => [
                   'add' => trans($plang_admin.'.checkboxs.context-key.add'),
                ],
        'description' => trans($plang_admin.'.descriptions.context-key'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!--STATUS-->
        <?php echo $__env->make('package-category::admin.partials.radio', [
            'name' => 'context_status',
            'label' => trans($plang_admin.'.labels.context-status'),
            'value' => @$item->status,
            'description' => trans($plang_admin.'.descriptions.context-status'),
            'items' => $statuses
        ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

    <!--GUIDE-->
    <div id="menu_2" class="tab-pane fade">
        <h3>Menu 1</h3>
        <p>Some content in menu 1.</p>
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
| End list of elements in category form
|------------------------------------------------------------------------------>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/context-form.blade.php ENDPATH**/ ?>