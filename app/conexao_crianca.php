<?php

include_once('conexao.php');

$nome = $_POST['NMCRIANCA'];
$idade = $_POST['NU_IDADE'];
$cpf = $_POST['NU_CPF'];
$situacao = $_POST['DS_SITUACAO'];
$sexo = $_POST['DS_SEXO'];

$insere = "INSERT INTO tb_crianca VALUES ('', '$nome', '$idade', '$cpf', '$situacao', '$sexo')";
$resultado = mysqli_query ($conn, $insere);

require_once('cadastro_crianca.php');

?>