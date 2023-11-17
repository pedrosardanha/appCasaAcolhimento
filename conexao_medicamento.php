<?php
    include_once('conexao.php');

    if (!empty($_POST)) {
        $nomeMedicamento = $_POST['NMMEDICAMENTO'];
        $dosagem = $_POST['DSDOSAGEM'];
        $estoque = $_POST['QTESTOQUE'];
        $descricaoUso = $_POST['DSUSO'];

        // Verifica se algum campo obrigatório está vazio
        if (empty($nomeMedicamento) || empty($dosagem) || empty($estoque)) {
            echo "Todos os campos obrigatórios devem ser preenchidos.";
        } else {
            // Insere os dados na tabela
            $insereMedicamento = "INSERT INTO tb_medicamento (NMMEDICAMENTO, DSDOSAGEM, QTESTOQUE, DSUSO) VALUES ('$nomeMedicamento', '$dosagem', '$estoque', '$descricaoUso')";
            $resultado = mysqli_query($conn, $insereMedicamento);
            echo $insereMedicamento;

            if ($resultado) {
                echo "Medicamento registrado com sucesso!";
            } else {
                echo "Erro ao registrar medicamento: " . mysqli_error($conn);
            }
        }
    }
?>