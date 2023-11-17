<!DOCTYPE html>
<html lang="Pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/style_index.css">
    <title>Bem-Vindo!</title>
</head>
<body>
    <header>
        <nav class="navigation">
            <a href="index.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"class="bi bi-house-door-fill" viewBox="0 0 16 16">
                    <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z" />         
                </svg>
            </a>
                    
            <ul class="nav-menu">             
                <li class="nav-item"><a href="index.php">Home</a></li>
                <li class="nav-item"><a href="tabela_crianca.php">Gerenciar</a></li>
                <li class="nav-item"><a href="cadastro_crianca.php">Cadastrar</a></li>
                
                <div class="box-search">
                    <input type="box-search" class="form-control" placeholder="Procurar criancas" id="search"> 
                    <a class="btn-search"><i class='bx bx-search'></i></a>
                </div>
            </ul>
            
            <div class="menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </nav>
    </header>
        
    <div class="container">
        <div class="contents">
            <div class="title">
                <h1>Gerenciar Criança</h1>
            </div>
            <div class="imagem">
                <a href="tabela_crianca.php">
                    <img class="" src="img/foto_crianca.jpg">
                </a>
            </div>
            <div class="continue-button">
                <button><a href="tabela_crianca.php">Entrar</a> </button>
            </div>
        </div>

        <div class="contents">
            <div class="title">
                <h1>Gerenciar Educador</h1>
            </div>
            <div class="imagem">
                <a href="tabela_educador.php">
                    <img class="" src="img/foto_educador.jpg">
                </a>
            </div>
            <div class="continue-button">
                <button><a href="tabela_educador.php">Entrar</a> </button>
            </div>
        </div>

        <div class="contents">
            <div class="title">
                <h1>Gerenciar Medicamento</h1>
            </div>
            <div class="imagem">
                <a href="tabela_medicamento.php">
                    <img class="" src="img/foto_remedio.png">
                </a>
            </div>
            <div class="continue-button">
                <button><a href="tabela_medicamento.php">Entrar</a> </button>
            </div>
        </div>
    </div>

    <script src="script.js"></script>
</body>
</html>