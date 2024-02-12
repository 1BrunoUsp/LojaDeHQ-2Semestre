<?php
@session_start();
require('ConnectBD/Connect.php');
extract($_FILES);
extract($_POST);

$destino = "HQ-Capas/" . md5(time()) . ".jpg";

if (move_uploaded_file($foto['tmp_name'], $destino)) {
    mysqli_query($con, "INSERT INTO `tb_hq` (`codigo`, `nome`, `preco`, `foto`, `tema`) VALUES (NULL, '$nome', '$preco', '$destino', '$opcao')");
    header("location:AdicionarHQ/addHQ.php");
} else {
   
    echo "Erro no upload do arquivo.";
}

include('ConnectBD/Connect.php');

