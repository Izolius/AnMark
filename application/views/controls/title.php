<div id="title" class="bordered title">
    <!-- Logo (Image) -->
    <div class=<?php echo $logo ?>>
      <?php echo img('rsc/images/'.$logo.'.png'); ?>
    </div>
    <!-- Exit (Rectangle) -->
    <div class="bordered button exit_button">
      <p><?php 
        echo anchor(site_url('welcome/logout'),'Выход');
      ?></p>
    </div>
</div>
