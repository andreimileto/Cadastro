<?php

require_once 'DAO/pessoaDAO.php';

class pessoaControl {

    function salvar($conexaoBD, $pessoa) {
        $conexaoBD->construct();
        $pessoaDAO = new pessoaDAO;

        if ($_POST['nome'] != null &&
                $_POST['cpf'] != null &&
                $_POST['rg'] != null &&
                $_POST['endereco'] != null &&
                $_POST['telefone'] != null
        ) {
            $pessoa->setNome($_POST['nome']);
            $pessoa->setCpf($_POST['cpf']);
            $pessoa->setRg($_POST['rg']);
            $pessoa->setEndereco($_POST['endereco']);
            $pessoa->setTelefone($_POST['telefone']);

            $pessoaDAO->salvar($conexaoBD, $pessoa);
            header('Location: index.php');
        } else {

            header('Location: index.php');
        }
    }

    function consultar($conexaoBD, $pessoa) {
        $pessoaDAO = new pessoaDAO;


//        $return = array();
//         $pessoaDAO = new pessoaDAO;
//        $arrayPessoa = $pessoaDAO->consultar($conexaoBD,$pessoa);
        $retorno = array();

        $retorno = $pessoaDAO->consultar($conexaoBD, $pessoa);

        return $retorno;
    }

    function teste() {
        echo 'teste';
        exit;
    }

}
