<!--
| @TITLE
| Select single item in form
|
|-------------------------------------------------------------------------------
| @REQUIRED
| $name is select name
| $items is list of items
| $label is select label
| $label is input lable
| $placehover is placehover text
| $errors is error name
| $description is description text
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
|
|_______________________________________________________________________________
-->

<!--DATA-->
<?php
//name
$name = empty($name) ? 'undefined' : $name;

//items
$items = empty($items) ? [] : $items;

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
?>
<!--/DATA-->

<!-- CATEGORY LIST -->
<div class="form-group">

    <!--element-->
<?php if($label): ?>
    <?php echo Form::label($name, $label); ?>

<?php endif; ?>
<?php if($items): ?>
    <?php echo Form::select($name, $items, $value, ['class' => 'form-control',  'placeholder' => $placehover]); ?>

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
<!-- /CATEGORY LIST -->
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/select_single.blade.php ENDPATH**/ ?>