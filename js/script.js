function onOpenPage(index){
    var children=[].slice.call(document.getElementById('left_menu').children);
    children.forEach(function(item, i, children ) {
        item.style.backgroundColor='rgba(215,215,215,1)';
    });
    if (index==-1)
    return;
    children[index].style.backgroundColor='rgba(185,185,185,1)';
}