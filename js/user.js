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
