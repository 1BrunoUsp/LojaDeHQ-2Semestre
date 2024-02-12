function Excluir(codigo){
    opcao = confirm("Deseja excluir o registro " + codigo + "?");
    console.log(opcao);
    if(opcao == true){
        $.ajax({
            type: "get",
            url: "Excluir.php?codigo=" + codigo,
            success: function (response) {
                console.log(response);
                location.reload();
            }
        });
    }
}