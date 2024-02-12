$(document).ready(function() {
    $("#formPesquisar").submit(function (e) {
        e.preventDefault(); 
        var texto = $("#txtPesquisa").val();
        $.ajax({
            type: "post",
            url: "pesquisaM.act.php",
            data: { texto: texto },
            success: function (response) {
                $("#resultadoPesquisa").html(response);
            },
        });
    });
});

function limparPesquisa() {
    $("#resultadoPesquisa").html("");
    document.querySelector("#txtPesquisa").value = "";
    document.querySelector("#txtPesquisa").focus();
}

document.getElementById('nextPesquisa').onclick = function(){
    const widthItem = document.querySelector('.sliderPesquisa').offsetWidth;
    document.getElementById('formListPesquisa').scrollLeft += widthItem;
}
document.getElementById('prevPesquisa').onclick = function(){
    const widthItem = document.querySelector('.sliderPesquisa').offsetWidth;
    document.getElementById('formListPesquisa').scrollLeft -= widthItem;
}