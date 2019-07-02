<?php

class homeController extends Controller {

  public function index(){
    $dados = array();
    $this->loadTemplate('home', $dados);
  }

  public function formulario(){
    $erro = false;
    require 'validacao.php';

    $erro = validaNome($_POST['name']);
    $erro = validaSobrenome($_POST['lastname']);
    $erro = validaEmail($_POST['email']);
    $erro = validaAssunto($_POST['subject']);
    $erro = validaMensagem($_POST['message'], $erro);

    if($erro != false){
      $_SESSION['form'] = array(
        'name' => $_POST['name'],
        'lastname' => $_POST['lastname'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
      );
      header ('Location: '.BASE_URL.'/home#contato');
      die();
    }else{
      echo '<pre>';
      print_r($_POST);
      echo '</pre>';
      echo 'tudo certinho';
    }

  }

}
?>
