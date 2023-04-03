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
//place hover
$placehover = empty($placehover) ? $label : $placehover;
//eror
$errors = empty($errors) ? '' : $errors;
//description
$description = empty($description) ? '' : $description;
?>
<!--/DATA-->

<!--HEAD CSS-->
<?php $__env->startSection('head_css'); ?>
    <?php echo HTML::style('vendor/package-filemanager/css/lfm-custom.css'); ?>

<?php $__env->stopSection(); ?>
<!--/HEAD CSS-->

<!--UPLOAD FILES-->
<div class='form-group'>

<?php echo Form::label($name, $label); ?>


<!--button upload-->
    <div class='image-control'>

        <p class='btn-image-control'>
            <button id="<?php echo $id; ?>"
                    data-grid-view='list-uploaded-<?php echo $id ?>'
                    class="btn btn-primary btn-sm">

                <i class="icon-ok icon-white"></i>
                <?php echo trans("category-admin.buttons.upload"); ?>

            </button>
        </p>

    </div>

    <!--description-->
    <?php if($description): ?>
        <span class='input-text-description'>
            <blockquote class="quote-card">
                <p><?php echo $description; ?></p>
            </blockquote>
        </span>
    <?php endif; ?>

<!--list uploaded files-->
    <div class="list-uploaded-<?php echo $id; ?>">

        <ul class="list-group">

            <!--item template-->
            <li class="item-template list-group-item">
                <input type='hidden' name='<?php echo $name ?>[]'>
                <span class='file-item'></span>
                <div class="pull-right delete-item">
                    <a href='javascript:;' class="trash"><span class="glyphicon glyphicon-trash"></span></a>
                </div>
            </li>

            <?php if($value): ?>
                <?php $items = json_decode($value);?>
                <?php if(is_array($items)): ?>
                    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="list-group-item">
                            <input type='hidden' name='<?php echo $name ?>[]' value='<?php echo $item; ?>'>
                            <span class='file-item'>
                            <a href='<?php echo Url::to($item); ?>'><?php echo $item; ?></a>
                        </span>
                            <div class="pull-right delete-item">
                                <a href='javascript:;' class="trash">
                                    <span class="glyphicon glyphicon-trash"></span>
                                </a>
                            </div>
                        </li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            <?php endif; ?>

        </ul>
    </div>

    <!--ERRORS-->
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
<!--/ERRORS-->


</div>
<!-- /UPLOAD FILES-->

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('vendor/package-filemanager/js/lfm-configs.js'); ?>


    <script type='text/javascript'>

        $(document).ready(function () {
            if ($('#<?php echo $id ?>').length) {
                $('#<?php echo $id ?>').filemanager('file', {});
            }
        });

    </script>
<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/input_files.blade.php ENDPATH**/ ?>