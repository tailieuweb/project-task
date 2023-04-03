<?php $__env->startSection('title'); ?>
    Internship
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <h3><i class="fa fa-dashboard"></i> Dashboard</h3>
            <hr/>
        </div>
        <div class="col-md-4">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Laravel</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Link 1</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Link 2</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Link 3</td>
                </tr>
            </tbody>
        </table>
        </div>
        <div class="col-md-8"></div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('package-acl::admin.layouts.base-2cols', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/dashboard/default.blade.php ENDPATH**/ ?>