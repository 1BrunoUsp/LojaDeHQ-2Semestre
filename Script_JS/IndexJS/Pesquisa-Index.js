$(document).ready(function() {
    $("#formPesquisar").submit(function (e) {
        e.preventDefault(); 
        var texto = $("#txtPesquisa").val();
        $.ajax({
            type: "post",
            url: "Pesquisar.act.php",
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