<?php

class Admin extends Model{
    public function selecionaTodosIndex(){
        $sql = "SELECT sexo,instituicao,matricula FROM usuarios";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();
            return $sql;
        }
    }

    public function selecionaTodosInscritos(){
        $sql = "SELECT id_usuario,nome FROM usuarios ORDER BY nome ASC";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();
            return $sql;
        }
    }
}

?>