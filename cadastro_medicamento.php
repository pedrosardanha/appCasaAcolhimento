<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_cadastro.css">
    <title>Cadastro de Medicamento</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="conexao_medicamento.php" method="post">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Medicamento</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-group-2">
                        <div class="input-box">
                            <label for="medicineName">Nome do Medicamento</label>
                            <input id="medicineName" type="text" name="NMMEDICAMENTO" placeholder="Nome do Medicamento" required>
                        </div>

                        <div class="input-box">
                            <label for="dose">Estoque Atual</label>
                            <input id="dose" type="text" name="QTESTOQUE" placeholder="Quantidade Disponível" required>
                        </div>
                    </div>
                    <div class="input-group-2">
                        <div class="text-box">
                            <label for="medicineName">Descrição do Uso</label>
                            <textarea name="DSUSO" id="dsuso" cols="30" rows="10" maxlength="250"></textarea>
                        </div>
                    </div>
                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Dosagem</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="volume" type="radio" name="DSDOSAGEM" value="Volume">
                            <label for="volume" value="Volume">Volume</label>
                        </div>

                        <div class="gender-input">
                            <input id="miligramas" type="radio" name="DSDOSAGEM" value="Miligramas">
                            <label for="miligramas" value="Miligramas">Miligramas</label>
                        </div>

                        <div class="gender-input">
                            <input id="unidade" type="radio" name="DSDOSAGEM" value="Unidade">
                            <label for="unidade" value="Unidade">Unidade</label>
                        </div>

                        <div class="gender-input">
                            <input id="gotas" type="radio" name="DSDOSAGEM" value="Gotas">
                            <label for="gotas" value="Gotas">Gotas</label>
                        </div>
                    </div>
                </div>

                <div class="button-group">
                    <div class="cancel-button">
                        <button><a href="#">Cancelar</a></button>
                    </div>
                    <div class="continue-button">
                        <button><a href="tabela_medicamento.php">Cadastrar</a></button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>

</html>
