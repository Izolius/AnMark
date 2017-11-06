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
        <?php if (isset($script)):?>
            <?php if ( is_array($script)):?>
                <?php foreach ($script as $item):?>

                    <?php echo script_tag('js/'.$item);?>

                <?php endforeach;?>
            <?php endif; ?>
        <?php endif; ?>
    </head>
    <body>
        <div class="page">
