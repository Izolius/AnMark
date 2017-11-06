
<?php echo form_open('registration'); ?>

<h5>First name</h5>
<?php echo form_error('first_name'); ?>
<input type="text" name="first_name" value="<?php echo set_value('first_name'); ?>" size="50" />

<h5>Last name</h5>
<?php echo form_error('last_name'); ?>
<input type="text" name="last_name" value="<?php echo set_value('last_name'); ?>" size="50" />

<h5>Password</h5>
<?php echo form_error('password'); ?>
<input type="password" name="password" value="<?php echo set_value('password'); ?>" size="50" />

<h5>Password Confirm</h5>
<?php echo form_error('passconf'); ?>
<input type="password" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />

<h5>Email Address</h5>
<?php echo form_error('email'); ?>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />

<div><input type="submit" value="Зарегистрировать" /></div>

</form>
