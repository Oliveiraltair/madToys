<?php
    $nome = $_POST["nome"];
    $login = $_POST["login"];
    $senha = $_POST["senha"];

    //$con = mysqli_connect("localhost", "root", "", "padaria");
    include "conexao.php";
    $senhacripto = md5($senha);

    //inserindo intens na tabela
    $sql = "insert into usuario (nome, login, senha) values ('" . $nome ."', '" . $login . "', '" . $senhacripto . "')";

    mysqli_query($con, $sql);

    header("Location: login.php");
    
?>