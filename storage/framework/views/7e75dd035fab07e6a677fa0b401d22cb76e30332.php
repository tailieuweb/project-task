<div class="panel panel-info">
    <div class="panel-heading">
        <h3 class="panel-title bariol-thin">
            <i class="fa fa-history" aria-hidden="true"></i>
            <?php echo trans($plang_admin . '.labels.title-backup') ?>
        </h3>
    </div>
    <div class="panel-body">

        <table class="table table-hover">

            <thead>
                <tr style="height: 50px;">

                    <!--VERSION-->
                    <th style='width:10%'>
                        <?php echo e(trans($plang_admin.'.columns.order')); ?>

                    </th>

                    <!--FILENAME-->
                    <th style='width:90%'>
                        <?php echo e(trans($plang_admin.'.columns.filename')); ?>

                    </th>


                </tr>

            </thead>

            <tbody>
                <?php
                    $version = count($backups[$lang]);
                    $other_backups = $backups;
                    unset($other_backups[$lang]);
                ?>
                <?php $__currentLoopData = $backups[$lang]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $backup): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <!--COUNTER-->
                    <td> <?php echo 'v.'.$version; $version--; ?>  </td>

                    <!--NAME-->
                    <?php
                    $group_backup = "$lang=".realpath($backup);
                    foreach ($other_backups as $key => $other_backup) {
                        foreach ($other_backup as $_backup) {
                            $group_backup .= ";$key=".realpath($other_backup[$index]);
                            break;
                        }
                    }
                    ?>
                    <td>
                        <a href="<?php echo URL::route('task.lang', ['v' => base64_encode($group_backup), 'lang' => $lang]); ?>">
                            <?php echo basename($backup); ?>

                        </a>
                    </td>

                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </tbody>

        </table>

    </div>
</div>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-task/Views/admin/task-lang-backup.blade.php ENDPATH**/ ?>