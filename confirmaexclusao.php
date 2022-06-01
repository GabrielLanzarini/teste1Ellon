<?php

require './phpConfigs/config.php';
require './phpConfigs/pessoa.php';


if($_SERVER['REQUEST_METHOD'] === 'POST' ){
    
    $pessoa = new Pessoa($mysql);
    $pessoa->apagarPessoa($_POST['id']);

    header('Location: cadastro.php');
    die();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/styleResize.css">

    <title>Cadastro e Consulta</title>
</head>
<body>

    <main>
        <div class="ellon-logo--div">
        </div>
    
        <div class="cadastro--div">
            <section class="cadastro--section section--deleta">
                <h1 class="h1--confirma-exlusao">Você deseja Realmente deletar essa pessoa?</h1>
                
                <div class="div-botoes">
                    <form method="post">
                        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
                        <button class="botao-cadastrar botao--excluir botao--confirmacao">Sim</button>
                    </form>
    
                    <form method="get" action="/Projeto1/cadastro.php">
                        <button class="botao-cadastrar botao--excluir botao--confirmacao">Não</button>
                    </form>
                </div>

            </section>
        </div>
    </main>
    
</body>
</html>