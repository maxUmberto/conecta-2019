<?php

class homeController extends Controller {

  public function index(){
    $dados = array();
    $this->loadTemplate('home', $dados);
  }

  public function formulario(){
    $erro = 0;
    require 'validacao.php';

    $erro = validaNome($_POST['name']);
    $erro = validaSobrenome($_POST['lastname']);

    if($erro != 0){
      header ('Location: '.BASE_URL.'/home#contato');
      die();
    }
    echo 'tudo certinho';

  }

}
?>
