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
//id
$id = empty($id) ? $name : $id;
//value
$value = empty($value) ? $request->get($name) : $value;
//label
$label = empty($label) ? '' : $label;
//icon
$icon = empty($icon) ? '' : $icon;
//place hover
$placeholder = empty($placeholder) ? $label : $placeholder;
//required
$required = empty($required) ? '' : 'required';
//errors
$errors = empty($errors) ? '' : $errors;
//description
$description = empty($description) ? '' : $description;
//class
$class = empty($class) ? '' : $class;
//type
$type = empty($type) ? '' : 'password';
?>
<!--/DATA-->

<!-- INPUT TEXT -->
<div class="form-group">

    <div class="input-group">

        <!--label-->
    <?php if($label): ?>
        <?php echo Form::label($name, $label); ?>

    <?php endif; ?>

    <!--icon-->
    <?php if($icon): ?>
        <?php echo $icon; ?>

    <?php endif; ?>

    <!--element-->
        <?php if($type): ?>
            <?php echo Form::password($name, [ 'id' => $id,
                                        'class' => 'form-control '.$class,
                                        'placeholder' => $placeholder,
                                        $required,
                                        'autocomplete' => 'off']); ?>

        <?php else: ?>
            <?php echo Form::text($name, $value, [ 'id' => $id,
                                        'class' => 'form-control '.$class,
                                        'placeholder' => $placeholder,
                                        $required,
                                        'autocomplete' => 'off']); ?>

        <?php endif; ?>
    </div>
    <!--errors-->
    <?php if($errors->has($name)): ?>
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
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/front/partials/input_text.blade.php ENDPATH**/ ?>