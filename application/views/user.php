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

<div id="add_friend_button" class="button add_friend_button" onclick = "addFriend(<?php echo $user->id?>)"
    <?php if(!$canAdd):?>
    style="visibility:hidden"
    <?php endif?> 
>
        <p>
            Добавить в друзья
        </p>
</div>
    
<div id="remove_friend_button" class="button remove_friend_button" onclick = "removeFriend(<?php echo $user->id?>)"
    <?php if(!$canRemove):?>
    style="visibility:hidden"
    <?php endif?>  
>
    <p>
    Удалить из друзей
    </p>
</div>
<div class="button view_friend_button" onclick = "window.location.href='../friends/<?php echo $user->id?>'">
    <p><?php 
        echo anchor(site_url('friends/'.$user->id),'Посмотреть друзей');
    ?></p>
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
