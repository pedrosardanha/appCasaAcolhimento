<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro_crianca.css">
 
    <title>Cadastro de Criança</title>
</head>

<?php
include_once("conexao.php");

$sql = "SELECT * FROM tb_crianca";
$resultado = mysqli_query ($conn, $sql) or die ("ERRO.");
$total = mysqli_num_rows($resultado);
?>
<body>
    <div class="container">
        <div class="form">
            <form action="cc_inserir.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Criança</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-group-2">
                        <div class="input-box">
                            <label for="firstname">Nome Completo</label>
                            <input id="firstname" type="text" name="NMCRIANCA" placeholder="Nome Completo" required>
                        </div>

                        <div class="input-box">
                            <label for="identification">Idade</label>
                            <input id="identification" type="text" name="NU_IDADE" placeholder="Idade" required>
                        </div>
                    </div>
                    <div class="input-group-2">
                        <div class="input-box">
                            <label for="cpf">CPF</label>
                            <input id="cpf" type="text" name="NU_CPF" placeholder="xxx.xxx.xxx-xx" required>
                        </div>

                        <div class="input-box">
                            <label for="number">Situação</label>
                            <input id="number" type="text" name="DS_SITUACAO" placeholder="Situação da Criança" required>
                        </div>
                    </div>
                </div>
            
                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="DS_SEXO" value="Feminino">
                            <label for="female" value="Feminino">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="DS_SEXO" value="Masculino">
                            <label for="male" value="Masculino">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="DS_SEXO" value="Outros">
                            <label for="others" value="Outros">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="DS_SEXO" value="Não Informou">
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
        echo "<TR> <TD id = 'top'> CODIGO </TD> <TD id = 'top'> NOME </TD> <TD id = 'top'> IDADE </TD> <TD id = 'top'> CPF </TD> <TD id = 'top'> SITUAÇÃO </TD></TR>";
        while ($registro = mysqli_fetch_assoc($resultado)){
            $codigo = $registro["CDCRIANCA"];
            $nome = $registro["NMCRIANCA"];
            $idade = $registro["NU_IDADE"];
            $cpf = $registro["NU_CPF"];
            $situacao = $registro["DS_SITUACAO"];
            $sexo = $registro["DS_SEXO"];
        
            echo "<TR> <TD> $codigo </TD> <TD> $nome </TD> <TD> $idade </TD> <TD> $cpf </TD> <TD> $situacao </TD> <TD> $sexo </TD> <TD><A href='excluir_cliente.php?codigo=$codigo'>
            <IMG src= 'excluir.png' > </A></TD></TR>";
        }
        echo "</table>";
        ?>
</body>


</html>