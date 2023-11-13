<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_tabela.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Gerenciamento de Crianças</title>
</head>

<?php
    include_once("conexao.php");

    $sql = "SELECT * FROM tb_educador";
    $resultado = mysqli_query ($conn, $sql) or die ("ERRO.");
    $total = mysqli_num_rows($resultado);
?>

<body>
    <header>
        <nav class="navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path
                    d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />
            </svg>

            <ul class="nav-menu">
                <li class="nav-item"><a href="#">Home</a></li>
                <li class="nav-item"><a href="#">About</a></li>
                <li class="nav-item"><a href="#">Menu</a></li>
                <li class="nav-item"><a href="#">Contact</a></li>
                <i class='bx bx-search'></i>
            </ul>

            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>

    <main class="home">
        <div class="container">
            <div class="tabela">
                <div class="form-header">
                    <div class="title">
                        <h1>Gerenciamento de Educadores</h1>
                    </div>
                    <div class="continue-button">
                        <button class="cadastrar"><a href="cadastro_educador.php">Cadastrar</a></button>
                    </div>
                </div>
                <div class="corpo">
                    <?php
                        echo "<table class='content-table'>";
                        echo "<thead> <tr> <td id = 'top'> NOME </td> <td id = 'top'> CPF </td> <td id = 'top'> EMAIL </td> <td id = 'top'> CELULAR </td> <td id = 'top'> SALARIO </td> <td> </td> </tr></thead>";
                        while ($registro = mysqli_fetch_assoc($resultado)) {
                            $codigo = $registro["CDEDUCADOR"];
                            $nome = $registro["NMEDUCADOR"];
                            $cpf = $registro["NU_CPF"];
                            $email = $registro["DSEMAIL"];
                            $celular = $registro["NU_CEL"];
                            $salario = $registro["VL_SALARIO"];
                            $idade = $registro["NU_IDADE"];
                            $genero = $registro["DSGENERO"];

                            echo"<tr>
                                <td> $nome </td> 
                                <td> $cpf </td> 
                                <td> $email </td> 
                                <td> $celular </td> 
                                <td> $salario </td> 
                                <td class='buttons'>
                                    <div class='button-group'>
                                        <div class='edit-button'>
                                            <button><a href='edit_crianca.php?id=$codigo'><i class='bx bxs-edit'></i></a></button>
                                        </div>
                                        <div class='delete-button'>
                                            <button><a href='delete_educador.php?id=$codigo'><i class='bx bx-trash'></i></a></button>
                                        </div>
                                    </div>
                                </td>
                            </tr>";
                        }
                        echo "</table>";
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
