<?php if(!empty($items) && (!$items->isEmpty()) ): ?>
<?php
$withs = [
    'counter' => '7%',
    'id' => '8%',
    'name' => '40%',
    'updated_at' => '20%',
    'status' => '5%',
    'operations' => '10%',
];
?>
<div style="min-height: 50px;">
    <div>
        <?php if($items->total() == 1): ?>
            <?php echo trans($plang_admin.'.descriptions.counter', ['number' => 1]); ?>

        <?php else: ?>
            <?php echo trans($plang_admin.'.descriptions.counters', ['number' => $items->total()]); ?>

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

<table class="table table-hover table-responsive">

    <thead>
        <tr style="height: 50px;">

            <!--COUNTER-->
            <th style='width:<?php echo e($withs['counter']); ?>'>
                <?php echo e(trans($plang_admin.'.columns.counter')); ?>

                <span class="del-checkbox pull-right">
                    <input type="checkbox" id="selecctall" />
                    <label for="del-checkbox"></label>
                </span>
            </th>

            <!--ID-->
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

            <!-- NAME -->
            <?php $name = 'pexcel_name' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['name']); ?>'><?php echo trans($plang_admin.'.columns.name'); ?>

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

            <!--STATUS-->
            <th style='width:<?php echo e($withs['status']); ?>'>
                <?php echo e(trans($plang_admin.'.columns.status')); ?>

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
            <th style='width:<?php echo e($withs['operations']); ?>'>
                <span class='lb-delete-all'>
                    <?php echo e(trans($plang_admin.'.columns.operations')); ?>

                </span>
            </th>

        </tr>

    </thead>

    <tbody>
        <?php $counter = $items->perPage() * ($items->currentPage() - 1) + 1;  ?>
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <!--COUNTER-->
            <td>
                <?php echo $counter;  $counter++; ?>
                <span class='box-item pull-right'>
                   <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="<?php echo $item->id; ?>">
                   <label for="box-item"></label>
                </span>
            </td>

            <!--ID-->
            <td>
                <a href="<?php echo URL::route('pexcel.edit', [   'id' => $item->id,
                                                                        '_token' => csrf_token()
                                                                     ]); ?>">
                    <?php echo $item->id; ?>

                </a>
            </td>

            <!--NAME-->
            <td> <?php echo $item->pexcel_name; ?> </td>

             <!--STATUS-->
            <td style="text-align: center;">
                <?php if($item->status && (isset($config_status['list'][$item->status]))): ?>
                    <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->status]; ?>" title='<?php echo $config_status["list"][$item->status]; ?>'></i>
                <?php else: ?>
                    <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                <?php endif; ?>
            </td>

            <!--UPDATED AT-->
            <td> <?php echo $item->updated_at; ?> </td>

            <!--OPERATOR-->
            <td>
                <!--edit-->
                <a href="<?php echo URL::route('pexcel.edit', [   'id' => $item->id,
                   '_token' => csrf_token()
                   ]); ?>">
                    <i class="fa fa-edit f-tb-icon"></i>
                </a>

                <!--raw-->
                <a href="<?php echo URL::route('pexcel.raw', [ 'id' => $item->id,
                                                        '_token' => csrf_token()
                                                        ]); ?>">
                    <i class="fa fa-list-ol" aria-hidden="true"></i>
                </a>

                <!--copy-->
                <a href="<?php echo URL::route('pexcel.copy',[    'cid' => $item->id,
                   '_token' => csrf_token(),
                   ]); ?>"
                   class="margin-left-5">
                    <i class="fa fa-files-o f-tb-icon" aria-hidden="true"></i>
                </a>

                <!--delete-->
                <a href="<?php echo URL::route('pexcel.delete',[  'id' => $item->id,
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
        <?php echo e(trans($plang_admin.'.descriptions.not-found')); ?>

    </h5>
</span>
<!--/SEARCH RESULT MESSAGE-->
<?php endif; ?>

<?php $__env->startSection('footer_scripts'); ?>
    <?php echo \Illuminate\View\Factory::parentPlaceholder('footer_scripts'); ?>
    <?php echo HTML::script('packages/foostart/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-pexcel/Views/admin/pexcel-item.blade.php ENDPATH**/ ?>