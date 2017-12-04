
<?php echo form_open('welcome'); ?>
<div>

<div class="bordered login_form_text " >
<div class="field_name">
            <p><span><?php echo ('Адрес электронной почты');?></span></p>
            </div>
<?php echo form_error('email'); ?>
<p><span><input type="text" name="email" value="<?php echo set_value('email'); ?>" size="94" /></span></p>
</div>

<div class="bordered login_form_text " >
<div class="field_name">
            <p><span><?php echo ('Пароль');?></span></p>
            </div>
<?php echo form_error('password'); ?>
<p><span><input type="password" name="password" value="<?php echo set_value('password'); ?>" size="94" /></span></p>
</div>

<div class="button toLogin" >
    <p>
       <input type="submit" value="Войти" />
     </p>
</div>

<div class="button toRegistrtion">
      <p><?php 
        echo anchor(site_url('registration'),'Регистрация');
      ?></p>
    </div>

    </div>
</form>
