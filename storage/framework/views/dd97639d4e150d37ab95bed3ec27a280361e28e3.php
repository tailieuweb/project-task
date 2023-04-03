<!------------------------------------------------------------------------------
| List of elements in category form
|------------------------------------------------------------------------------->

<?php echo Form::open(['route'=>['categories.post', 'id' => @$item->id, '_key' => $request->get('_key')],  'files'=>true, 'method' => 'POST']); ?>


<!--BUTTONS-->
<div class='btn-form'>
    <!-- DELETE BUTTON -->
    <?php if($item): ?>
        <a href="<?php echo URL::route('categories.delete',['id' => @$item->id, '_token' => csrf_token()]); ?>"
           class="btn btn-danger pull-right margin-left-5 delete">
            <?php echo trans($plang_admin.'.buttons.delete'); ?>

        </a>
<?php endif; ?>
<!-- DELETE BUTTON -->

    <!-- SAVE BUTTON -->
<?php echo Form::submit(trans($plang_admin.'.buttons.save'), array("class"=>"btn btn-info pull-right")); ?>

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
            <?php echo trans($plang_admin.'.tabs.advance'); ?>

        </a>
    </li>

    <!--MENU 3-->
    <li>
        <a data-toggle="tab" href="#menu_3">
            <?php echo trans($plang_admin.'.tabs.other'); ?>

        </a>
    </li>
</ul>
<!--/TAB MENU-->

<!--TAB CONTENT-->
<div class="tab-content">

    <!--MENU 1-->
    <div id="menu_1" class="tab-pane fade in active">

        <!--NAME-->
    <?php echo $__env->make('package-category::admin.partials.input_text', [
        'name' => 'category_name',
        'label' => trans($plang_admin.'.labels.category-name'),
        'value' => @$item->category_name,
        'description' => trans($plang_admin.'.descriptions.category-name'),
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/NAME-->

        <div class="row">

            <!--SLUG-->
            <div class='col-md-6'>

                <?php echo $__env->make('package-category::admin.partials.input_slug', [
                    'name' => 'category_slug',
                    'id' => 'category_slug',
                    'ref' => 'category_name',
                    'label' => trans($plang_admin.'.labels.category-slug'),
                    'value' => @$item->category_slug,
                    'description' => trans($plang_admin.'.descriptions.category-slug'),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            </div>
            <!--/SLUG-->

            <!-- CATEGORY PARENT -->
            <div class='col-md-6'>

                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'category_id_parent',
                    'label' => trans($plang_admin.'.labels.category-parent'),
                    'items' => $categories,
                    'value' => @$item->category_id_parent,
                    'description' => trans($plang_admin.'.descriptions.category-parent', [

                                ]),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>

        </div>

        <!--CATEGORY DESCRIPTION-->
    <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'category_description',
        'label' => trans($plang_admin.'.labels.description'),
        'value' => @$item->category_description,
        'description' => trans($plang_admin.'.descriptions.description'),
        'rows' => 20,
        'tinymce' => true,
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/CATEGORY DESCRIPTION-->

    </div>

    <!--MENU 2-->
    <div id="menu_2" class="tab-pane fade">

        <!--CATEGORY OVERVIEW-->
    <?php echo $__env->make('package-category::admin.partials.textarea', [
        'name' => 'category_overview',
        'label' => trans($plang_admin.'.labels.overview'),
        'value' => @$item->category_overview,
        'description' => trans($plang_admin.'.descriptions.overview'),
        'tinymce' => false,
        'errors' => $errors,
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/CATEGORY OVERVIEW-->

        <div class="row">

            <!--URL-->
            <div class='col-md-6'>
                <?php echo $__env->make('package-category::admin.partials.input_text', [
                    'name' => 'category_url',
                    'id' => 'category_url',
                    'label' => trans($plang_admin.'.labels.category-url'),
                    'value' => @$item->category_url,
                    'description' => trans($plang_admin.'.descriptions.category-url'),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/URL-->

            <!--STATUS-->
            <div class='col-md-6'>
                <?php echo $__env->make('package-category::admin.partials.select_single', [
                    'name' => 'status',
                    'label' => trans($plang_admin.'.form.status'),
                    'value' => @$item->status,
                    'items' => $status,
                    'description' => trans($plang_admin.'.descriptions.category-status'),
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/STATUS-->

            <!--ORDER-->
            <div class='col-md-6'>
                <?php echo $__env->make('package-category::admin.partials.input_text', [
                    'name' => 'category_order',
                    'id' => 'category_order',
                    'label' => trans($plang_admin.'.labels.category-order'),
                    'value' => @$item->category_order,
                    'description' => trans($plang_admin.'.descriptions.category-order'),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/ORDER-->

            <!--ICON-->
            <div class='col-md-6'>
                <?php echo $__env->make('package-category::admin.partials.input_text', [
                    'name' => 'category_icon',
                    'id' => 'category_icon',
                    'label' => trans($plang_admin.'.labels.category-icon'),
                    'value' => @$item->category_icon,
                    'description' => trans($plang_admin.'.descriptions.category-icon'),
                    'errors' => $errors,
                ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!--/ICON-->
        </div>
    </div>

    <!--MENU 3-->
    <div id="menu_3" class="tab-pane fade">
        <!--CATEGORY IMAGE-->
    <?php echo $__env->make('package-category::admin.partials.input_image', [
        'name' => 'category_image',
        'label' => trans($plang_admin.'.labels.image'),
        'value' => @$item->category_image,
        'description' => trans($plang_admin.'.descriptions.category-image'),
        'errors' => $errors,
        'lfm_config' => TRUE
    ], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!--/CATEGORY IMAGE-->
    </div>

</div>
<!--/TAB CONTENT-->

<!--HIDDEN FIELDS-->
<div class='hidden-field'>
    <?php echo Form::hidden('id',@$item->id); ?>

    <?php echo Form::hidden('_key',$request->get('_key','')); ?>

</div>
<!--/HIDDEN FIELDS-->

<?php echo Form::close(); ?>

<!------------------------------------------------------------------------------
| End list of elements in category form
|------------------------------------------------------------------------------>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/category-form.blade.php ENDPATH**/ ?>