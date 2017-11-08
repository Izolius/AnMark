<div class="bordered feed_element post">
    <div class="default post_author_name_rel">
        <p><span><?php echo $first_name.' '.$last_name?></span></p>
    </div>
    <div class="bordered photo_50 author_photo_50_rel">
        <?php echo img('rsc/images/'.$photo_50); ?>
    </div>
    <div class="post_text_rel">
        <?php echo strip_tags($text)?>
    </div>
</div>