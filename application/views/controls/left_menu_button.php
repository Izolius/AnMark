    <div <?php if (isset($id)) echo 'id="'.$id.'"'; ?> class="button left_menu_button">
<?php 
$_text='';
$_site='';
$_class='link';
if (isset($text))
    $_text=$text;
if (isset($site))
    $_site=$site;
if (isset($class))
    $_class=$class;
?>
        <p  class="button_text"><?php echo anchor(site_url($_site), $_text, 'class="'.$_class.'"');?></p>
    </div>
