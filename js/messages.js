function sendMessage(id){
    callApi('SendMessage',[id, document.getElementById('message_input_textarea_id').value]);
    document.getElementById('message_input_textarea_id').value='';
}

function onMessageClick(){
    console.log(dialogDOM=document.getElementById("messages_id").children.length);
}

function onNewMessage(msgHTML){
    var parser= new DOMParser();
    var msgDOM=parser.parseFromString(msgHTML,'text/html').body.children[0];
    var dialogDOM=document.getElementById("messages_id");
    if (msgDOM.id==dialogDOM.children[0].id)
        return msgDOM.id;
    dialogDOM.insertBefore(msgDOM,dialogDOM.children[0]);
    return dialogDOM.children[0].id;
}


function ShortPollingGetMessage(params, onComplete ){
    var xhr=new XMLHttpRequest();
    url='http://anmark.ru/index.php/api/ShortPollingGetMessage';
    params.forEach(function(item, i, params) {
        url=url.concat('/').concat(item);
    });
    
    xhr.onreadystatechange = function(){
        if (this.readyState != 4) return;
        if (xhr.status===200){
            if (this.responseText) {
                // сервер может закрыть соединение без ответа при перезагрузке
                var new_id=onComplete(this.responseText);
              }
              setTimeout(ShortPollingGetMessage, 2000, [params[0],new_id], onComplete); // попробовать ещё раз через 1 сек
              return;
        }
        if (this.status != 502) {
            // 502 - прокси ждал слишком долго, надо пересоединиться, это не ошибка
            //alert(this.statusText); // показать ошибку
          }
        setTimeout(ShortPollingGetMessage, 2000, params, onComplete); // попробовать ещё раз через 1 сек
    }
    xhr.open('GET',url,true);
    xhr.send();
}