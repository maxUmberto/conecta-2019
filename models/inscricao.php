<?php

class Inscricao extends Model{
  public function confereEmail($email, $erro){
    $sql = "SELECT * FROM usuarios WHERE email = :email";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':email', $email);
    $sql->execute();

    if($sql->rowCount() > 0){
      return true;
    }

    if($erro == true){
      return true;
    }
  }

  public function confereMatricula($matricula, $erro){
    $sql = "SELECT * FROM usuarios WHERE matricula = :matricula";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':matricula', $matricula);
    $sql->execute();

    if($sql->rowCount() > 0){
      return true;
    }

    if($erro == true){
      return true;
    }
  }

  public function salvaInscricao(){
    $sql = "INSERT INTO usuarios SET nome = :nome, email = :email, instituicao = :instituicao, sexo = :sexo, matricula = :matricula";
    $sql = $this->db->prepare($sql);
    $sql->bindValue(':nome', $_POST['name']);
    $sql->bindValue(':email', $_POST['email']);
    $sql->bindValue(':instituicao', $_POST['instituicao']);
    $sql->bindValue(':sexo', $_POST['sex']);
    $sql->bindValue(':matricula', $_POST['matricula']);

    if($sql->execute()){
      return true;
    }
    return false;
  }
}

?>
