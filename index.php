<?php

require './phpConfigs/config.php';
require './phpConfigs/pessoa.php';


if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $pessoa = new Pessoa($mysql);
    $pessoa->adicionar($_POST['nome'], $_POST['pessoa'], $_POST['numero_documento'],$_POST['data_nascimento'], $_POST['limite_cartao'] , $_POST['email'], $_POST['telefone_celular'],  $_POST['telefone_residencial'],  $_POST['telefone_comercial'], $_POST['redes_sociais']);

    header('Location: index.php');
    die();
};
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
            <form require method="post" class="cadastro--section">

                <div class="infos-pessoais--div">
                    <h1>Informações Pessoais</h1>

                    <div class="div--inputs">
                        <label for="">Nome</label>
                        <input required name="nome" placeholder="João Silva" id="nome--input" type="text">
                    </div>
    
                    <div class="div--inputs">
                        <label for="">Pessoa</label>
                        <select name="pessoa" placeholder="" id="pessoa--input"> 
                            <option value="Física">Física</option>
                            <option value="Jurídica">Jurídica</option>
                        </select>
                    </div>
                    
                    <div class="div--inputs">
                        <label for="">Número do Documento</label>
                        <input required name="numero_documento" placeholder="052.152.785-85" id="documento--input" type="text">
                    </div>
    
                    <div class="div--inputs">
                        <label for="">Data de Nascimento</label>
                        <input required name="data_nascimento" placeholder="DD / MM / YYYY" id="data--input" type="text">
                    </div>
                    
                    <div class="div--inputs">
                        <label for="">Limite de Crédito</label>
                        <input required name="limite_cartao" placeholder="1500" id="limiteCred--input" type="number">
                    </div>
                </div>
                
                <div class="contato--div">
                    <h1>Informações de Contato</h1>

                    <div class="div--inputs">
                        <label for="">E-mail</label>
                        <input required name="email" placeholder="Ex. Joao.silva@gmail.com" id="email--input" type="email">
                    </div>
    
                    <div class="div--inputs">
                        <label for="">Telefone Celular</label>
                        <input required name="telefone_celular" placeholder="(DDD) XXXX-XXXX" id="telCel--input" type="tel">
                    </div>
    
                    <div class="div--inputs">
                        <label for="">Telefone Residencial</label>
                        <input name="telefone_residencial" placeholder="(DDD) XXXX-XXXX" id="telRes--input" type="tel">
                    </div>

                    <div class="div--inputs">
                        <label for="">Telefone Comercial</label>
                        <input name="telefone_comercial" placeholder="(DDD) XXXX-XXXX" id="telCom--input" type="tel">
                    </div>
    
                    <div class="div--inputs">
                        <label for="">Redes Sociais</label>
                        <input name="redes_sociais" placeholder="Ex. @JoãoSilva" id="redSoc--input" type="text">
                    </div>

                    <div class="botoes--bottom">
                        <a class="link--consulta--cadastro" href="cadastro.php">Consultar Cadastros</a>
                        <button id="botao--cadastro" class="botao-cadastrar">Cadastrar Pessoa</button>
                    </div>
            
                </div>

            </form>
        </div>
    </main>
    
</body>
<script src="script.js"></script>

</html>