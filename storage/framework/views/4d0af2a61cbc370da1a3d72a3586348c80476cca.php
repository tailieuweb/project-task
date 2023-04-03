<?php
$withs = [
    'counter' => '5%',
    'id' => '7%',
    'name' => '30%',
    'permissions' => '50%',
    'status' => '8%',
];
?>

<?php if( ! $groups->isEmpty() ): ?>
    <div style="min-height: 50px;">
        <div>
            <?php if($groups->total() == 1): ?>
                <?php echo trans($plang_admin.'.descriptions.counter', ['number' => 1]); ?>

            <?php else: ?>
                <?php echo trans($plang_admin.'.descriptions.counters', ['number' => $groups->total()]); ?>

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
        <thead>
            <tr>

                <!-- COUNTER -->
                <?php $name = 'counter' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.labels.'.$name); ?>

                    <span class="del-checkbox pull-right">
                        <input type="checkbox" id="selecctall"/>
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

                <!-- Group -->
                <?php $name = 'name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.tables.group-'.$name); ?>

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

                <!--Group permissions-->
                <?php $name = 'permissions' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.tables.group-'.$name); ?>

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

                <!--STATUS-->
                <?php $name = 'status' ?>
                <th class="hidden-xs text-center" style='width:<?php echo e($withs[$name]); ?>'>
                    <?php echo trans($plang_admin.'.columns.status'); ?>

                </th>
            </tr>
        </thead>

        <tbody>

        <?php $counter = $groups->perPage() * ($groups->currentPage() - 1) + 1; ?>
        <?php $__currentLoopData = $groups; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $group): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <tr>
                <td>
                    <?php echo $counter; $counter++ ?>
                    <span class='box-item pull-right'>
                        <input type="checkbox" id="<?php echo $group->id ?>" name="ids[]"
                               value="<?php echo $group->id; ?>">
                        <label for="box-item"></label>
                    </span>
                </td>
                <td>
                    <a href="<?php echo URL::route('groups.edit', ['id' => $group->id, '_token' => csrf_token()]); ?>">
                        <?php echo $group->id; ?>

                    </a>

                    <span class="clearfix"></span>
                </td>
                <td style="width:40%"><?php echo $group->name; ?></td>

                <td style="width:50%"><?php echo $group->permissions; ?></td>

                <td class="text-center">
                    <?php echo $group->deleted_at ? '<i class="fa fa-circle-o red" title="In trash"></i>' :
                                            '<i class="fa fa-circle green" title="Available"></i>'; ?>

                </td>
            </tr>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <div class="paginator">
        <?php echo $groups->appends($request->except(['page']) )->render($pagination_view); ?>

    </div>
<?php else: ?>
    <span class="text-warning"><h5>No results found.</h5></span>
<?php endif; ?>
<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-acl/app/Authentication/../../resources/views/admin/group/groups-table.blade.php ENDPATH**/ ?>