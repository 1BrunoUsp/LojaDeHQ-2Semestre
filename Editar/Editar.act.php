<?php
include('../ConnectBD/Connect.php');
extract($_POST);

if(isset($_FILES['foto']) && $_FILES['foto']['size'] > 0) {
    $destino = "../HQ-Capas/" . md5(time()) . ".jpg";

    if(move_uploaded_file($_FILES['foto']['tmp_name'], $destino)) {
        
        $query = "UPDATE `tb_hq` SET
                  `nome` = '$nome',
                  `preco` = '$preco',
                  `foto` = '$destino',
                  `tema` = '$opcao'
                  WHERE `codigo` = '$codigo'";
    } else {
        echo "Erro no upload da nova imagem.";
        exit; 
    }
} else {
    
    $query = "UPDATE `tb_hq` SET
              `nome` = '$nome',
              `preco` = '$preco',
              `tema` = '$opcao'
              WHERE `codigo` = '$codigo'";
}

if(mysqli_query($con, $query)) {
    $msg = "<p class=\"alerta green\">Registro atualizado com sucesso!</p>";
} else {
    $msg = "<p class=\"alerta red\">Erro ao gravar registro: " . $con->error . "</p>";
}

@session_start();
$_SESSION['msg'] = $msg;
header("location:Editar.php?codigo=$codigo");
?>