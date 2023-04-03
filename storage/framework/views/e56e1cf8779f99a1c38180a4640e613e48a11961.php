<?php if(!empty($items) && (!$items->isEmpty()) ): ?>
    <?php
    $withs = [
        'counter' => '5%',
        'order' => '5%',
        'id' => '5%',
        'category_name' => '30%',
        'status' => '10%',
        'updated_at' => '15%',
        'operations' => '10%',
    ];

    global $counter;
    $nav = $items->toArray();
    $counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
    ?>
    <div class="btn-delete-top">
        <div>
            <?php if($nav['total'] == 1): ?>
                <?php echo trans($plang_admin.'.descriptions.counter', ['number' => $nav['total']]); ?>

            <?php else: ?>
                <?php echo trans($plang_admin.'.descriptions.counters', ['number' => $nav['total']]); ?>

            <?php endif; ?>
        </div>
        <?php echo Form::submit(trans($plang_admin.'.buttons.delete-in-trash'), array(
                                                                "class"=>"btn btn-danger delete btn-delete-all del-trash",
                                                                "title"=> trans($plang_admin.'.hint.delete-in-trash'),
                                                                'name'=>'del-trash')); ?>

        <?php echo Form::submit(trans($plang_admin.'.buttons.delete-forever'), array(
                                                                    "class"=>"btn btn-warning delete btn-delete-all del-forever",
                                                                    "title"=> trans($plang_admin.'.hint.delete-forever'),
                                                                    'name'=>'del-forever')); ?>

    </div>

    <div class="table-responsive">
        <table class="table table-hover">

            <thead>
            <tr style="height: 50px;">

                <!--COUNTER-->
                <th style='width:<?php echo e($withs['counter']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.#')); ?>

                    <span class="del-checkbox pull-right">
                    <input type="checkbox" id="selecctall"/>
                    <label for="del-checkbox"></label>
                </span>
                </th>

                <!--ORDER-->
                <th style='width:<?php echo e($withs['order']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.order')); ?>

                </th>

                <!--ID-->
                <th style='width:<?php echo e($withs['id']); ?>'>
                    <?php echo e(trans($plang_admin.'.columns.id')); ?>

                </th>

                <!--CATEGORY NAME-->
                <?php $name = 'category_name' ?>

                <th class="hidden-xs"
                    style='width:<?php echo e($withs[$name]); ?>'><?php echo trans($plang_admin.'.columns.category-name'); ?>

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
                <?php $name = 'status' ?>

                <th class="hidden-xs text-center"
                    style='width:<?php echo e($withs[$name]); ?>'><?php echo trans($plang_admin.'.columns.context-status'); ?>

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

                <th class="hidden-xs"
                    style='width:<?php echo e($withs[$name]); ?>'><?php echo trans($plang_admin.'.columns.updated_at'); ?>

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
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <tr>
                    <!--COUNTER-->
                    <td>
                        <?php echo $counter; $counter++ ?>
                        <span class='box-item pull-right'>
                        <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="<?php echo $item->id; ?>">
                        <label for="box-item"></label>
                    </span>
                    </td>

                    <!--ORDER-->
                    <td> <?php echo $item->category_order; ?> </td>

                    <!--ID-->
                    <td> <?php echo $item->category_id; ?> </td>

                    <!--NAME-->
                    <td> <?php echo $item->category_name; ?> </td>

                    <!--STATUS-->
                    <td style="text-align: center;">

                        <?php if($item->status && (isset($config_status['list'][$item->status]))): ?>
                            <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->status]; ?>"
                               title='<?php echo $config_status["list"][$item->status]; ?>'></i>
                        <?php else: ?>
                            <i class="fa fa-circle-o red" title='<?php echo trans($plang_admin.".labels.unknown"); ?>'></i>
                        <?php endif; ?>
                    </td>

                    <!--UPDATED AT-->
                    <td> <?php echo date('Y-m-d', strtotime($item->updated_at) ); ?> </td>

                    <!--OPERATOR-->
                    <td>
                        <!--edit-->
                        <a href="<?php echo URL::route('categories.edit', ['id' => $item->id,
                                                               '_key' => $request->get('_key'),
                                                                '_token' => csrf_token()
                                                               ]); ?>">
                            <i class="fa fa-edit f-tb-icon"></i>
                        </a>

                        <!--copy-->
                        <a href="<?php echo URL::route('categories.copy',['cid' => $item->id,
                                                            '_key' => $request->get('_key'),
                                                            '_token' => csrf_token(),
                                                            ]); ?>"
                           class="margin-left-5">
                            <i class="fa fa-files-o f-tb-icon" aria-hidden="true"></i>
                        </a>

                        <!--delete-->
                        <a href="<?php echo URL::route('categories.delete',['id' => $item->id,
                                                                '_key' => $request->get('_key'),
                                                                '_token' => csrf_token(),
                                                                 ]); ?>"
                           class="margin-left-5 delete">
                            <i class="fa fa-trash-o f-tb-icon"></i>
                        </a>

                    </td>

                </tr>
                <?php if($item->childs): ?>

                    <?php echo $__env->make('package-category::admin.partials.td-record', ['childs' => $item->childs, 'counter' => &$counter], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

                <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>
        <div class="paginator">
            <?php echo $items->appends($request->except(['page']) )->render(); ?>

        </div>

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
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/category-item.blade.php ENDPATH**/ ?>