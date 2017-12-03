<div id="<?php echo $msgid;?>" class="bordered feed_element dialog">
    <div class="friend_name">
        <p class="exactp"><span><?php echo anchor('user/'.$userid,$first_name.' '.$last_name);?></span></p>
    </div>
    <div>
        <?php 
            if($photo_50==='' || !isset($photo_50))
                $src='rsc/images/n_50.jpg';
            else
                $src='rsc/images/'.$photo_50;
            $attr=array(
                'src'=>$src,
                'class'=>'photo photo_50 friend_photo'
            );
            echo img($attr);
        ?>
    </div>
    <div class="dialog_last_message" >
        <p class="dialog_last_message_text exactp"> <?php echo $text?></p>
    </div>
</div>
