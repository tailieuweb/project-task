<?php if(!empty($items) && (!$items->isEmpty()) ): ?>
    <?php
        $withs = [
            'order' => '5%',
            'name' => '30%',
            'status' => '10%',
            'task_start_date' => '10%',
            'task_end_date' => '10%',
            'updated_at' => '10%',
            'operations' => '10%',
        ];

        global $counter;
        $nav = $items->toArray();
        $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
    ?>

    <div class="btn-delete-top">
        <div>
            <?php if($nav['total'] == 1): ?>
            <?php echo trans($plang_admin.'.description.counter', ['number' => $nav['total']]); ?>

            <?php else: ?>
            <?php echo trans($plang_admin.'.description.counters', ['number' => $nav['total']]); ?>

            <?php endif; ?>
        </div>
        <?php echo Form::submit(trans($plang_admin.'.buttons.del-trash'), array(
                                    "class"=>"btn btn-danger delete btn-delete-all del-trash",
                                    'name'=>'del-trash')); ?>

        <?php echo Form::submit(trans($plang_admin.'.buttons.del-forever'), array(
                                    "class"=>"btn btn-warning delete btn-delete-all del-forever",
                                    'name'=>'del-forever')); ?>

    </div>

    <table class="table table-hover" id="tbTask">

        <thead>
            <tr style="height: 50px;">

                <!--ORDER-->
                <th style='width:<?php echo e($withs['order']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.order')); ?>

                    <span class="del-checkbox pull-right">
                        <input type="checkbox" id="selecctall"/>
                        <label for="del-checkbox"></label>
                    </span>
                </th>

                <!-- NAME -->
                <?php $name = 'task_name' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs['name']); ?>'>
                    <?php echo trans($plang_admin.'.columns.name'); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!-- STATUS -->
                <?php $name = 'status' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>; text-align: center;'>
                    <?php echo trans($plang_admin.'.columns.status'); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!-- START DATE -->
                <?php $name = 'task_start_date' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    Ngày bắt đầu
                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!-- END DATE -->
                <?php $name = 'task_end_date' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs[$name]); ?>'>
                    Ngày kết thúc
                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!-- UPDATED AT -->
                <?php $name = 'updated_at' ?>
                <th class="hidden-xs" style='width:<?php echo e($withs['updated_at']); ?>'><?php echo trans($plang_admin.'.columns.updated_at'); ?>

                    <a href='<?php echo $sorting["url"][$name]; ?>' class='tb-id' data-order='asc'>
                        <?php if($sorting['items'][$name] == 'asc'): ?>
                            <i class="fa fa-sort-alpha-asc" aria-hidden="true"></i>
                        <?php elseif($sorting['items'][$name] == 'desc'): ?>
                            <i class="fa fa-sort-alpha-desc" aria-hidden="true"></i>
                        <?php else: ?>
                            <i class="fa fa-sort-desc" aria-hidden="true"></i>
                        <?php endif; ?>
                    </a>
                </th>

                <!--OPERATIONS-->
                <th style='width:<?php echo e($withs['operations']); ?>;'>
                    <span class='lb-delete-all'>
                        <?php echo e(trans($plang_admin.'.columns.operations')); ?>

                    </span>
                </th>

            </tr>
        </thead>

    <tbody>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <!--COUNTER-->
            <td>
                <?php echo $counter; $counter++  ?>
                <span class='box-item pull-right'>
                    <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="<?php echo $item->id; ?>">
                    <label for="box-item"></label>
                </span>
            </td>

            <!--NAME-->
            <td> <?php echo $item->task_name; ?> </td>

            <!--STATUS-->
            <td style="text-align: center;">
                <?php if($item->status && (isset($config_status['list'][$item->status]))): ?>
                    <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->status]; ?>"
                       title='<?php echo $config_status["list"][$item->status]; ?>'></i>
                <?php else: ?>
                    <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                <?php endif; ?>
            </td>

            <!--START DATE-->
            <td> <?php echo $item->task_start_date; ?> </td>

            <!--END DATE-->
            <td> <?php echo $item->task_end_date; ?> </td>

            <!--UPDATED AT-->
            <td> <?php echo $item->updated_at; ?> </td>

            <!--OPERATOR-->
            <td>
                <!--edit-->
                <a href="<?php echo URL::route('task.edit', [   'id' => $item->id,
                   '_token' => csrf_token()
                   ]); ?>">
                    <i class="fa fa-edit f-tb-icon"></i>
                </a>

                <!--copy-->
                <a href="<?php echo URL::route('task.copy',[    'cid' => $item->id,
                   '_token' => csrf_token(),
                   ]); ?>"
                   class="margin-left-5">
                    <i class="fa fa-files-o f-tb-icon" aria-hidden="true"></i>
                </a>

                <!--delete-->
                <a href="<?php echo URL::route('task.delete',[  'id' => $item->id,
                   '_token' => csrf_token(),
                   ]); ?>"
                   class="margin-left-5 delete">
                    <i class="fa fa-trash-o f-tb-icon"></i>
                </a>

            </td>

        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>

<div class="paginator">
    <?php echo $items->appends($request->except(['page']) )->render(); ?>

</div>
<?php else: ?>
<!--SEARCH RESULT MESSAGE-->
<span class="text-warning">
    <h5>
        <?php echo e(trans($plang_admin.'.description.not-found')); ?>

    </h5>
</span>
<!--/SEARCH RESULT MESSAGE-->
<?php endif; ?>

<?php $__env->startSection('footer_scripts'); ?>
<?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
<?php echo HTML::script('packages/foostart/package-task/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/admin/task-item.blade.php ENDPATH**/ ?>