<?php
    include('ConnectBD/Connect.php');
    $codigo = $_GET['codigo'];
    if(mysqli_query($con, "Delete from `tb_hq` where `codigo` =  '$codigo'")){
        echo " Excluido com Sucesso!";
    }else{
        echo"Erro ao excluir";
        echo $con->error;
    }
    