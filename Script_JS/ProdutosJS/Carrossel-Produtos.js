// esse funcionamento de setas é expecifico por isso criei um monte
document.getElementById('nextPesquisa').onclick = function(){
    const widthItem = document.querySelector('.sliderPesquisa').offsetWidth;
    document.getElementById('formListPesquisa').scrollLeft += widthItem;
}
document.getElementById('prevPesquisa').onclick = function(){
    const widthItem = document.querySelector('.sliderPesquisa').offsetWidth;
    document.getElementById('formListPesquisa').scrollLeft -= widthItem;
}