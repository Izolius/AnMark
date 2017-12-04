
<textarea id="message_input_textarea_id" class="message_input_textarea">
</textarea>

<div class="default button write_message_button" onclick="sendMessage(<?php echo $user->id?>)" >
        <p class="write_message_button_text">Send</p>
</div>

<?php $this->view('controls/feed',$feeddata); ?>
<script>
        LongPollingGetMessage([<?php echo $user->id?>,document.getElementById('messages_id').children[0].id],onNewMessage);
</script>