<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleCadastro_medicamento.css">
 
    <title>Cadastro de Medicamento</title>
</head>

<body>
    <div class="container">
        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de Medicamento</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-group-2">
                        <div class="input-box">
                            <label for="firstname">Nome do Medicamento</label>
                            <input id="firstname" type="text" name="NMCRIANCA" placeholder="Nome do Medicamento" required>
                        </div>

                        <div class="input-box">
                            <label for="identification">Dose</label>
                            <input id="identification" type="text" name="NU_IDADE" placeholder="Valor da Dose" required>
                        </div>
                    </div>
                    <div class="input-group-2">
                        <div class="custom-select">
                            <label for="cpf">Tipo de Dose</label>
                            <Select>
                                <option value="" selected>Selecione um Tipo</option>
                                <option value="1">Volume</option>
                                <option value="2">Miligramas</option>
                                <option value="3">Unidade</option>
                            </Select>
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
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="#">Continuar</a> </button>
                </div>
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/cadastro_medicamento.js"></script>
</body>

</html>