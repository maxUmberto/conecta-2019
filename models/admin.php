<?php

class Admin extends Model{
    public function selecionaTodos(){
        $sql = "SELECT * FROM usuarios";
        $sql = $this->db->query($sql);

        if($sql->rowCount() > 0){
            $sql = $sql->fetchAll();
            return $sql;
        }
    }
}

?>