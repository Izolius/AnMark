<div class="bordered feed_element post">
    <div class="default post_author_name_rel">
        <p><span><?php echo anchor('user/'.$author_id,$first_name.' '.$last_name);?></span></p>
    </div>
    <div class="photo photo_50 author_photo_rel">
    <?php 
            if($photo_50==='' || !isset($photo_50))
                $src='rsc/images/n_50.jpg';
            else
                $src='rsc/images/'.$photo_50;
            $attr=array(
                'src'=>$src,
                'class'=>'photo photo_50'
            );
            echo img($attr);
        
        ?>
    </div>
    <div class="post_text_rel">
        <?php echo strip_tags($text)?>
    </div>
</div>