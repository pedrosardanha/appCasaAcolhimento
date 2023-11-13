<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro.css">
    <title>Editar Educador</title>
</head>

<?php
    include_once('conexao.php');

    if (!empty($_GET['id'])) {
        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM tb_educador WHERE CDEDUCADOR=$id";
        $result = $conn->query($sqlSelect);

        if ($result && $result->num_rows > 0) {
            while ($user_data = $result->fetch_assoc()) {
                $codigo = $user_data["CDEDUCADOR"];
                $nome = $user_data["NMEDUCADOR"];
                $cpf = $user_data["NU_CPF"];
                $email = $user_data["DSEMAIL"];
                $celular = $user_data["NU_CEL"];
                $salario = $user_data["VL_SALARIO"];
                $idade = $user_data["NU_IDADE"];
                $genero = $user_data["DSGENERO"];
            }
        }
    }
?>

<body>
    <div class="container">
        <div class="form">
            <form action="conexao_educador.php?acao=editar&id=<?php echo $codigo; ?>" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Editar Educador</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="NMEDUCADOR">Nome Completo</label>
                        <input id="NMEDUCADOR" type="text" name="NMEDUCADOR" placeholder="Nome Completo" required value="<?php echo $nome; ?>">
                    </div>

                    <div class="input-box">
                        <label for="NU_CPF">CPF</label>
                        <input id="NU_CPF" type="text" maxlength="14" onkeyup="handleCpf(event)" name="NU_CPF" placeholder="xxx.xxx.xxx-xx" required value="<?php echo $cpf; ?>" disabled>
                    </div>

                    <div class="input-box">
                        <label for="DSEMAIL">E-mail</label>
                        <input id="DSEMAIL" type="email" name="DSEMAIL" placeholder="Digite seu e-mail" required value="<?php echo $email; ?>">
                    </div>

                    <div class="input-box">
                        <label for="NU_CEL">Celular</label>
                        <input id="NU_CEL" type="tel" maxlength="15" onkeyup="handlePhone(event)" name="NU_CEL" placeholder="(xx) xxxxx-xxxx" required value="<?php echo $celular; ?>">
                    </div>

                    <div class="input-box">
                        <label for="VL_SALARIO">Salário</label>
                        <input id="VL_SALARIO" type="text" name="VL_SALARIO" placeholder="Digite o valor do salário" required value="<?php echo $salario; ?>">
                    </div>

                    <div class="input-box">
                        <label for="NU_IDADE">Idade</label>
                        <input id="NU_IDADE" type="text" name="NU_IDADE" placeholder="Idade do funcionário" required value="<?php echo $idade; ?>">
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="DSGENERO_Feminino" type="radio" name="DSGENERO" value="Feminino" <?php echo ($genero === 'Feminino') ? 'checked' : ''; ?>>
                            <label for="DSGENERO_Feminino" value="Feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="DSGENERO_Masculino" type="radio" name="DSGENERO" value="Masculino" <?php echo ($genero === 'Masculino') ? 'checked' : ''; ?>>
                            <label for="DSGENERO_Masculino" value="Masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="DSGENERO_Outros" type="radio" name="DSGENERO" value="Outros" <?php echo ($genero === 'Outros') ? 'checked' : ''; ?>>
                            <label for="DSGENERO_Outros" value="Outros">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="DSGENERO_NaoInformou" type="radio" name="DSGENERO" value="Não Informou" <?php echo ($genero === 'Não Informou') ? 'checked' : ''; ?>>
                            <label for="DSGENERO_NaoInformou" value="Não Informou">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="button-group">
                    <div class="cancel-button">
                        <button><a href="#">Cancelar</a> </button>
                    </div>
                    <div class="continue-button">
                        <button type="submit">Salvar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="js/mascaras_cadastro.js"></script>
</body>
</html>