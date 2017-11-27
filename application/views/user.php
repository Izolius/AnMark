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

<?php if($canAdd):?>
<div class="button add_friend_button" onclick = "window.location.href='../api/addFriend/<?php echo $user->id?>/friends'">
        <p>
            Добавить в друзья
        </p>
</div>
    <?php else:?>
    <?php if($canRemove):?>
    <div class="button remove_friend_button" onclick = "window.location.href='../api/removeFriend/<?php echo $user->id?>/friends'">
            <p>
            Удалить из друзей
            </p>
    </div>
    <?php endif?>
<?php endif?>
<div class="button view_friend_button" onclick = "window.location.href='../friends/<?php echo $user->id?>'">
        <p>
            Посмотреть друзей
        </p>
</div>
<textarea id="post_input_textarea_id" class="post_input_textarea">
</textarea>

<script>
    function addPost(id,element,redirect){
        window.location.href='window.location.href=../api/addPost/'+id+'/'+document.getElementById(element).value+'/'+redirect;
    }
</script>

<div class="default button post_input_button" onclick="addPost(<?php echo $user->id?>,'post_input_textarea_id','/user/<?php echo $user->id?>')">
        <p class="post_input_button_text">V</p>
</div>
<?php $this->view('controls/feed',$feeddata); ?>
