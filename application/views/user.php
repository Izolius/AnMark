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
<?php if($canAdd):?>
<div class="button add_friend_button" onclick = "window.location.href='../api/addFriend/<?php echo $user->id?>/friends'">
        <p>
            Добавить в друзья
        </p>
</div>
    <?php else:?>
    <?php if($user->id != currentUser()->id):?>
<div class="button add_friend_button" onclick = "window.location.href='../friends/<?php $user->id?>'">
        <p>
            Посмотреть друзей
        </p>
</div>
<?php endif?>
<?php endif?>
<div class="default user_name">
    <p><span><?php echo $user->first_name.' '.$user->last_name?></span></p>
</div>
<?php $this->view('controls/feed',$feeddata); ?>
