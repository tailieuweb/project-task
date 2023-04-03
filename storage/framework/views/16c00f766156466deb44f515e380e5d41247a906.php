<!--
| @TITLE
| Message
|
|-------------------------------------------------------------------------------
| @REQUIRED
| String message
|
|÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷÷
| @DESCRIPTION
| Show message
|_______________________________________________________________________________
-->

<!-- MESSAGE  -->
<?php if($message): ?>
    <div class="alert alert-success">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
            ×
        </button>
        <span class="glyphicon glyphicon-ok"></span>
        <strong>Success Message</strong>
        <hr class="message-inner-separator">
        <p><?php echo $message; ?></p>
    </div>
<?php endif; ?>
<!-- /END MESSAGE --><?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/success.blade.php ENDPATH**/ ?>