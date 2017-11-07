
<?php echo form_open('welcome'); ?>

<h5>Почтовый адрес</h5>
<?php echo form_error('email'); ?>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<h5>Пароль</h5>
<?php echo form_error('password'); ?>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<div><input type="submit" value="Войти" /></div>

<?php
$js = 'onClick=changeLocation("'.site_url('registration').'")';
echo form_button('mybutton', 'Зарегистрироваться', $js);
?>

</form>
