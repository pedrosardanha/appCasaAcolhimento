<?php

include_once('conexao.php');

$nome = $_POST['NMEDUCADOR'];
$cpf = $_POST['NU_CPF'];
$email = $_POST['DSEMAIL'];
$celular = $_POST['NU_CEL'];
$salario = $_POST['VL_SALARIO'];
$idade = $_POST['NU_IDADE'];
$genero = $_POST['DSGENERO'];
$atividade = "";
$endereco = "";


$insere = "INSERT INTO tb_educador VALUES ('', '$nome', '$cpf', '$email', '$celular', '$salario', '$idade', '$genero', '$atividade', '$endereco')";
$resultado = mysqli_query ($conn, $insere);


require_once('cadastro_funcionario.php');

?>