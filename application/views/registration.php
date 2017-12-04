


<?php echo form_open('registration'); ?>
<div class="login_form " >
        <div class="bordered login_form_text " >
            <div class="field_name">
            <p><span><?php echo ('Имя');?></span></p>
            </div>
            <?php echo form_error('first_name'); ?>
            <p><span><input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" size="94" /></span></p>
        </div>

        <div class="bordered login_form_text " >
            <div class="field_name">
            <p><span><?php echo ('Фамилия');?></span></p>
            </div>
            <?php echo form_error('last_name'); ?>
            <p><span><input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" size="94" /></span></p>
        </div>

        <div class="bordered login_form_text " >
            <div class="field_name">
            <p><span><?php echo ('Пароль');?></span></p>
            </div>
            <?php echo form_error('password'); ?>
            <p><span><input type="password" name="password" value="<?php echo set_value('password'); ?>" size="94" /></span></p>
        </div>

        <div class="bordered login_form_text " >
            <div class="field_name">
            <p><span><?php echo ('Повторите пароль');?></span></p>
            </div>
            <?php echo form_error('passconf'); ?>
            <p><span><input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="94" /></span></p>
        </div>

        <div class="bordered login_form_text " >
            <div class="field_name">
            <p><span><?php echo ('Адрес электронной почты');?></span></p>
             </div>
            <?php echo form_error('email'); ?>
            <p><span><input type="text" name="email" value="<?php echo set_value('email'); ?>" size="94" /></span></p>
        </div>

        <div class="button toRegistrtion">
        <p><span><div><input type="submit" value="Зарегистрировать" /></div></span></p>
        </div>
        <div class="button toLogin">
      <p><?php 
        echo anchor(site_url('welcome'),'Отмена');
      ?></p>
    </div>
</div>
</form>
