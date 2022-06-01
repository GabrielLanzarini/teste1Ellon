<?php

require './phpConfigs/config.php';

include './phpConfigs/pessoa.php';
$pessoa = new Pessoa($mysql);
$pessoas = $pessoa->exibirPessoas();

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
            <section class="cadastro--section cadastro--section--cadastro--page">
                <h1 class="h1--consulta">Consulta de Pessoas</h1>
                <div class="cards--pessoas--ext-div">

                    
                    <?php foreach ($pessoas as $pessoa){ ?>

                    <div class="card--pessoas-int">
                        
                        <div class="div--flex--adjust">

                            <div class="card--info-div">
                                <p class="tag--consulta nome"> <?php echo $pessoa['nome'] ?> </p>
                                <p class="tag--consulta "> <?php echo $pessoa['tipo_pessoa'] ?> </p>
                                <p class="tag--consulta "> Data de Nascimento: <?php echo $pessoa['data_nascimento'] ?> </p>
                                <p class="tag--consulta">Documento Número: <?php echo $pessoa['numero_documento'] ?></p>
                                <p class="tag--consulta">Limite de Crédito R$<?php echo $pessoa['limite_credito'] ?></p>

                            </div>
                        
                            <div class="card--contato-div">

                                <table>
                                    <tr>
                                        <td><p class="tag--consulta tag--nome">E-mail:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['email'] ?></p></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Telefone Comercial:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['telCel'] ?></p></td>
                                    </tr>

                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Telefone Residencial:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['telRes'] ?></p></td>
                                    </tr>

                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Telefone Comercial:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['telCom'] ?></p></td>
                                    </tr>

                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Redes Sociais:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['redeSoc'] ?></p></td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>

                        <a style="text-align: center;" class="botao-cadastrar botao--excluir"  href="confirmaexclusao.php?id=<?php echo $pessoa['id']?>">Excluir Pessoa</a>
                        
                    </div>

                    <?php } ?>
                    <?php foreach ($pessoas as $pessoa){ ?>

                    <div class="card--pessoas-int">
                        
                        <div class="div--flex--adjust">

                            <div class="card--info-div">
                                <p class="tag--consulta nome"> <?php echo $pessoa['nome'] ?> </p>
                                <p class="tag--consulta "> <?php echo $pessoa['tipo_pessoa'] ?> </p>
                                <p class="tag--consulta "> Data de Nascimento: <?php echo $pessoa['data_nascimento'] ?> </p>
                                <p class="tag--consulta">Documento Número: <?php echo $pessoa['numero_documento'] ?></p>
                                <p class="tag--consulta">Limite de Crédito R$<?php echo $pessoa['limite_credito'] ?></p>

                            </div>
                        
                            <div class="card--contato-div">

                                <table>
                                    <tr>
                                        <td><p class="tag--consulta tag--nome">E-mail:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['email'] ?></p></td>
                                    </tr>
                                    
                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Telefone Comercial:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['telCel'] ?></p></td>
                                    </tr>

                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Telefone Residencial:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['telRes'] ?></p></td>
                                    </tr>

                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Telefone Comercial:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['telCom'] ?></p></td>
                                    </tr>

                                    <tr>
                                        <td><p class="tag--consulta tag--nome">Redes Sociais:</p></td>
                                        <td><p class="tag--consulta"><?php echo $pessoa['redeSoc'] ?></p></td>
                                    </tr>
                                </table>
                            </div>
                            
                        </div>

                        <a style="text-align: center;" class="botao-cadastrar botao--excluir"  href="confirmaexclusao.php?id=<?php echo $pessoa['id']?>">Excluir Pessoa</a>
                        
                    </div>

                    <?php } ?>
                </div>


                <a style="text-align: center" class="botao-cadastrar" href="index.php">Página de cadastro</a>
            </section>
        </div>
    </main>
    
</body>
</html>