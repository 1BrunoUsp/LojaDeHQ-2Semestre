<?php
@session_start();
require('../../ConnectBD/Connect.php');


$btnLogin = filter_input(INPUT_POST, 'entrar', FILTER_SANITIZE_STRING);

if ($btnLogin) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);

    if ((!empty($email)) && (!empty($senha))) {
        $result_user = "SELECT * FROM `tb_cliente` WHERE `email`='$email' LIMIT 1";
        $resultado_user = mysqli_query($con, $result_user);


        // Existe 1 email ??
        if ($resultado_user) {
            $row_user = mysqli_fetch_assoc($resultado_user);

            // Se senha correta
            if (password_verify($senha, $row_user['senha'])) {
            
                    if ($row_user['adm'] == 1 ) {
                        header("Location: ../../index.php");
                    } else {
                        header("Location: ../../index.php");
                    }
                    $_SESSION['email'] = $row_user['email'];
                    $_SESSION['senha'] = $row_user['senha'];
                    $_SESSION['nome'] = $row_user['nome'];
                    $_SESSION['adm'] = $row_user['adm'];
                    exit();
                }
            } else {
                $_SESSION['msg'] = "Login e Senha incorretos!";
                header("Location: ../TelaDeCadastro.php");
                exit();
            }
        }
    } else {
        $_SESSION['msg'] = "Login e Senha incorretos!";
        header("Location: ../TelaDeCadastro.php");
        exit();
    }

?>
