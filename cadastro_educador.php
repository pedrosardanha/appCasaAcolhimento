<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro.css">
    <title>Cadastro de Educador</title>
</head>

<?php
    include_once("conexao.php");

    $sql = "SELECT * FROM tb_educador";
    $resultado = mysqli_query ($conn, $sql) or die ("ERRO.");
    $total = mysqli_num_rows($resultado);
?>

<body>
    <div class="container">
        <div class="form">
            <form action="conexao_educador.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Educador</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="firstname">Nome Completo</label>
                        <input id="NMEDUCADOR" type="text" name="NMEDUCADOR" placeholder="Digite seu primeiro nome" required>
                    </div>

                    <div class="input-box">
                        <label for="identification">CPF</label>
                        <input id="NU_CPF" type="text" name="NU_CPF" placeholder="xxx.xxx.xxx-xx" required>
                    </div>
                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="DSEMAIL" type="email" name="DSEMAIL" placeholder="Digite seu e-mail" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="NU_CEL" type="tel" name="NU_CEL" placeholder="(xx) xxxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="password">Salário</label>
                        <input id="VL_SALARIO" type="text" name="VL_SALARIO" placeholder="Digite o valor do salário" required>
                    </div>


                    <div class="input-box">
                        <label for="confirmPassword">Idade</label>
                        <input id="NU_IDADE" type="text" name="NU_IDADE" placeholder="Idade do funcioário" required>
                    </div>
                </div>
            
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="DSGENERO" type="radio" name="DSGENERO" value="Feminino">
                            <label for="female" value="Feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="DSGENERO" type="radio" name="DSGENERO" value="Masculino">
                            <label for="male" value="Masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="DSGENERO" type="radio" name="DSGENERO" value="Outros">
                            <label for="others" value="Outros">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="DSGENERO" type="radio" name="DSGENERO" value="Não Informou">
                            <label for="none" value="Não Informou">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="button-group">
                    <div class="cancel-button">
                        <button><a href="#">Cancelar</a> </button>
                    </div>
                    <div class="continue-button">
                        <button><a href="tabela_educador.php">Cadastrar</a> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>