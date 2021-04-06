<?php

$servidor   = "localhost";
$usuario    = "root";
$senha      = "";
$db         = "projetinho";

$conexaoaobanco = mysqli_connect($servidor,$usuario,$senha,$db);

if(mysqli_connect_errno()){
    die("Erro" . mysqli_connect_errno());
}

if(isset($_POST["nome"])){

    $nome       = $_POST["nome"];
    $sobrenome  = $_POST["sobrenome"];
    $email      = $_POST["email"];
    $tipo       = $_POST["tipo"];
    $senha      = $_POST["senha"];
    $confirma   = $_POST["confirma"];

    $inserir = " INSERT INTO projetinho1 ";
    $inserir.= " (nome,sobrenome,email,tipo,senha,confirma) ";
    $inserir.= " VALUES ";
    $inserir.= " ('$nome','$sobrenome','$email','$tipo','$senha','$confirma') ";

    $conexaoinserir = mysqli_query($conexaoaobanco,$inserir);

    if(!$conexaoinserir){
        die("Erro é aqui no DB");
    }else{

    }
}


?>