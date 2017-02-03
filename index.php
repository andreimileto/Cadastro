<?php
require_once 'controle/pessoaControl.php';
require_once 'dao/conexaoBD.php';
require_once 'modelo/pessoa.php';
$pessoaControl = new pessoaControl;
$conexaoBD = new conexaoBD;
$pessoa = new pessoa;
$result = $pessoaControl->consultar($conexaoBD, $pessoa);

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Cadastro de pessoas</title>
    </head>
    <body>
        <form action ="cadastroPessoa.php" method="post"> <br><br>
            Nome:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <input type="text" name="nome"/><br><br>
            cpf: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;
            <input type="text" name="cpf"/><br><br>
            RG: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="rg"/><br><br>
            Endereço: <input type="text" name="endereco"/><br><br>
            Telefone:&nbsp; <input type="text" name="telefone"/><br><br>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <button>
                Salvar
            </button>

            <select>
                <option>
                    Selecionar
                </option>
                <?php
                foreach ($result as $value) {
                    ?>
                    <option
                        value="<?php echo $value->getId() ?>"><?php echo $value->getNome() ?>
                    </option>
                    <?php
                }
                ?>
            </select>
             <select>
                <option>
                    Selecionar
                </option>
                <?php
                foreach ($result as $value) {
                    ?>
                    <option
                        value="<?php echo $value->getId() ?>"><?php echo $value->getCpf() ?>
                    </option>
                    <?php
                }
                ?>
            </select>
        </form>
<?php
?>
    </body>
</html>
