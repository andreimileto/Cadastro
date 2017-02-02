<?php

Class conexaoBD {

    protected $pg;

    function construct() {

        try {


            $this->pg = pg_connect("host=localhost port=5432 dbname=pessoa user=postgres password=postgres") or die("Erro ao conectar com o banco de dados");

            if (pg_connection_status($this->pg) !== 0) {

                throw new Exception("Conexao Falhou");
                return false;
            }
        } catch (Exception $erro) {
            echo'erro';
            echo $erro->getMessage();
            exit;
        }
        return true;
    }

    function destruct() {
        return pg_connection_status($this->pg) === 0 ? (!pg_connection_busy($this->pg) ? @pg_close($this->pg) : false) : false;
    }

    public function query($sql) {

        if (pg_connection_status($this->pg) === 0) {
            if ($this->re = @pg_query($this->pg, $sql)) {
                if (preg_match("#^\s?(select)#i", $sql)) {
                    if (pg_num_rows($this->re) > 0) {
                        return $this->re;
                    }
                } else {
                    return "" . pg_affected_rows($this->re);
                }
            } else {
                echo pg_last_error();
                exit;
            }
        } else {
            echo 'sem conexao';
            exit;
        }
    }

}

?>