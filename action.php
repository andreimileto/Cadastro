<?php

require_once 'modelo/pessoa.php';
require_once 'controle/pessoaControl.php';
require_once 'dao/conexaoBD.php';
$pessoa = new pessoa;
$pessoaControl = new pessoaControl;
$conexaoBD = new conexaoBD;
$pessoaControl->salvar($conexaoBD, $pessoa);
