<?php
session_start();
extract($_POST);

require('../../ConnectBD/Connect.php');
extract($_FILES);
$dados_rc = filter_input_array(INPUT_POST, FILTER_DEFAULT);
$erro = false;

$dados_st = array_map('strip_tags', $dados_rc);
$dados = array_map('trim', $dados_st);

if (in_array(' ', $dados)) {
    $erro = true;
    $_SESSION['msg'] = "Necessário preencher todos os campos";
} else if (strlen($dados['senha']) < 6) {
    $erro = true;
    $_SESSION['msg'] = "A Senha deve ter no mínimo 6 caracteres";
} else if (strpos($dados['senha'], "'") !== false) {
    $erro = true;
    $_SESSION['msg'] = "Caractere (') inválido na senha";
} else {
    // Verificar se o e-mail já existe no banco de dados
    $result_email = "SELECT * FROM tb_cliente WHERE email='" . $dados['email'] . "'";
    $resultado_email = mysqli_query($con, $result_email);

    if (($resultado_email) and ($resultado_email->num_rows != 0)) {
        $erro = true;
        $_SESSION['msg'] = "Este Email já está sendo utilizado";
    } else {

        $senha_hash = password_hash($dados['senha'], PASSWORD_DEFAULT);
        mysqli_query($con, "INSERT INTO `tb_cliente` 
            (`codigo`, `email`, `senha`, `nome`, `adm`) VALUES
            (NULL, '$email' , '$senha_hash' , '$nome' , '$adm');");
        
        header("location:../TelaDeLogin.php");
    }
}

if ($erro) {
    header("location:../TelaDeCadastro.php");
}
?>
