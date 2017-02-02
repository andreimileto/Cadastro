<?php

class pessoaDAO{
    
    function salvar($conexaoBD, $pessoa){
        
        //$sql = 'insert into pessoa values(default,\'teste\',\'123\',\'456\',\'endereco\',\'123543\')';
        //echo $sql;
        
        $sql = 'insert into pessoa values(default,'
                .'\''.$pessoa->getNome().'\','
                .'\''.$pessoa->getCpf().'\','
                .'\''.$pessoa->getRg().'\','
                .'\''.$pessoa->getEndereco().'\','
                .'\''.$pessoa->getTelefone().'\')';
        
        return $conexaoBD->query($sql);
    }
}