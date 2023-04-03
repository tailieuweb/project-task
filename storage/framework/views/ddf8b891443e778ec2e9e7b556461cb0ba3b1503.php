<!--
| @TITLE
| Textarea element in form
|
|-------------------------------------------------------------------------------
| @REQUIRED
| $name is textarea name
| $value is textarea value
| $label is textarea lable
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
$value = empty($value) ? $request->get($name) : $value;
//label
$label = empty($label) ? '' : $label;
//place hover
$placehover = empty($placehover) ? $label : $placehover;
//eror
$errors = empty($errors) ? '' : $errors;
//description
$description = empty($description) ? '' : $description;
//rows
$rows = empty($rows) ? 5 : $rows;
//tinymce
$tinymce = !$tinymce ? '' : 'my-editor';
?>
<!--/DATA-->

<!-- INPUT TEXT -->
<div class="form-group">

    <!--element-->
<?php echo Form::label($name, $label); ?>

<?php echo Form::textarea ($name, $value, ['class' => 'form-control tinymce '.$tinymce, 'rows' => $rows, 'placeholder' => $placehover]); ?>

<!--description-->
    <?php if($description): ?>
        <span class='input-text-description'>
            <blockquote class="quote-card">
                <p>
                <?php echo $description; ?>

                </p>
            </blockquote>
        </span>
    <?php endif; ?>

<!--errors-->
    <?php if($errors->has($name)): ?>
        <ul class='alert alert-danger error-item'>
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
<!-- /INPUT TEXT -->

<!--ADD SCRIPT TINYMCE-->
<?php if($tinymce): ?>
<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/tinymce/tinymce.min.js'); ?>

    <?php echo HTML::script('packages/foostart/js/tinymce/tinymce-configs.js'); ?>

<?php $__env->stopSection(); ?>
<?php endif; ?>
<!--/ADD SCRIPT TINYMCE-->

<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/textarea.blade.php ENDPATH**/ ?>