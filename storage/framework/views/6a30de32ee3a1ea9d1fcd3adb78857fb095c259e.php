<!--
| @TITLE
| Input text element in form
|
|-------------------------------------------------------------------------------
| @REQUIRED
| $name is input name
| $value is input value
| $label is input lable
| $placehover is placehover text
| $errors is error name
| $description is description text
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @SYNTAX
|
------------------------------------------------------------------------------->

<!--DATA-->
<?php
//name
$name = empty($name) ? 'undefined' : $name;
//value
$image_empty = URL::to('packages/foostart/images/image-temp-220.png');
$image_url = empty($value) ? $image_empty : URL::to($value);
//label
$label = empty($label) ? '' : $label;
//place hover
$placehover = empty($placehover) ? $label : $placehover;
//eror
$errors = empty($errors) ? '' : $errors;
//value
$value = empty($value) ? $request->get($name) : $value;
//description
$description = empty($description) ? '' : $description;
//lfm_config
$lfm_config = empty($lfm_config) ? FALSE : TRUE;
?>
<!--/DATA-->

<!-- INPUT IMAGE -->

<div class='form-group'>
<?php echo Form::label($name, $label); ?>


<!--thumbnail-->
    <div class='image-control'>

        <img id='_preview' class="thumbnail box-center margin-top-20" alt="No image" src="<?php echo $image_url; ?>">

        <!--buttons-->
        <p class='btn-image-control'>
            <!--remove/undo-->
            <button id='lfm-remove'
                    data-input='_image'
                    data-preview='_preview'
                    data-on='remove'
                    data-image-url='<?php echo $image_url; ?>'
                    data-image-empty='<?php echo $image_empty; ?>'
                    data-image-dir='<?php echo $value; ?>'
                    data-label-remove='<?php echo trans("category-admin.buttons.remove"); ?>'
                    data-label-undo='<?php echo trans("category-admin.buttons.undo"); ?>'
                    class='btn btn-sm'
            >
                <i class="icon-remove"></i><?php echo trans("category-admin.buttons.remove"); ?>

            </button>
            <!--upload-->
            <button id="lfm-image"
                    data-input='_image'
                    data-preview='_preview'
                    data-image-dir='<?php echo $value; ?>'
                    data-control='lfm-remove'
                    class="btn btn-primary btn-sm">
                <i class="icon-ok icon-white"></i><?php echo trans("category-admin.buttons.upload"); ?>

            </button>
        </p>
        <?php echo Form::hidden($name, $value, ['id' => '_image', 'data-control' => 'lfm-remove']); ?>

    </div>

    <!--description-->
    <?php if($description): ?>
        <span class='input-text-description'>
            <blockquote class="quote-card">
                <p><?php echo $description; ?></p>
            </blockquote>
        </span>
    <?php endif; ?>

<!--errors-->
    <?php if(!empty($errors) && $errors->has($name)): ?>
        <ul class='error-item'>
            <?php $__currentLoopData = $errors->get($name); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($error): ?>
                    <li>
                        <span class='input-text-error'><?php echo $error; ?></span>
                    </li>
                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>


</div>

<!-- /INPUT IMAGE -->

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php if($lfm_config): ?>
        <?php echo HTML::script('vendor/package-filemanager/js/lfm-configs.js'); ?>

    <?php endif; ?>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/input_image.blade.php ENDPATH**/ ?>