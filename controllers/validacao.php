<?php

function validaNome($name){
  if(empty($name) || $name == ''){
    $_SESSION['error']['name'] = 'Campo em branco';
    return true;
  }else if (!preg_match("/^[a-zA-ZÀ-ú]*$/",$name)) {
    $_SESSION['error']['name'] = "Digite somente letras";
    return true;
  }
}

function validaSobrenome($lastname){
  if(empty($lastname) || $lastname == ''){
    $_SESSION['error']['lastname'] = 'Campo em branco';
    return true;
  }else if (!preg_match("/^[a-zA-ZÀ-ú]*$/",$lastname)) {
    $_SESSION['error']['lastname'] = "Digite somente letras";
    return true;
  }
}

function validaEmail($email){
  if(empty($email) || $email == ''){
    $_SESSION['error']['email'] = 'Campo em branco';
    return true;
  } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error']['email'] = 'Email inválido';
    return true;
  }
}

function validaAssunto($subject){
  if(empty($subject) || $subject == ''){
    $_SESSION['error']['subject'] = 'Campo em branco';
    return true;
  } else if (!preg_match("/^[0-9a-zA-ZÀ-ú ]*$/",$subject)) {
    $_SESSION['error']['subject'] = "Assunto inválido";
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

?>
