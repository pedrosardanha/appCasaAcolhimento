<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro_funcionario.css">
    <title>Cadastro de Criança</title>
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
            <form action="cf_inserir.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Funcionario</h1>
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

                <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>

    <?php
        echo "<TABLE border = 1 id = 'borda'>";
        echo "<TR> <TD id = 'top'> CODIGO </TD> <TD id = 'top'> NOME </TD> <TD id = 'top'> CPF </TD> <TD id = 'top'> EMAIL </TD> <TD id = 'top'> CELULAR </TD> <TD id = 'top'> SALARIO </TD> <TD id = 'top'> IDADE </TD> <TD id = 'top'> GENERO </TD> </TR>";
        while ($registro = mysqli_fetch_assoc($resultado)){
            $codigo = $registro["CDEDUCADOR"];
            $nome = $registro["NMEDUCADOR"];
            $cpf = $registro["NU_CPF"];
            $email = $registro["DSEMAIL"];
            $celular = $registro["NU_CEL"];
            $salario = $registro["VL_SALARIO"];
            $idade = $registro["NU_IDADE"];
            $genero = $registro["DSGENERO"];
        
            echo "<TR> <TD> $codigo </TD> <TD> $nome </TD> <TD> $cpf </TD> <TD> $email </TD> <TD> $celular </TD> <TD> $salario </TD> <TD> $idade </TD> <TD> $genero </TD> </TR>";
        }
        echo "</table>";
        
        ?>

</body>

</html>