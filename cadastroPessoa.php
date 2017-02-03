<?php

require_once 'modelo/pessoa.php';
require_once 'controle/pessoaControl.php';
require_once 'dao/conexaoBD.php';
$pessoa = new pessoa;
$pessoaControl = new pessoaControl;
$conexaoBD = new conexaoBD;

$pessoaControl->salvar($conexaoBD, $pessoa);



// $result = $pessoaControl->consultar($conexaoBD,$pessoa);
 
 header('Location: index.php?nome=andrei');
 
 echo $result;

