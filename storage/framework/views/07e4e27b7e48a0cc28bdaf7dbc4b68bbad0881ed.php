<?php
    $withs = [
        'counter' => '5%',
        'id' => '7%',
        'email' => '30%',
        'first_name' => '15%',
        'last_name' => '15%',
        'active' => '10%',
        'status' => '5%',
        'last_login' => '13%',
    ];
?>
<div class="panel panel-info">
    <!--HEADING-->
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin">
            <i class="fa fa-user"></i>
            <?php echo $request->all() ? trans($plang_admin.'.search.user') : trans($plang_admin.'.sidebars.users-list'); ?>

        </h3>
    </div>

    <div class="panel-body">

        <!--TABLE-->
        <div class="row">
            <div class="col-md-12">
                <?php if(! $users->isEmpty() ): ?>
                    <div class="table-responsive">

                        <div style="min-height: 50px;">
                            <div>
                                <?php if($users->total() == 1): ?>
                                    <?php echo trans($plang_admin.'.descriptions.counter', ['number' => 1]); ?>

                                <?php else: ?>
                                    <?php echo trans($plang_admin.'.descriptions.counters', ['number' => $users->total()]); ?>

                                <?php endif; ?>
                            </div>

                            <?php echo Form::submit(trans($plang_admin.'.buttons.delete-in-trash'), array(
                                                                                                "class"=>"btn btn-warning delete btn-delete-all",
                                                                                                "title"=> trans($plang_admin.'.hint.delete-in-trash'),
                                                                                                'name'=>'del-trash')); ?>

                            <?php echo Form::submit(trans($plang_admin.'.buttons.delete-forever'), array(
                                                                                        "class"=>"btn btn-danger delete btn-delete-all",
                                                                                        "title"=> trans($plang_admin.'.hint.delete-forever'),
                                                                                        'name'=>'del-forever')); ?>



                        </div>


                        <table class="table table-hover">

                            <!--TITLE-->
                            <thead>
                            <tr>
                                <!-- COUNTER -->
                                <?php $name = 'counter' ?>
                                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <span class="del-checkbox pull-right">
                                        <input type="checkbox" id="selecctall"/>
                                        <label for="del-checkbox"></label>
                                    </span>
                                </th>

                                <!-- ID -->
                                <?php $name = 'id' ?>
                                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-email' data-order='asc'>
                                        <?php if($sorting['items'][$name] == 'asc'): ?>
                                            <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                                            <i class="fa fa-sort-amount-desc" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sort-amount-asc" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </a>
                                </th>

                                <!-- EMAIL -->
                                <?php $name = 'email' ?>
                                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-email' data-order='asc'>
                                        <?php if($sorting['items'][$name] == 'asc'): ?>
                                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </a>
                                </th>

                                <!-- FIRST NAME -->
                                <?php $name = 'first_name' ?>
                                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-first-name' data-order='asc'>
                                        <?php if($sorting['items'][$name] == 'asc'): ?>
                                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </a>
                                </th>

                                <!-- LAST NAME -->
                                <?php $name = 'last_name' ?>
                                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-last-name' data-order='asc'>
                                        <?php if($sorting['items'][$name] == 'asc'): ?>
                                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </a>
                                </th>

                                <!-- ACTIVE -->
                                <?php $name = 'active' ?>
                                <th class="hidden-xs text-center" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-active' data-order='asc'>
                                        <?php if($sorting['items'][$name] == 'asc'): ?>
                                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </a>
                                </th>

                                <!--STATUS-->
                                <?php $name = 'status' ?>
                                <th class="hidden-xs text-center" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.columns.status'); ?>

                                </th>

                                <!-- LAST LOGIN -->
                                <?php $name = 'last_login' ?>
                                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-last-login' data-order='asc'>
                                        <?php if($sorting['items'][$name] == 'asc'): ?>
                                            <i class="fa fa-sort-numeric-asc" aria-hidden="true"></i>
                                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                                            <i class="fa fa-sort-numeric-desc" aria-hidden="true"></i>
                                        <?php else: ?>
                                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                                        <?php endif; ?>
                                    </a>
                                </th>
                            </tr>
                            </thead>

                            <!--DATA-->
                            <tbody>
                            <?php $order = $users->perPage() * ($users->currentPage() - 1) + 1; ?>
                            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td>
                                        <?php echo $order; $order++ ?>
                                        <span class='box-item pull-right'>
                                            <input type="checkbox" id="<?php echo $user->id ?>" name="ids[]" value="<?php echo $user->id; ?>">
                                            <label for="box-item"></label>
                                        </span>
                                    </td>
                                    <td>
                                        <a href="<?php echo URL::route('users.edit', ['id' => $user->id]); ?>">
                                            <?php echo $user->id; ?>

                                        </a>
                                    </td>
                                    <td><?php echo $user->email; ?></td>
                                    <td class="hidden-xs"><?php echo $user->first_name; ?></td>
                                    <td class="hidden-xs"><?php echo $user->last_name; ?></td>
                                    <td class="text-center">
                                        <?php echo $user->activated ? '<i class="fa fa-circle green"></i>' : '<i class="fa fa-circle-o red"></i>'; ?>

                                    </td>
                                    <td class="text-center">
                                        <?php echo $user->deleted_at ? '<i class="fa fa-circle-o red" title="In trash"></i>' :
                                                                '<i class="fa fa-circle green" title="Available"></i>'; ?>

                                    </td>
                                    <td class="hidden-xs">
                                        <?php echo $user->last_login ? $user->last_login : trans($plang_admin.'.messages.message-last-login'); ?>

                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="paginator">
                        <?php echo $users->appends($request->except(['page']) )->render($pagination_view); ?>

                    </div>
                <?php else: ?>
                    <span class="text-warning"><h5><?php echo trans($plang_admin.'.messages.empty-data'); ?></h5></span>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/user/user-table.blade.php ENDPATH**/ ?>