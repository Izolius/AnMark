<div class="bordered feed_element friend">
    <div class="friend_name">
        <p><span><?php echo anchor('user/'.$id,$first_name.' '.$last_name);?></span></p>
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
    <?php if($ourUser):?>
    <div class = "button exit_button" onclick = "window.location.href='api/removeFriend/<?php echo $id?>/friends'">
        <p> 
            Убрать
        </p>
    </div>
    <?php endif?>
</div>
