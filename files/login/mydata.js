function onLogin(Login, Pass){
    //alert(Login+' '+Pass);
    ServerCheckLoginPass(Login, Pass);
}

function ClientCheckLogin(div_id){
    var str=document.getElementById("div_id").value;
    if (str.trim()==='')
      return false;
    else
      return true;
}

function ServerCheckLoginPass(Login, Pass){
    var xhr=new XMLHttpRequest();
    xhr.open('GET','http://www.anmark.org:8080/?file=try.txt',true);
    //xhr.open('GET',"http://anmark.org:8080",true);
    xhr.onreadystatechange = function(){
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status===200)
            alert(xhr.responseText);
    }
    xhr.send();
}