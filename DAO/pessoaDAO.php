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
    
    function consultar($conexaoBD, $pessoa){
        
        $conexaoBD->construct();
        
        $sql = 'select * from pessoa p';
        
      $result = $conexaoBD->query($sql);
      $retorno = array();
      
      while ($row = pg_fetch_assoc($result)) {
          $pessoa = new pessoa();
          $pessoa->setId($row['id']);
          $pessoa->setNome($row['nome']);
          $pessoa->setCpf($row['cpf']);
          $pessoa->setRg($row['rg']);
          $pessoa->setEndereco($row['endereco']);
          $pessoa->setTelefone($row['telefone']);
          array_push($retorno, $pessoa);
          
      }
        
      
        return $retorno;
    }
}