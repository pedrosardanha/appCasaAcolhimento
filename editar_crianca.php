<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro.css">
 
    <title>Cadastro de Criança</title>
</head>

<?php
    include_once('conexao.php');

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];

        // Use o objeto de conexão $conn ao invés de $conexao
        $sqlSelect = "SELECT * FROM tb_crianca WHERE CDCRIANCA=$id";
        $result = $conn->query($sqlSelect);

        if ($result && $result->num_rows > 0) {
            while ($user_data = mysqli_fetch_assoc($result)) {
                $codigo = $user_data ["CDCRIANCA"];
                $nome = $user_data ["NMCRIANCA"];
                $idade = $user_data ["NU_IDADE"];
                $cpf = $user_data ["NU_CPF"];
                $situacao = $user_data ["DS_SITUACAO"];
                $sexo = $user_data ["DS_SEXO"];
            }
        }
    }
?>

<body>
    <div class="container">
        <div class="form">
            <form action="conexao_crianca.php?acao=editar&id=<?php echo $codigo; ?>" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar Criança</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-group-2">
                        <div class="input-box">
                            <label for="firstname">Nome Completo</label>
                            <input id="firstname" type="text" name="NMCRIANCA" placeholder="Nome Completo" required value="<?php echo $nome; ?>">
                        </div>

                        <div class="input-box">
                            <label for="identification">Idade</label>
                            <input id="identification" type="text" name="NU_IDADE" placeholder="Idade" required value="<?php echo $idade; ?>">
                        </div>
                    </div>
                    <div class="input-group-2">
                        <div class="input-box">
                            <label for="cpf">CPF</label>
                            <input id="cpf" type="text" maxlength="14" onkeyup="handleCpf(event)" name="NU_CPF" placeholder="xxx.xxx.xxx-xx" value="<?php echo $cpf; ?>" disabled>
                        </div>

                        <div class="input-box">
                            <label for="number">Situação</label>
                            <input id="number" type="text" name="DS_SITUACAO" placeholder="Situação da Criança" required value="<?php echo $situacao; ?>">
                        </div>
                    </div>
                </div>
            
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="DS_SEXO" value="Feminino" <?php echo ($sexo === 'Feminino') ? 'checked' : ''; ?>>
                            <label for="female" value="Feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="DS_SEXO" value="Masculino" <?php echo ($sexo === 'Masculino') ? 'checked' : ''; ?>>
                            <label for="male" value="Masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="DS_SEXO" value="Outros" <?php echo ($sexo === 'Outros') ? 'checked' : ''; ?>>
                            <label for="others" value="Outros">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="DS_SEXO" value="Não Informou" <?php echo ($sexo === 'Não Informou') ? 'checked' : ''; ?>>
                            <label for="none" value="Não Informou">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                
                <div class="button-group">
                    <div class="cancel-button">
                        <button><a href="#">Cancelar</a> </button>
                    </div>
                    <div class="continue-button">
                        <button><a href="tabela_crianca.php">Salvar</a> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    <script src="js/mascaras_cadastro.js"></script>
</body>


</html>