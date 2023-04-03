<!--
| @TITLE
| Input text element in form
|
|-------------------------------------------------------------------------------
| @REQUIRED
| $name is radio name
| $value is radio value
| $label is radio lable
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
$value = !empty($value) ? $value : 0;

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

    <!--element-->
    <?php if($label): ?>
        <?php echo Form::label($name, $label); ?>

    <?php endif; ?>

    <?php if($items): ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <span class='radio-item' style="display: block;">
                <?php echo e(Form::radio($name, $key, $key==$value?true:false, ['class' => '', 'id' => $name.'-'.$key])); ?>

                <label for='<?php echo $name."-".$key; ?>' style="font-weight: normal;"><?php echo $item; ?></label>
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
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/radio.blade.php ENDPATH**/ ?>