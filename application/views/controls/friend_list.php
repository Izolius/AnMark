<div class="friend_list">
<?php 
if (isset($friends)):
    foreach ($friends as $friend){
        $this->view('controls/friend',$friend);
    }
endif; 
?>
</div>
