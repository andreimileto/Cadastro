<?php
require_once 'DAO/pessoaDAO.php';
class pessoaControl{
    
    function salvar($conexaoBD,$pessoa){
        $conexaoBD->construct();
        $pessoaDAO = new pessoaDAO;
        
        $pessoa->setNome($_POST['nome']);
        $pessoa->setCpf($_POST['cpf']);
        $pessoa->setRg($_POST['rg']);
        $pessoa->setEndereco($_POST['endereco']);
        $pessoa->setTelefone($_POST['telefone']);
        
        $pessoaDAO->salvar($conexaoBD, $pessoa);
        
    }
}