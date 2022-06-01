<?php
class Pessoa {

    private $mysql;

    public function __construct(mysqli $mysql){
        $this->mysql = $mysql;
    }

    public function adicionar(string $nome, string $pessoaTipo, string $numeroDocumento, string $dataNascimento, int $limiteCredito, string $email, string $telefoneCelular, string $telefoneResidencial, string $telefoneComercial, string $redeSocial ) : void
    {
        $inserePessoa = $this->mysql->prepare('INSERT INTO `pessoa_info`(`nome`, `tipo_pessoa`, `numero_documento`, `data_nascimento`, `limite_credito`, `email`, `telCel`, `telRes`, `telCom`, `RedeSoc`) VALUES (?,?,?,?,?,?,?,?,?,?)');
        $inserePessoa->bind_param('ssssisssss', $nome, $pessoaTipo, $numeroDocumento, $dataNascimento, $limiteCredito, $email, $telefoneCelular, $telefoneResidencial, $telefoneComercial, $redeSocial);
        $inserePessoa->execute();
    }

    public function exibirPessoas() : array {

        $resultado = $this->mysql->query('SELECT id, nome, tipo_pessoa, numero_documento, data_nascimento, limite_credito, email, telCel, telRes, telCom, redeSoc FROM pessoa_info');
        $pessoas = $resultado->fetch_all(MYSQLI_ASSOC);

        return $pessoas;
    }

    public function apagarPessoa(string $id) : void
    {

        $removerPessoa =$this->mysql->prepare('DELETE FROM pessoa_info WHERE id = ?');
        $removerPessoa->bind_param('s', $id);
        $removerPessoa->execute();
        
    }
}
?>