function addFriend(id){
    callApi('addFriend',[id],function(){
        document.getElementById('add_friend_button').style.visibility='hidden';
        document.getElementById('remove_friend_button').style.visibility='visible';
    });
}

function removeFriend(id){
    callApi('removeFriend',[id],function(){
        document.getElementById('add_friend_button').style.visibility='visible';
        document.getElementById('remove_friend_button').style.visibility='hidden';
    });
}

function addPost(id,element,redirect){
    window.location.href='window.location.href=../api/addPost/'+id+'/'+document.getElementById(element).value+'/'+redirect;
}
