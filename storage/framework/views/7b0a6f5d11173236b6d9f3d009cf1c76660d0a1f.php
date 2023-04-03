<!--
| @TITLE
| Input text element in form
|
|-------------------------------------------------------------------------------
| @REQUIRED
| $name is checkbox name
| $value is checkbox value
| $label is checkbox lable
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
//items
$items = empty($items) ? [] : $items;
//label
$label = empty($label) ? '' : $label;
//place hover
$placehover = empty($placehover) ? $label : $placehover;
//eror
$errors = empty($errors) ? '' : $errors;
//description
$description = empty($description) ? '' : $description;
?>
<!--/DATA-->

<!-- INPUT TEXT -->
<div class="form-group">

    <!--label-->
<?php if($label): ?>
    <?php echo Form::label($name, $label); ?>

<?php endif; ?>

<!--value-->
    <?php if($value): ?>
        <span class='input-text-value' style="display: block;"><?php echo $value; ?></span>
    <?php endif; ?>

<!--checkbox-->
    <?php if($value && $items): ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class='checkbox-item' style="display: block;">
                <?php echo e(Form::checkbox($name, $value, null, ['class' => ''])); ?>

                <label for='<?php echo $name; ?>' style="font-weight: normal;"><?php echo $item; ?></label>
            </span>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>

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
<!-- /INPUT TEXT -->
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/checkbox.blade.php ENDPATH**/ ?>