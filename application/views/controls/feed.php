<div class="<?php echo $class?>">
<?php 
if (isset($elements)):
    foreach ($elements as $element){
        $this->view($view,$element);
    }
endif; 
?>
</div>