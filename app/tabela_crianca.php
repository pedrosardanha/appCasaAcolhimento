<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styleTabela_crianca.css">
    <title>Gerenciamento de Crianças</title>
</head>

<?php
    include_once("conexao.php");

    $sql = "SELECT * FROM tb_crianca";
    $resultado = mysqli_query ($conn, $sql) or die ("ERRO.");
    $total = mysqli_num_rows($resultado);
?>

<body>
    <header>
        <nav class="navigation">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16">
                <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
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

    <main>
    <?php
        echo "<table border = 1 id = 'borda'>";
        echo "<tr> <td id = 'top'> CODIGO </td> <td id = 'top'> NOME </td> <td id = 'top'> IDADE </td> <td id = 'top'> CPF </td> <td id = 'top'> SITUAÇÃO </td></tr>";
        while ($registro = mysqli_fetch_assoc($resultado)){
            $codigo = $registro["CDCRIANCA"];
            $nome = $registro["NMCRIANCA"];
            $idade = $registro["NU_IDADE"];
            $cpf = $registro["NU_CPF"];
            $situacao = $registro["DS_SITUACAO"];
            $sexo = $registro["DS_SEXO"];
        
            echo "<tr> <td> $codigo </td> <td> $nome </td> <td> $idade </td> <td> $cpf </td> <td> $situacao </td> <td> $sexo </td> <td><a href='excluir_cliente.php?codigo=$codigo'>
            <img src= 'excluir.png' > </a></td></tr>";
        }
        echo "</table>";
        ?>
    </main>
</body>
</html>