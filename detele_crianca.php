<?php
include_once('conexao.php');

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Use o objeto de conexão $conn ao invés de $conexao
    $sqlSelect = "SELECT * FROM tb_crianca WHERE CDCRIANCA=$id";
    $result = $conn->query($sqlSelect);

    if ($result && $result->num_rows > 0) {
        $sqlDelete = "DELETE FROM tb_crianca WHERE CDCRIANCA=$id";
        $resultDelete = $conn->query($sqlDelete);

        if ($resultDelete) {
            echo "Registro excluído com sucesso!";
        } else {
            echo "Erro ao excluir registro: " . $conn->error;
        }
    } else {
        echo "Registro não encontrado.";
    }
}

header('Location: tabela_crianca.php');
exit();
?>
