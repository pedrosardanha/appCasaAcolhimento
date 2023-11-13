<?php
    include_once('conexao.php');

    if (!empty($_GET['acao'])) {
        $acao = $_GET['acao'];

        if ($acao === 'cadastrar') {
            $nome = $_POST['NMEDUCADOR'];
            $cpf = $_POST['NU_CPF'];
            $email = $_POST['DSEMAIL'];
            $celular = $_POST['NU_CEL'];
            $salario = $_POST['VL_SALARIO'];
            $idade = $_POST['NU_IDADE'];
            $genero = $_POST['DSGENERO'];
            $atividade = "";
            $endereco = "";

            $insere = "INSERT INTO tb_educador (NMEDUCADOR, NU_CPF, DSEMAIL, NU_CEL, VL_SALARIO, NU_IDADE, DSGENERO, DSTIPO_ATIVIDADE, DSENDERECO) VALUES ('$nome', '$cpf', '$email', '$celular', '$salario', '$idade', '$genero', '$atividade', '$endereco')";
            $resultado = mysqli_query($conn, $insere);

            if ($resultado) {
                echo "Inserção realizada com sucesso!";
            } else {
                echo "Erro ao inserir: " . mysqli_error($conn);
            }
        }

        if ($acao === 'editar') {
            $id = $_GET['id'];
            $nome = $_POST['NMEDUCADOR'];
            $email = $_POST['DSEMAIL'];
            $celular = $_POST['NU_CEL'];
            $salario = $_POST['VL_SALARIO'];
            $idade = $_POST['NU_IDADE'];
            $genero = $_POST['DSGENERO'];

            $sqlUpdate = "UPDATE tb_educador SET NMEDUCADOR='$nome', DSEMAIL='$email', NU_CEL='$celular', VL_SALARIO='$salario', NU_IDADE='$idade', DSGENERO='$genero' WHERE CDEDUCADOR=$id";
            $result = mysqli_query($conn, $sqlUpdate);

            if ($result) {
                echo "Atualização realizada com sucesso!";
            } else {
                echo "Erro ao atualizar: " . mysqli_error($conn);
            }
        }
    }
    
    header('Location: tabela_educador.php');
    exit();
?>