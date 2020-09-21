<?php

    include("conexao.php");  
    session_start();
    /*session is started if you don't write this line can't use $_Session  global variable*/

    $login = $_POST['login'];
    $entrar = $_POST['entrar'];
    $senha = md5($_POST['senha']);


    if (isset($entrar)) {

        $query = "SELECT * FROM usuarios WHERE login ='".$login."' AND senha = '".$senha."'";
        $verifica = mysqli_query($conn, $query) or die("erro ao selecionar");
        $user_logado = mysqli_fetch_array($verifica);
        $count_user_logado = mysqli_num_rows($verifica);
      
        if ($count_user_logado == 0){
            echo"<script language='javascript' type='text/javascript'>
            alert('Login e/ou senha incorretos');window.location
            .href='login.php';</script>";

        }else{
            setcookie("user",$login);
            setcookie("userId",$user_logado['id']);

            // Se a sessão não existir, inicia uma
            

            // Salva os dados encontrados na sessão
            $_SESSION['userId'] = $user_logado['id'];
            $_SESSION['userName'] = $user_logado['login'];

            header("Location:avaliacao.php");

            
        }
    }

?>