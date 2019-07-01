<?php

function validaNome($name){
  if(empty($name)){
    $_SESSION['name_error'] = 'Campo em branco';
    return 1;
  }else if (!preg_match("/^[a-zA-ZÀ-ú]*$/",$name)) {
    $_SESSION['name_error'] = "Digite somente letras";
    return 1;
  }
}

function validaSobrenome($name){
  if(empty($name)){
    $_SESSION['sobrenome_error'] = 'Campo em branco';
    return 1;
  }else if (!preg_match("/^[a-zA-ZÀ-ú]*$/",$name)) {
    $_SESSION['sobrenome_error'] = "Digite somente letras";
    return 1;
  }
}

?>
