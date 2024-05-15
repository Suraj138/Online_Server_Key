<?php

// Conexion
require_once 'app/DB.php';
include 'app/info.php';

// Session
session_start();

// Enviar datos "post"
if(isset($_POST['btn-entrar'])):
    $erros = array();
    $login = mysqli_escape_string($conn, $_POST['login']);
    $senha = mysqli_escape_string($conn, $_POST['senha']);

    if(isset($_POST['lembrar-senha'])):

        setcookie('login', $login, time()+3600);
        setcookie('senha', md5($senha), time()+3600);
    endif;

    if(empty($login) or empty($senha)):
        $erros['alert'] = "No register";
else:
// 105 OR 1=1 
// 1; DROP TABLE teste

    $sql = "SELECT login FROM $tabela2 WHERE login = '$login'";
    $resultado = mysqli_query($conn, $sql);     

    if(mysqli_num_rows($resultado) > 0):
        $senha = md5($senha);       
        $sql = "SELECT * FROM $tabela2 WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($conn, $sql);
        
        if(mysqli_num_rows($resultado) == 1):
            $dados = mysqli_fetch_array($resultado);
            mysqli_close($conn);
            $_SESSION["$sessao"] = true;
            $_SESSION['id_usuario'] = $dados['id'];

            header('Location: admin/dashboard');

        else:
            $erros['alert'] = "<center><li>Usuário ou senha incorretos!</li></center>";
        endif;

    else:
        $erros['alert'] = "<center><li>Usuário inexistente!</li></center>";
    endif;

endif;

endif;
?>

