<?php

    $login = $_POST["login"];
    $senha = $_POST["senha"];

    include "conexao.php";

    $senhacripto = md5($senha);
    //echo $senhacripto;

    //$cost = 15;
    //$password_hash = password_hash($senha, PASSWORD_DEFAULT, ["cost" => $cost] );

    //$password_hash2 = password_hash($senha, PASSWORD_DEFAULT, ["cost" => $cost] );
    
    //echo $password_hash . " - ";
    //echo $password_hash2;

    $sql = "select * from usuario where login = '" . 
        $login . "' and senha = '" . $senhacripto . "'";
        
    $resultado = mysqli_query($con, $sql);
    
    if ($linha = mysqli_fetch_array($resultado)){
        //echo "Encontrado";
        session_start();
        $_SESSION["usuario_logado"] = $linha["nome"];

        header("Location: index.php");

    } else {
        echo "<script>
                alert('usuário inválido');
                window.location = 'login.php'
               </script>";
    }
?>

