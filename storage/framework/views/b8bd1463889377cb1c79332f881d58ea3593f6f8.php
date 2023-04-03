<?php if(!empty($items) && (!$items->isEmpty()) ): ?>
<?php
$withs = [
    'order' => '5%',
    'name' => '30%',
    'status' => '10%',
    'updated_at' => '20%',
    'operations' => '10%',
    'delete' => '5%',
];

global $counter;
$nav = $items->toArray();
$counter = ($nav['current_page'] - 1) * $nav['per_page'] + 1;
?>
<caption>
    <?php if($nav['total'] == 1): ?>
    <?php echo trans($plang_admin.'.description.counter', ['number' => $nav['total']]); ?>

    <?php else: ?>
    <?php echo trans($plang_admin.'.description.counters', ['number' => $nav['total']]); ?>

    <?php endif; ?>
</caption>

<table class="table table-hover" id="tbTask">

    <thead>
        <tr style="height: 50px;">

            <!--ORDER-->
            <th style='width:<?php echo e($withs['order']); ?>'>
                <?php echo e(trans($plang_admin.'.columns.order')); ?>

            </th>

            <!-- NAME -->
            <?php $name = 'task_name' ?>

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

            <!-- STATUS -->
            <?php $name = 'status' ?>

            <th class="hidden-xs" style='width:<?php echo e($withs['updated_at']); ?>'><?php echo trans($plang_admin.'.columns.status'); ?>

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
            <td> <?php
                echo $counter;
                $counter++
                ?> </td>

            <!--NAME-->
            <td> <?php echo $item->tasks->task_name; ?> </td>

            <!--STATUS-->
            <td> <?php echo @$status[$item->status]; ?> </td>

            <!--UPDATED AT-->
            <td> <?php echo $item->tasks->updated_at; ?> </td>

            <!--OPERATOR-->
            <td>
                <!--view-->
                <a href="<?php echo URL::route('usertask.edit', [   'id' => $item->tasks->task_id,
                   '_token' => csrf_token()
                   ]); ?>">
                    <i class="fa fa-edit f-tb-icon"></i>
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
<?php echo HTML::script('packages/foostart/package-task/js/form-table.js'); ?>

<?php $__env->stopSection(); ?>

<script>
    function checkAllCheckBox() {
        var checkboxes = $('#tbTask').find(':checkbox');
        var isCheckedAll = $("#selecctall:checked").length; // if length is 0 that checkbox was unchecked, otherwise

        if (isCheckedAll) {
            $(".colDel").show();
        } else {
            $(".colDel").hide();
        }
        for (var i = 1; i < checkboxes.length; i++) {
            checkboxes[i].checked = isCheckedAll;
        }
    }
    function checkedCheckBox(){
        var check = $("input[name='ids[]']:checked").length;
        if(check){
            $(".colDel").show();
        }else {
            $(".colDel").hide();
        }
    }
</script>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/user/task-item.blade.php ENDPATH**/ ?>