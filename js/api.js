function callApi(method, params, onComplete){
    var xhr=new XMLHttpRequest();
    url='http://anmark.ru/index.php/api'+'/'+method;
    params.forEach(function(item, i, params) {
        url=url.concat('/').concat(item);
    });
    xhr.open('GET',url);
    xhr.onreadystatechange = function(){
        if (xhr.readyState === XMLHttpRequest.DONE && xhr.status===200)
            onComplete();
    }
    xhr.send();
}