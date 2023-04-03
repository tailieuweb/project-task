<?php

if (!function_exists('displayChilds')){
function displayChilds($childs, $level){ ?>
<?php global $counter; global $request; ?>
<?php foreach ($childs as $item): ?>
<tr>
    <!--#-->
    <td>
        <?php echo $counter; $counter++ ?>
        <span class='box-item pull-right'>
                        <input type="checkbox" id="<?php echo $item->id ?>" name="ids[]" value="<?php echo $item->id; ?>">
                        <label for="box-item"></label>
        </span>
    </td>

    <!--ORDER-->
    <td><?php echo $item->category_order; ?></td>

    <!--ID-->
    <td><?php echo $item->category_id; ?></td>

    <!--NAME-->
    <td><span style="padding-left: <?php echo 30 * $level ?>px"></span>
        |_
        <?php echo $item->category_name; ?>

    </td>

    <!--STATUS-->
    <td style="text-align: center;">

        <?php if($item->category_status && (isset($config_status['list'][$item->category_status]))): ?>
            <i class="fa fa-circle" style="color:<?php echo $config_status['color'][$item->category_status]; ?>"
               title='<?php echo $config_status["list"][$item->category_status]; ?>'></i>
        <?php else: ?>
            <i class="fa fa-circle-o red"></i>
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

<?php if ($item->childs): ?>
            <?php displayChilds($item->childs, $level + 1) ?>
        <?php endif; ?>

<?php endforeach; ?>

<?php }}?>

<?php displayChilds($childs, 1); ?>
<?php /**PATH /var/www/html/project-task/vendor/foostart/package-category/Views/admin/partials/td-record.blade.php ENDPATH**/ ?>