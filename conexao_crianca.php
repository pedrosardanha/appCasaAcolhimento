<?php
    include_once('conexao.php');

    if (!empty($_GET['acao'])) {
        $acao = $_GET['acao'];

        if ($acao === 'cadastrar') {
            $nome = $_POST['NMCRIANCA'];
            $idade = $_POST['NU_IDADE'];
            $cpf = $_POST['NU_CPF'];
            $situacao = $_POST['DS_SITUACAO'];
            $sexo = $_POST['DS_SEXO'];

            $insere = "INSERT INTO tb_crianca (NMCRIANCA, NU_IDADE, NU_CPF, DS_SITUACAO, DS_SEXO) VALUES ('$nome', '$idade', '$cpf', '$situacao', '$sexo')";
            $resultado = mysqli_query($conn, $insere);

            if ($resultado) {
                echo "Inserção realizada com sucesso!";
            } else {
                echo "Erro ao inserir: " . mysqli_error($conn);
            }
        }

        if ($acao === 'editar') {
            $id = $_GET['id'];
            $nome = $_POST['NMCRIANCA'];
            $idade = $_POST['NU_IDADE'];
            $situacao = $_POST['DS_SITUACAO'];
            $sexo = $_POST['DS_SEXO'];

            $sqlUpdate = "UPDATE tb_crianca SET NMCRIANCA='$nome', NU_IDADE='$idade', DS_SITUACAO='$situacao', DS_SEXO='$sexo' WHERE CDCRIANCA=$id";
            $result = mysqli_query($conn, $sqlUpdate);

            if ($result) {
                echo "Atualização realizada com sucesso!";
            } else {
                echo "Erro ao atualizar: " . mysqli_error($conn);
            }
        }
    }

    header('Location: tabela_crianca.php');
    exit();
?>
