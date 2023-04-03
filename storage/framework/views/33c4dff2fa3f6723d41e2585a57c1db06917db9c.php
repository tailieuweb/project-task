<?php if(!empty($items) ): ?>
<?php
$withs = [
    'order' => '5%',
    'name' => '15%',
    'total' => '5%',
    'assigned' => '5%',
    'canceled' => '5%',
    'done' => '5%',
    'declined' => '5%',
    'inprogress' => '5%',
    'pending' => '5%',
    'tasks' => '5%',

];

global $counter;

$counter = 1;
?>
<caption>
    <?php if(count($items) == 1): ?>
    <?php echo trans($plang_admin.'.description.counter-teachers', ['number' => count($items)] ); ?>

    <?php else: ?>
    <?php echo trans($plang_admin.'.description.counters-teachers', ['number' => count($items)]); ?>

    <?php endif; ?>
</caption>
<div class="table-responsive">
<table class="table table-hover" id="tbTask">

    <thead>
        <tr style="height: 50px;">

            <!--ORDER-->
            <th style='width:<?php echo e($withs['order']); ?>'>
                <?php echo e(trans($plang_admin.'.columns.order')); ?>

            </th>

            <!-- NAME -->
            <?php $name = 'name' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['name']); ?>'>
                <?php echo trans($plang_admin.'.columns.teacher_name'); ?>

            </th>

            <!-- TOTAL -->
            <?php $name = 'total' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['total']); ?>'>
                <?php echo trans($plang_admin.'.columns.total'); ?>

            </th>

            <!-- ASSIGNED -->
            <?php $name = 'assigned' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['assigned']); ?>'>
                <?php echo trans($plang_admin.'.columns.assigned'); ?>

            </th>

            <!-- CANCELED -->
            <?php $name = 'canceled' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['canceled']); ?>'>
                <?php echo trans($plang_admin.'.columns.canceled'); ?>

            </th>

            <!-- DONE -->
            <?php $name = 'done' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['done']); ?>'>
                <?php echo trans($plang_admin.'.columns.done'); ?>

            </th>

            <!-- DECLINED -->
            <?php $name = 'declined' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['declined']); ?>'>
                <?php echo trans($plang_admin.'.columns.declined'); ?>

            </th>

            <!-- INPROGRESS -->
            <?php $name = 'inprogress' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['inprogress']); ?>'>
                <?php echo trans($plang_admin.'.columns.inprogress'); ?>

            </th>

            <!-- PENDING -->
            <?php $name = 'pending' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['pending']); ?>'>
                <?php echo trans($plang_admin.'.columns.pending'); ?>

            </th>

            <!-- TASKS -->
            <?php $name = 'tasks' ?>
            <th class="hidden-xs" style='width:<?php echo e($withs['tasks']); ?>'>
                <?php echo trans($plang_admin.'.columns.tasks'); ?>

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
            <td> <?php echo $item['name']; ?> </td>

            <!--TOTAL-->
            <td> <?php echo $item['total']; ?> </td>

            <!--ASSIGNED-->
            <td> <?php echo $item['assigned']; ?> </td>

            <!--CANCELED-->
            <td> <?php echo $item['canceled']; ?> </td>

            <!--DONE-->
            <td> <?php echo $item['done']; ?> </td>

            <!--DECLINED-->
            <td> <?php echo $item['declined']; ?> </td>

            <!--IN PROGRESS-->
            <td> <?php echo $item['inprogress']; ?> </td>

            <!--PENDING-->
            <td> <?php echo $item['pending']; ?> </td>

            <!--TASKS-->
            <td>
                <a href="<?php echo URL::route('task.teachersView', $item['id']); ?>"
                   class="margin-left-5">
                    <i class="fa fa-list-ul" aria-hidden="true"></i>
                </a>
            </td>


        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </tbody>

</table>
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
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/teacher/task-item.blade.php ENDPATH**/ ?>