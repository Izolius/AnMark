<div>
    <?php 
        if($user->photo_200==='' || !isset($user->photo_200))
            $src='rsc/images/n_200.jpg';
        else
            $src='rsc/images/'.$user->photo_200;
        $attr=array(
            'src'=>$src,
            'class'=>'photo photo_200 user_photo'
        );
        echo img($attr);
    
    ?>
</div>
<div class="default user_name">
    <p><span><?php echo $user->first_name.' '.$user->last_name?></span></p>
</div>
<?php $this->view('controls/feed',$feeddata); ?>
