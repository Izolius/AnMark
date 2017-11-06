<!DOCTYPE html>
<html>
    <head>
        <?php if (isset($css)):?>
            <?php if ( is_array($css)):?>
                <?php foreach ($css as $item):?>

                    <?php echo link_tag('css/'.$item);?>

                <?php endforeach;?>
            <?php endif; ?>
        <?php endif; ?>
    </head>
    <body>
