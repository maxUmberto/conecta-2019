<?php

function validaNome($name, $string, $erro){
  if(empty($name) || $name == ''){
    $_SESSION[$string]['name'] = 'Campo em branco';
    return true;
  }else if (!preg_match("/^[a-zA-ZÀ-ú ]*$/",$name)) {
    $_SESSION[$string]['name'] = "Digite somente letras";
    return true;
  }

  if($erro == true){
    return true;
  }
}

function validaSobrenome($lastname, $erro){
  if(empty($lastname) || $lastname == ''){
    $_SESSION['error']['lastname'] = 'Campo em branco';
    return true;
  }else if (!preg_match("/^[a-zA-ZÀ-ú]*$/",$lastname)) {
    $_SESSION['error']['lastname'] = "Digite somente letras";
    return true;
  }

  if($erro == true){
    return true;
  }
}

function validaEmail($email, $string, $erro){
  if(empty($email) || $email == ''){
    $_SESSION[$string]['email'] = 'Campo em branco';
    return true;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION[$string]['email'] = 'Email inválido';
    return true;
  }

  if($erro == true){
    return true;
  }
}

function validaAssunto($subject, $erro){
  if(empty($subject) || $subject == ''){
    $_SESSION['error']['subject'] = 'Campo em branco';
    return true;
  } else if (!preg_match("/^[0-9a-zA-ZÀ-ú ]*$/",$subject)) {
    $_SESSION['error']['subject'] = "Assunto inválido";
    return true;
  }

  if($erro == true){
    return true;
  }
}

function validaMensagem($message, $erro){
  if(empty($message) || $message == ''){
    $_SESSION['error']['message'] = 'Campo em branco';
    return true;
  }
  if($erro == true){
    return true;
  }
}

function validaInstituicao($instituicao, $erro){
  if($instituicao > 3 || $instituicao < 1){
    $_SESSION['inscricao']['instituicao'] = 'Instituição inserida é inválida';
    return true;
  }

  if($erro == true){
    return true;
  }
}

function validaSexo($sex, $erro){
  if($sex > 3 || $sex < 1){
    $_SESSION['inscricao']['sex'] = 'Sexo inserido é inválido';
    return true;
  }

  if($erro == true){
    return true;
  }
}

function validaMatricula($matricula, $erro){
  if(empty($matricula)){
    $_SESSION['inscricao']['matricula'] = 'Campo em branco';
    return true;
  } else if(!preg_match("/^[0-9]+$/",$matricula)){
    $_SESSION['inscricao']['matricula'] = 'Digite somente números na matricula';
    return true;
  } else if(strlen($matricula) != 10 ){
    $_SESSION['inscricao']['matricula'] = 'Quantidade de caracteres inválida';
    return true;
  }

  if($erro == true){
    return true;
  }
}

?>
