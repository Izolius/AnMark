<div class="bordered user_photo_200">
    <?php echo img('rsc/images/'.$user->photo_200);?>
</div>
<div class="default user_name">
    <p><span><?php echo $user->first_name.' '.$user->last_name?></span></p>
</div>
<?php $this->view('controls/feed',$feeddata); ?>
