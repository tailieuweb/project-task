<!--
| @TITLE
| List of errors
|
|-------------------------------------------------------------------------------
| @REQUIRED
| Array errors
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
| Show list of errors
|_______________________________________________________________________________
-->

<!-- LIST OF ERRORS  -->
<?php if(!empty($errors) && $errors->all()): ?>
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×
        </button>

        <strong>
            <i class="fa fa-bug" aria-hidden="true"></i>
            <?php echo trans('acl-admin.errors.has_errors'); ?>

        </strong>

        <hr class="message-inner-separator">

        <ol class='list-errors'>

            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li>
                    <?php echo $error; ?>

                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </ol>
    </div>
<?php endif; ?>
<!-- /END LIST OF ERRORS -->
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/errors.blade.php ENDPATH**/ ?>