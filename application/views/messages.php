
<textarea id="message_input_textarea_id" class="bordered message_input_textarea">
</textarea>

<div class="bordered_btn button write_message_button" onclick="sendMessage(<?php echo $user->id?>)" >
        <p class="write_message_button_text">Send</p>
</div>

<?php $this->view('controls/feed',$feeddata); ?>
<script>
        ShortPollingGetMessage([<?php echo $user->id?>,document.getElementById('messages_id').children[0].id],onNewMessage);
</script>