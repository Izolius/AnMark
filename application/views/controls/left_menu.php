<div id="left_menu" class="left_menu">
<?php $this->view('controls/left_menu_button',array('site'=>'user/'.currentuser()->id, 'text'=>'Главная'));?>
<?php $this->view('controls/left_menu_button',array('site'=>'friends', 'text'=>'Друзья'));?>
<?php $this->view('controls/left_menu_button',array('site'=>'messages', 'text'=>'Сообщения'));?>
<?php $this->view('controls/left_menu_button',array('site'=>'news', 'text'=>'Новости'));?>          
</div>
