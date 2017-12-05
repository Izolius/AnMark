<div id="title" class="title">
    <!-- Logo (Image) -->
    <div class=<?php echo $logo ?>>
      <?php echo img('rsc/images/'.$logo.'.png'); ?>
    </div>
    <!-- Exit (Rectangle) -->
    <div class="button exit_button">
      <p class="button_text"><?php 
        echo anchor(site_url('welcome/logout'),'Выход');
      ?></p>
    </div>
</div>
