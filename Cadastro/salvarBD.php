<?php
include 'conexao.php';



$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];

$sql = mysqli_query($conexaobd, "INSERT INTO user(nome, sobrenome) VALUES('$nome', '$sobrenome')");

if ($sql) {
    //header("location: listar.php");
}

?>