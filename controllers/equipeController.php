<?php

class equipeController extends Controller {

  public function index(){
    $dados = array();
    $this->loadTemplate('equipe', $dados);
  }

}
?>
