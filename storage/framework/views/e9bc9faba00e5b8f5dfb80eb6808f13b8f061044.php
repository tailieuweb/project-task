
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">


<?php echo HTML::style('packages/foostart/css/bootstrap-3.3.7.min.css'); ?>

<?php echo HTML::style('packages/foostart/css/style.css'); ?>

<?php echo HTML::style('packages/foostart/css/baselayout.css'); ?>

<?php echo HTML::style('packages/foostart/css/fonts.css'); ?>

<?php echo HTML::style('packages/foostart/css/font-awesome-4.7.0.min.css'); ?>

<?php echo HTML::style('packages/foostart/css/package-category.css'); ?>


<?php echo $__env->yieldContent('head_css'); ?>


<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <?php echo HTML::script('packages/foostart/js/vendor/lt-IE-9/html5shiv-3.7.0'); ?>

        <?php echo HTML::script('packages/foostart/js/vendor/lt-IE-9/respond-1.3.0.min'); ?>

    <![endif]-->
</head>

<body>

<?php echo $__env->make('package-acl::admin.layouts.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<div class="container-fluid">
    <?php echo $__env->yieldContent('container'); ?>
</div>


<?php echo $__env->yieldContent('before_footer_scripts'); ?>

<?php echo HTML::script('packages/foostart/js/vendor/jquery-2.2.4.min.js'); ?>

<?php echo HTML::script('packages/foostart/js/vendor/bootstrap-3.3.7.min.js'); ?>


<?php echo $__env->yieldContent('footer_scripts'); ?>

</body>
</html>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/layouts/base.blade.php ENDPATH**/ ?>