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
//ref
$ref = empty($ref) ? $name : $ref;
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
//hidden

$hidden = empty($hidden) ? false : true;
?>
<!--/DATA-->

<!--element-->
<?php if($hidden): ?>
    <?php echo Form::hidden($name, $value, ['id' => $id]); ?>

<?php else: ?>
    <!-- INPUT TEXT -->
    <div class="form-group">
    <?php echo Form::label($name, $label); ?>

    <?php echo Form::text($name, $value, ['id' => $id, 'class' => 'form-control', 'placeholder' => $placehover]); ?>

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
<!-- /INPUT TEXT -->
<?php endif; ?>




<!-- /INPUT IMAGE -->
<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/slugit.js'); ?>


    <script type='text/javascript'>
        $(document).ready(function () {
            $('#<?php echo $ref ?>').slugIt({
                output: '#<?php echo $id ?>'
            });
        });
    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/input_slug.blade.php ENDPATH**/ ?>